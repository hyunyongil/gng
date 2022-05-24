<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;

class ListController extends Controller
{
    public function main()
    {
        $str = 'good~!';
//        $item = Item::getItem();
//        $item = Item::get()->toArray();
//        dd($item);
//session(['name'=>'g1234']);
//        dd(session('name'));
        //Cookie::queue('name4', '123123123123', 1440);
//        $email = DB::table('itemList')->select('itemList.itemName')->join('itemListDetail','itemList.itemNo', '=' , 'itemListDetail.itemNo')->where('itemList.itemNo', '19412454')->first();
//        echo '<pre style="border: 1px solid #f44336;">'.print_r($email,1).'</pre>';exit;
//        $result = DB::table('itemList')->whereIn('no',['4557851','4557849'])->get();
//        echo '<pre style="border: 1px solid #f44336;">'.print_r($result,1).'</pre>';exit;
//        $users = Item::select('itemName as it','itemNo as io')
//            ->where('itemName', 'like', '%퍼즐%')
//            ->get();
//        foreach ($users as  $k => $v) {
//            echo '<pre style="border: 1px solid #f44336;">'.print_r($v->it,1).'</pre>';
//            echo '<pre style="border: 1px solid #f44336;">'.print_r($v->io,1).'</pre>';
//        }
//        echo '<pre style="border: 1px solid #f44336;">'.print_r($users,1).'</pre>';
//exit;
        //$result = DB::table('itemList')->join('no',['4557851','4557849'])->get();
        //dd(Cookie::get('name4'));
        $itemData = DB::table('itemList')->select('*')->join('itemListDetail', 'itemList.itemNo', '=', 'itemListDetail.itemNo')->paginate(10);

//        Item::orderBy('no')->chunk(50, function ($items) {
//            foreach ($items as $key=>$item) {
//                echo '<pre style="border: 1px solid #f44336;">'.print_r($key,1).'</pre>';
//            }
//        });
//        exit;
        return view('list', compact('itemData'));
    }
}
