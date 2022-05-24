@extends('include.layout')

@section('content')
    <div class="container" style="margin-top: 10px;">

        <form id="edit-form" method="POST">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="itemNo_temp" value="{{$data->itemNo}}">
            <input type="text" class="input1" style="width: 1100px;" name="largeImage"
                   value="{{$data->largeImage}}"/><br/><br/>
            <input type="text" class="input1" style="width: 600px;" name="itemName" placeholder="제목"
                   value="{{$data->itemName}}"/><br/><br/>
            <input type="text" class="input1" name="itemNo" placeholder="상품번호" value="{{$data->itemNo}}"/><br/><br/>
            <input type="text" class="input1" name="supplyPrice" placeholder="공급가" value="{{$data->supplyPrice}}"/><br/><br/>
            <input class="button20" type="button" value="수정" onclick="edit('{{$data->no}}');" style="margin-top: 5px;"/><br/><br/>
        </form>
    </div>
    <script>
        layui.use(['layer']);

        function edit(id) {
            let data = $('#edit-form').serializeArray();

            $.post('{{ _url_('posts') }}/' + id, {
                'data': data,
                '_method': 'PUT',
                '_token': '{{ csrf_token() }}'
            }, function (data) {
                if (data.state === 0) {
                    layer.msg(data.msg, {time: 2000});
                    window.location.href = '{{ _url_('posts') }}';
                } else {
                    if (data.errors.itemName) {
                        layer.msg(data.errors.itemName, {time: 2000, anim: 6});
                    }
                    if (data.errors.itemNo) {
                        layer.msg(data.errors.itemNo, {time: 2000, anim: 6});
                    }
                }
            });
        }
    </script>
@endsection
