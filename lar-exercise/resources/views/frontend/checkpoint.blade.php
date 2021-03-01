@extends('layout.layout_frontend')
@section('title', 'Checkpoint')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/checkpoint.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/common.css')}}">
@endsection
@section('content')
@include('frontend\common')
    <div class="main_content">
        <div class="main_content-button row ml-0 mr-0">
            <div class="col-4 button_top blue">
                <a href="" class="button_a">
                    <h1 class="button-text">チェックポイント</h1>
                </a>
            </div>
            <div class="col-4 button_top yellow">
               <a href="" class="button_a">
                <h1 class="button-text">買い物ポイント</h1>
            </a>
            <h1 class="button-text">買い物ポイント</h1>
        </div>
        <div class="col-4 button_top orange">
            <a href="" class="button_a">
                <h1 class="button-text">体験ポイント</h1>
            </a>
        </div>
    </div>
    <div class="main_content-point-picture">
        <div class="main_content-point row ml-0 mr-0">
            <div class="col-6 point_left pl-0">
                <div class="point-text">
                    <h1>暫定<br>得点</h1>
                </div>
                <div class="point-number"></div>
            </div>
            <div class="col-6 point_right pr-0">
                <div class="point-text">
                    <h1>暫定<br>得点</h1>
                </div>
                <div class="point-number">
                    <h1>180:00</h1>
                </div>
            </div>
        </div>
        <div class="main_content-picture-large">
            <div class="main_content-picture-black black-large"></div>
            <div class="main_content-picture-add add-large">
                <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
            </div>
        </div>
        <div class="main_content-picture-small">
            <h1>スタート</h1>
            <div class="picture-small-detail">
                <div class="picture-small1">
                    <div class="main_content-picture-banner"></div>
                    <div class="main_content-picture-black black-small"></div>
                    <div class="main_content-picture-add add-small">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                    <div class="picture-small1_text">
                        <div class="picture-small1_text-left">
                            <h1 class="mb-0">11 <br> <small>Pt</small></h1>
                        </div>
                        <div class="picture-small1_text-right">
                            <h1 class="mb-0">城山公園<br>遊具</h1>
                        </div>
                    </div>
                </div>
                <div class="picture-small1 col2">
                    <div class="main_content-picture-banner"></div>
                    <div class="main_content-picture-black black-small"></div>
                    <div class="main_content-picture-add add-small">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                    <div class="picture-small1_text">
                        <div class="picture-small1_text-left">
                            <h1 class="mb-0">20<br> <small>Pt</small></h1>
                        </div>
                        <div class="picture-small1_text-right">
                            <h1 class="mb-0">左岸から<br>JR高山本線</h1>
                        </div>
                    </div>
                </div>
                <div class="picture-small1">
                    <div class="main_content-picture-banner"></div>
                    <div class="main_content-picture-black black-small"></div>
                    <div class="main_content-picture-add add-small">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                    <div class="picture-small1_text">
                        <div class="picture-small1_text-left">
                            <h1 class="mb-0">29<br> <small>Pt</small></h1>
                        </div>
                        <div class="picture-small1_text-right">
                            <h1 class="mb-0">白河院<br>句碑</h1>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="main_content-picture-small">
            <div class="picture-small-detail">
                <div class="picture-small1">
                    <div class="main_content-picture-banner"></div>
                    <div class="main_content-picture-black black-small"></div>
                    <div class="main_content-picture-add add-small">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                    <div class="picture-small1_text">
                        <div class="picture-small1_text-left">
                            <h1 class="mb-0">11 <br> <small>Pt</small></h1>
                        </div>
                        <div class="picture-small1_text-right">
                            <h1 class="mb-0">城山公園<br>遊具</h1>
                        </div>
                    </div>
                </div>
                <div class="picture-small1 col2">
                    <div class="main_content-picture-banner"></div>
                    <div class="main_content-picture-black black-small"></div>
                    <div class="main_content-picture-add add-small">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                    <div class="picture-small1_text">
                        <div class="picture-small1_text-left">
                            <h1 class="mb-0">20<br> <small>Pt</small></h1>
                        </div>
                        <div class="picture-small1_text-right">
                            <h1 class="mb-0">左岸から<br>JR高山本線</h1>
                        </div>
                    </div>
                </div>
                <div class="picture-small1">
                    <div class="main_content-picture-banner"></div>
                    <div class="main_content-picture-black black-small"></div>
                    <div class="main_content-picture-add add-small">
                        <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                    </div>
                    <div class="picture-small1_text">
                        <div class="picture-small1_text-left">
                            <h1 class="mb-0">29<br> <small>Pt</small></h1>
                        </div>
                        <div class="picture-small1_text-right">
                            <h1 class="mb-0">白河院<br>句碑</h1>
                        </div>
                    </div>
                </div>
            </div>	
        </div>
        <div class="main_content-picture-footer">
            <h1>フィニッシュ</h1>
            <div class="main_content-picture-large picture-footer">
                <div class="main_content-picture-black black-large"></div>
                <div class="main_content-picture-add add-large">
                    <img src="{{ asset('imgs/icon_plus.png') }}" alt="">
                </div>
            </div>
        </div>
        <div class="main_content-button-footer">
            <div class="button-footer_text">

                <h1>フィニッシュ</h1>
            </div>
            <div class="button-footer-icon">

                <i class="fa fa-angle-right"></i>
            </div>
        </div>
    </div>
@endsection
