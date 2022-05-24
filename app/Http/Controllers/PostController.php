<?php

namespace App\Http\Controllers;

use App\Model\Admin;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redis;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use mysql_xdevapi\Exception;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public $mkv = ["user:001" => 'First user', "user:002" => "Second user", "user:003" => "Third user"];

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
//        echo '<pre style="border: 1px solid #f44336;">'.print_r(array_keys($this->mkv),1).'</pre>';
//        $retval = Redis::mget( array_keys($this->mkv) );
//        echo '<pre style="border: 1px solid #f44336;">'.print_r($retval,1).'</pre>';exit;
        $getData = $request->only('num', 'category', 'page', 'search_itemNo');
        if (empty($getData['num'])) {
            $getData['num'] = 20;
        }
        if (empty($getData['search_itemNo'])) {
            $getData['search_itemNo'] = '';
        }
        if (empty($getData['category'])) {
            $getData['category'] = '';
        }
        //DB::enableQueryLog();
        //->whereBetween('dateReg', ['2022-01-01 00:00:00', '2022-03-01 00:00:00'])
        $itemData = Item::select('itemList.largeImage', 'itemList.itemNo', 'itemList.itemName', 'itemList.supplyPrice', 'itemList.no', 'itemList.sellerId', 'itemList.sellerNick')->leftJoin('itemListDetail', 'itemList.itemNo', '=', 'itemListDetail.itemNo')->where(function ($query) use ($getData) {
            if (array_member('search_itemNo', $getData)) {
                $query->where('itemList.itemNo', $getData['search_itemNo'])->orWhere('itemList.itemName', 'like', '%' . $getData['search_itemNo'] . '%')->orWhere('itemList.sellerId', 'like', '%' . $getData['search_itemNo'] . '%')->orWhere('itemList.sellerNick', 'like', '%' . $getData['search_itemNo'] . '%');
            }
        })->orderBy('itemList.no', 'DESC')->paginate($getData['num']);
        //dd(DB::getQueryLog());
//        $count = Item::where('itemNo', '>' , '20000000')->count('no');
        $count = Item::count('no');
        return view('posts.index', compact('itemData', 'count', 'getData'));
    }

    private function getImageUrl($imgData)
    {
        $randNum = rand(0, count($imgData) - 1);
        $largeImage = $imgData[$randNum]->largeImage;
        if (!@file_get_contents($largeImage)) {
            $largeImage = $this->getImageUrl($imgData);
        }
        return $largeImage;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $paginate = 10000;
        $imgData = Item::select('itemList.largeImage')->leftJoin('itemListDetail', 'itemList.itemNo', '=', 'itemListDetail.itemNo')->orderBy('itemList.no', 'DESC')->paginate($paginate);
        //$imgData=json_decode($imgData,true);
        $largeImage = $this->getImageUrl($imgData);
        return view('posts.create', compact('largeImage'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->only('itemName', 'itemNo', 'largeImage', 'supplyPrice');
        $rules = [
            'itemName' => 'required|max:100',
            'itemNo' => 'required|numeric',
        ];

        $msg = [
            'itemName.required' => '상품명을 입력해주세요',
            'itemName.max' => '상품명은 100자이하로 입력해주세요',
            'itemNo.required' => '상품번호를 입력해주세요',
            'itemNo.numeric' => '상품번호를 반드시 숫자로 입력해주세요'
        ];

        $validator = Validator::make($input, $rules, $msg);
        if ($validator->passes()) {
            unset($input['_token']);
            unset($input['_method']);
            unset($input['itemNo_temp']);
            $result = Item::insert($input);
            if ($result) {
                echo "<script>alert('추가되었습니다')</script>";
            } else {
                echo '<script>alert("추가실패~!!")</script>';
            }
        } else {
            $_errors = $validator->errors()->getMessages();
            $errors = array();

            foreach ($_errors as $k => $v) {
                $errors[] = $v[0];
            }
            echo "<script>alert('". $errors[0]."');window.location.href='posts/create'</script>";die;
        }
        return redirect('posts');
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        Redis::set('edit_id', $id);
        Redis::mset($this->mkv);
        $data = Item::find($id);
        //$data = Item::where('no', $id)->first();
        return view('posts.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = array();
        Redis::set('update_id', $id);
        $req = $request->only('data');
        $input = datas($req['data']);
        $rules = [
            'itemName' => 'required|max:100',
        ];

        $msg = [
            'itemName.required' => '상품명을 입력해주세요',
            'itemName.max' => '상품명은 100자이하로 입력해주세요',
            'itemNo.required' => '상품번호를 입력해주세요',
        ];

        if ($input['itemNo'] != $input['itemNo_temp']) {
            $msg['itemNo.unique'] = '이미 존재하는 상품번호입니다';
            $rules['itemNo'] = 'required|unique:itemList,itemNo';
        } else {
            $rules['itemNo'] = 'required';
        }
        $validator = Validator::make($input, $rules, $msg);
        if ($validator->passes()) {
            unset($input['_token']);
            unset($input['_method']);
            unset($input['itemNo_temp']);
            $result = Item::where('no', $id)->update($input);

            if ($result !== false) {
                $data['state'] = 0;
                $data['msg'] = '수정성공';
            } else {
                $data['state'] = 1;
                $data['msg'] = '수정실패';
            }
        } else {
            $data['state'] = 2;
            $data['msg'] = '데이터인증실패';

            $_errors = $validator->errors()->getMessages();
            $errors = array();

            foreach ($_errors as $k => $v) {
                $errors[$k] = $v[0];
            }

            $data['errors'] = $errors;
        }

        return $data;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function deleteItem(Request $request)
    {
        $data = array();

        $req = $request->all();
        foreach ($req['data'] as $v) {
            if ($v['name'] == 'itemNoArr')
                $data[] = $v['value'];
        }
        if (count($data)) {
            $result = Item::whereIn('itemNo', $data)->delete();
            DB::table('itemListDetail')->whereIn('itemNo', $data)->delete();
            if ($result !== false) {
                $data['state'] = 0;
                $data['msg'] = '삭제성공';
            } else {
                $data['state'] = 1;
                $data['msg'] = '삭제실패';
            }
        }
        return $data;
    }
}
