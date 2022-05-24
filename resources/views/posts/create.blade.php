@extends('include.layout')

@section('content')
    <div class="container">

        <form method="POST" action="{{_url_('posts')}}">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="largeImage"
                   value="{{$largeImage}}"/><br/>
            <div><img src="{{$largeImage}}" style="width: 80px;margin-bottom: 20px;border: 1px solid #ddd;"></div>
            <input type="text" class="input1" style="width: 600px;" name="itemName" placeholder="제목"/><br/><br/>
            <input type="text" class="input1" name="itemNo" placeholder="상품번호" pattern=[0-9]* /><br/><br/>
            <input type="text" class="input1" name="supplyPrice" placeholder="공급가" pattern=[0-9]* /><br/><br/>
            <input class="button20" type="submit" value="확인"/><br/><br/>
        </form>
    </div>
@endsection
