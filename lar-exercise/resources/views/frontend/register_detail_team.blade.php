@extends('layout.layout_frontend')
@section('title', 'Register_detail_item')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/register_detail.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/common.css')}}">
@endsection
@section('content')
@include('frontend\common')
<div class="page_content">
    <div class="page_content-banner">
        <div class="banner-text">
            <h1 class="banner-text_title">坂の町 Fight 夏サカ編</h1>
        </div>
    </div>
    <div class="page_content_info_header">
        <div class="row">
            <div class="col-6 info_header-left">
                <h1 class="info_header_left-text">集合場所 <br>八尾曳山展示館 <br>(富山市八尾）</h1>
            </div>
            <div class="col-6 info_header-right">
                <p class="header_right-title mb-0">ルール</p>
                <p class="header_right-text">
                    <span><img src="{{ asset('imgs/icon_target.png') }}" alt=""></span>
                    スポーツ／観光 <br>
                    <span><img src="{{ asset('imgs/icon_clock.png') }}" alt=""></span>
                    3時間／5時間 <br>
                    <span><img src="{{ asset('imgs/icon_user.png') }}" alt=""></span>
                    一般／ファミリー
                </p>
            </div>
        </div>
    </div>
</div>
<div class="page_main-content">
	<div class="page_main-content">
		<div class="page_content-main_button">
			<div class="button-left">
				<a href="{{ route('users.register_detail_event')}}" class="button_a"><h1 class="button_text">概要</h1></a>
			</div>
			<div class="button-right">
				<a href="{{ route('users.register_detail_team')}}" class="button_a"><h1 class="button_text">チーム</h1></a>
			</div>
		</div>
		<div class="page_content-main_text">
			<div class="title-text">
				<h1>グループ名　越中八尾観光協会</h1>
				<hr>
			</div>
			<div class="text-title-top">
				<h1>代表者：XXXXX</h1>
			</div>
			<div class="text-description">
				<h1>チームメンバー</h1>
				<p class="text_info mt-0">
					XXXXXX <br>
					XXXXX <br>
					XXXXXX 
				</p>
			</div>
		</div>
	</div>
</div>
@endsection
