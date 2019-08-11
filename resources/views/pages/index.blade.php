@extends('layouts.app')
@section('title', '首页')

@section('content')
    <!-- banner部分 -->
    <div>
        <div class="layui-carousel" id="banner">
            <div carousel-item>
                @foreach($carousels as $carousel)
                    <div>
                        <img src="{{ $carousel->image }}">
                        <div class="panel">
                            <p class="title">{{ $carousel->title }}</p>
                            <p>{{ $carousel->sub_title }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- main部分 -->
    <div class="main-product">
        <div class="layui-container">
            <p class="title"><span>游戏机台</span></p>
            <div class="layui-row layui-col-space25">
                @foreach($games as $game)
                    <div class="layui-col-sm6 layui-col-md3">
                        <div class="content">
                            <div><img src="/res/static/img/Big_icon1.png"></div>
                            <div>
                                <p class="label">{{ $game->name }}</p>
                                <p></p>
                            </div>
                            <a href="{{ route('products.show', [$game->id]) }}">查看产品 ></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="main-service">
        <div class="layui-container">
            <p class="title"><span>消息公告</span></p>
            @include('articles._article_list', ['articles' => $articles])
        </div>
    </div>

{{--    <div class="main-service">--}}
{{--        <div class="layui-container">--}}
{{--            <p class="title"><span>活动中心</span></p>--}}
{{--            <div class="layui-carousel" id="test10">--}}
{{--                <div carousel-item="">--}}
{{--                    <div><img src="/res/static/img/banner1.jpg"></div>--}}
{{--                    <div><img src="/res/static/img/banner2.jpg"></div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <br>
    <br>
    <br>
@stop

@section('script')
    <script>
        // layui.use(['carousel'], function(){
        //     var carousel = layui.carousel;
        //
        //     //图片轮播
        //     carousel.render({
        //         elem: '#test10'
        //         ,width: '100%'
        //         ,height: '440px'
        //         ,interval: 3000
        //     });
        //
        // });
        layui.use(['util', 'laypage', 'layer'], function(){
            var util = layui.util
            ,laypage = layui.laypage
            ,layer = layui.layer;

            //固定块
            util.fixbar({
                bar1: '&#xe61e;'
                ,css: {right: 1, bottom: 100}
                ,bgcolor: '#ccc'
                ,click: function(type){
                    if(type === 'bar1'){
                        layer.msg('这是一个即将实现的弹窗')
                    }
                }
            });

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
                        window.location.href='{{ route('pages.index') }}?page=' + obj.curr;
                    }
                }
            });
        });
    </script>
@stop
