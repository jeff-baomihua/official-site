@extends('layouts.app')
@section('title', '活动中心')

@section('content')
    <!-- banner部分 -->
    <div class="banner product">
        <div class="title">
            <p>活动展示</p>
            <p class="en">Product Display</p>
        </div>
    </div>

    <!-- main部分 -->
    <div class="main-service">
        <div class="layui-container">
            @include('articles._article_list', ['articles' => $articles])
        </div>
    </div>

@stop

@section('script')
    <script>
        layui.use(['laypage', 'layer'], function(){
            var laypage = layui.laypage;

            //执行一个laypage实例
            laypage.render({
                elem: 'page' //注意，这里的 test1 是 ID，不用加 # 号
                ,count: '{{ $articles->total() }}' //数据总数，从服务端得到
                ,limit: '{{ $articles->perPage() }}'
                ,curr: '{{ $articles->currentPage() }}'
                ,jump: function(obj, first) {
                    console.log(obj);
                    console.log(first);
                    // 首次不执行
                    if(!first){
                        window.location.href='{{ route('articles.index') }}?page=' + obj.curr;
                    }
                }
            });
        });
    </script>
@stop