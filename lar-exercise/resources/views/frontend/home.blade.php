@extends('layout.layout_frontend')
@section('title', 'Home')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/home.css')}}">
@endsection
@section('content')
<div class="page-content">
    <div class="home-container" >
        <section class="banner">
            <div class="banner-info">
            <!-- kiem tra da dang nhap chua -->
            @if(Auth::check())
                <h1 class="banner-home-title">観光ロゲイニングへ ようこそ</h1>
                <h3>
                <!-- neu ton tai email thi in ra -->
                    @if(isset($user))
                        {{$user->email}}
                    @endif
                </h3>
                <h5><a href="{{ route('users.logout') }}">Logout</a></h5>
            @else
                <!-- chua dang nhap thi false -->
                <h1><a href="{{route('users.login')}}">Login false</a></h1>
            @endif
            </div>
        </section>
        <section class="way">
            <div class="way-left"></div>
            <div class="way-right">
                <p class="way-title">坂の町 Fight 夏サカ編</p>
                <p class="way-title-small">Director of Software and Engineering at WorkHard Inc.</p>
                <div class="way-link">
                    <a href="{{ route('users.register_member')}}">参加登録</a>
                </div>
            </div>
        </section>
        <section class="check-point">
            <div class="row">
                <div class="check-point-item col-4">
                    <a href="{{ route('users.check_points')}}">
                        <div class="check-point-detail">
                            <img src="{{ asset('imgs/icon_home_target.png') }}">
                            <p>チェックポイント</p>
                        </div>
                    </a>
                </div>
                <div class="check-point-item col-4">
                    <a href="">
                        <div class="check-point-detail">
                            <img src="{{ asset('imgs/icon_home_crown.png') }}">
                            <p>成績</p>
                        </div>
                    </a>
                </div>
                <div class="check-point-item col-4">
                    <div class="check-point-detail">
                        <img src="{{ asset('imgs/icon_home_cart.png') }}">
                        <p>ショップ</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="home-start">
            <div class="registration-details-link">
                <a href="">参加登録内容</a>
            </div>
            <div class="home-start-link">
                <a href="{{ route('users.shopping_points')}}">ロゲイニング<br><span>START</span></a>
            </div>
        </section>
    </div>
</div>
<footer>
    <div class="footer-contain">
        <div class="row mx-0">
            <div class="footer-item col-6 px-0">お問い合わせ ❘ 利用規約</div>
            <div class="footer-item col-3 px-0">登録情報変更</div>
            <div class="footer-item col-3 px-0 text-right">ログアウト</div>
        </div>
    </div>
</footer>
@endsection
