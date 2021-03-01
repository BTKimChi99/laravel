@extends('layout.layout_frontend')
@section('title', 'Result')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/result.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/common.css')}}">
@endsection
@section('content')

@include('frontend\common')

<div class="page-content">
    <div class="banner-result">
        <div class="background-banner-result">
        </div>
        <div class="block-content-result">
            <div class="container">
                <div class="row">
                    <div class="title-result">
                        <span>坂の町 Fight 夏サカ編</span>
                    </div>
                </div>
                <div class="row">
                    <div class="title-result-bold">
                        <span>チーム名</span>
                    </div>
                </div>
                <div class="row">
                    <div class="title-result-small">
                        <span>八尾観光協会ロゲイニング<br>研究会</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="img-icon-result">
                            <img src="{{ asset('imgs/bag_p.png') }}" alt="">
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="block-point-number">
                            <span class="point-number-result">1108  </span>
                            <span class="small-point"> Point</span>
                        </div>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-6 info_header-left ">
                        <h1 class="info_header_left-text result-style">集合場所 <br>八尾曳山展示館 <br>(富山市八尾）</h1>
                        <span>24/01/2020</span>
                    </div>
                    <div class="col-6 info_header-right info_header-right-style">
                        <p class="header_right-title mb-0 result-style">受付内容</p>
                        <p class="header_right-text result-style">
                            <span><img src="{{ asset('imgs/icon_target.png') }}" alt=""></span>
                            ロゲイニング <br>
                            <span><img src="{{ asset('imgs/icon_clock.png') }}" alt=""></span>
                            5時間 <br>
                            <span><img src="{{ asset('imgs/icon_user.png') }}" alt=""></span>
                            ファミリー
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=" block-gallery">
        <div class="container">
            <div class="row">
                <div class="col-4 p-0 block-gallery-item">
                    <a href="">
                        <img src="{{ asset('imgs/default_image.png') }}">
                    </a>
                </div>
                <div class="col-4 p-0 block-gallery-item">
                    <a href="">
                        <img src="{{ asset('imgs/default_image.png') }}">
                    </a>
                </div>
                <div class="col-4 p-0 block-gallery-item bdr-none">
                    <a href="">
                        <img src="{{ asset('imgs/default_image.png') }}">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-4 p-0 block-gallery-item">
                    <a href="">
                        <img src="{{ asset('imgs/default_image.png') }}">
                    </a>
                </div>
                <div class="col-4 p-0 block-gallery-item">
                    <a href="">
                        <img src="{{ asset('imgs/default_image.png') }}">
                    </a>
                </div>
                <div class="col-4 p-0 block-gallery-item bdr-none">
                    <a href="">
                        <img src="{{ asset('imgs/default_image.png') }}">
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-4 p-0 block-gallery-item">
                    <img src="{{ asset('imgs/default_image.png') }}">
                </div>
                <div class="col-4 p-0 block-gallery-item">
                    <img src="{{ asset('imgs/default_image.png') }}">
                </div>
                <div class="col-4 p-0 block-gallery-item bdr-none">
                    <img src="{{ asset('imgs/default_image.png') }}">
                </div>
            </div>
            <div class="row block-gallery-last">
                <div class="col-4 p-0 block-gallery-item">
                    <img src="{{ asset('imgs/default_image.png') }}">
                </div>
                <div class="col-4 p-0 block-gallery-item">
                    <img src="{{ asset('imgs/default_image.png') }}">
                </div>
                <div class="col-4 p-0 block-gallery-item bdr-none">
                    <img src="{{ asset('imgs/default_image.png') }}">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
