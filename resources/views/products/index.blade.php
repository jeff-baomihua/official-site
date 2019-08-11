@extends('layouts.app')
@section('title', '游戏介绍')

@section('content')
    <!-- banner部分 -->
    <div class="banner product">
        <div class="title">
            <p>产品展示</p>
            <p class="en">Product Display</p>
        </div>
    </div>

    <!-- main部分 -->
    @foreach($productTypes as $productType)
    <div class="main-product">
        <div class="layui-container">
                <p class="title"><span>{{ $productType->name }}</span></p>
                <div class="layui-row layui-col-space25">
                    @if (isset($productType->products))
                        @foreach($productType->products as $product)
                            <div class="layui-col-sm6 layui-col-md3">
                                <div class="content">
                                    <div><img src="/res/static/img/Big_icon1.png"></div>
                                    <div>
                                        <p class="label">{{ $product->name }}</p>
                                        <p></p>
                                    </div>
                                    <a href="{{ route('products.show', [$product->id]) }}">查看产品 ></a>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
        </div>
    </div>
    @endforeach


@stop

@section('script')

@stop