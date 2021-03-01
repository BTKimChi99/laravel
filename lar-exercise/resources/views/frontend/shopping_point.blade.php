@extends('layout.layout_frontend')
@section('title', 'Shopping_points')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/shopping_point.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/common.css')}}">
@endsection
@section('content')

@include('frontend\common')

<div class="page-content" id="shopping_points">
    <div class="point-page">
        <ul class="nav nav-tabs">
            <li class="nav-item" >
                <a class="nav-link nav-link-one" href="{{ route('users.shopping_points')}}">チェックポイ</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link nav-link-two"  href="{{ route('users.experience_points')}}">観光ポイント</a>
            </li>
            <li class="nav-item" >
                <a class="nav-link nav-link-three" href="">体験ポイント</a>
            </li>
        </ul>
        <div class="container-fluid">
            <div class="block-content">
                <div class="content-point ">
                    <div class="point row">
                        <div class="point-left col-6">
                            <div class="title-point">
                                <label>
                                    <span>暫定</span>
                                    <span>得点</span>
                                </label>
                                <input type="text" value=""/>
                            </div>
                        </div>
                        <div class="point-right col-6">
                            <div class="title-point">
                                <label>
                                    <span>残り</span>
                                    <span>時間</span>
                                </label>
                                <input type="text" value="120 : 00"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-text">
        <div class="block-text-title">
            <span>買い物ポイント</span>
        </div>
        <div class="block-text-small">
            <span>指定されたお店で買い物をした商品や<br>
            レシートの写真を撮影してください</span>
        </div>
    </div>
    <div class="img-btn col-12">
        <a href="{{ route('users.result')}}" class="btn common-btn blue-color">
            <span>フィニッシュ</span>
            <img src="{{ asset('imgs/icon_arow_right.png') }}" alt="">
        </a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="img-backgroud">
                    <div class="block-img-black"></div>
                    <div class="block-img-black-plus">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="img-backgroud img-backgroud-two">
                    <div class="block-img-black"></div>
                    <div class="block-img-black-plus">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="img-backgroud img-backgroud-two">
                    <div class="block-img-black"></div>
                    <div class="block-img-black-plus">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
