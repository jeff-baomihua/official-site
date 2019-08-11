@extends('layouts.app')
@section('title', '充值中心')

@section('content')
    <!-- banner部分 -->
    <div class="banner product">
        <div class="title">
            <p>充值通道</p>
            <p class="en">Product Display</p>
        </div>
    </div>

    <!-- main部分 -->
    <div class="main-product">
        <div class="layui-container">
            <div class="layui-tab layui-tab-card" lay-filter="demo">
                <ul class="layui-tab-title">
                    <li class="layui-this" onmousemove="this.click()">微信</li>
                    <li  onmousemove="this.click()">支付宝</li>
                    <li  onmousemove="this.click()">银行卡</li>
                </ul>
                <div class="layui-tab-content" style="height: 300px;text-align: center;">
                    <div class="layui-tab-item layui-show"><img src="/res/static/img/case1.jpg" alt=""></div>
                    <div class="layui-tab-item"><img src="/res/static/img/case2.jpg" alt=""></div>
                    <div class="layui-tab-item"><img src="/res/static/img/case3.jpg" alt=""></div>
                </div>
            </div>
        </div>
    </div>


@stop

@section('script')

@stop