@extends('layout.layout_frontend')
@section('title','Top')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/top.css')}}">
@endsection
@section('content')
    <div class="wrapper-content-top">
        <div class="block-background-image block-background-child">
        </div>
        <div class="block-main">
            <div class="block-text">
                <p class="text-big">Welcome to</p>
                <p class="text-small">観光ロゲイニング</p>
            </div>
            <div class="block-btn">
                <p><a href="{{ route('users.register')}}" class="btn common-btn btn-blue user-register-btn">新規ユーザー登録</a></p>
                <p><a href="{{ route('users.login')}}" class="btn common-btn btn-gray login-btn">ログイン</a></p>
            </div>
        </div>
    </div> 
@endsection
