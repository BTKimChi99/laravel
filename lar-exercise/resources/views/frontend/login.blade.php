@extends('layout.layout_frontend')
@section('title','Login')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/login.css')}}">
@endsection
@section('content')
    <div class="container-fluid wrapper-main">
        <ul class="nav nav-custom" >
            <li class="nav-item nav-item-custom">
                <a href="{{ route('users.register')}}" class="nav-link">新規ユーザー登録</a>
            </li>
            <li class="nav-item nav-item-custom">
                <a href="{{ route('users.login')}}" class="nav-link">ログイン</a>
                <div class="active-item"></div>
            </li>
        </ul>
        <div class="tab-content login-block">
            <div class="form-content">
                <form action="{{ route('users.login') }}" class="login-form validate" method="GET">
                    <div class="form-group form-group-custom">
                        <input type="text" class="form-control input-item" name="email" placeholder="Email"/>
                    </div>
                    <div class="form-group form-group-custom">
                        <input type="password" class="form-control input-item" name="password" placeholder="Password"/>
                    </div>
                    <div class="login-btn-block">
                        <p class="text-small">パスワードをお忘れの方はこちら</p>
                        <button type="submit" name="login" class="btn common-btn purple-btn login-submit-btn"><a href="{{ route('users.home')}}">続ける</a></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
