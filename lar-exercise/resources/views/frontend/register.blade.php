@extends('layout.layout_frontend')
@section('title', 'Register')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/register.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/common.css')}}">
@endsection
@section('content')

@include('frontend\common')

    <div class="page_content_text">
        <div class="page_content_text-detail">
            <div class="page_content_text_title">
                <h1>How to find the best photography spots in Brooklyn.</h1>
            </div>
            <div class="page_content_text_description">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat.</p>
            </div>
        </div>
    </div>
    <div class="page_content_main">
        <div class="page_content_main_regiter">
            <form action="">
                <div class="register_block">
                    <label>ロゲイニング種別</label>	<br>
                    <select class="form-control" name="text">
                        <option value="">観光</option>
                        <option value="">観光1</option>
                        <option value="">観光2</option>
                    </select>
                </div>
                <div class="register_block">
                    <label>競技部門選択</label>	<br>
                    <select class="form-control" name="text">
                        <option >Select</option>
                        <option value="">Option1</option>
                        <option value="">Option2</option>
                        <option value="">Option3</option>
                    </select>
                </div>
                <div class="register_block">
                    <label>カテゴリー</label>	<br>
                    <select class="form-control" name="text">
                        <option >Select</option>
                        <option value="">Option1</option>
                        <option value="">Option2</option>
                        <option value="">Option3</option>
                    </select>
                </div>
                <div class="register_block">
                    <label>カテゴリー</label>	<br>
                    <div class="register_block_content_right">
                        <div class="content_right-detail">
                            <label>おとな</label>
                            <select class="form-control" name="text">
                                <option >Select</option>
                                <option value="">Option1</option>
                                <option value="">Option2</option>
                                <option value="">Option3</option>
                            </select>

                            <label>人</label>
                        </div>
                        
                        <br>
                        <div class="register_block_content_right">
                            <div class="content_right-detail">
                                <label>こども</label>
                                <select class="form-control" name="text">
                                    <option >Select</option>
                                    <option value="">Option1</option>
                                    <option value="">Option2</option>
                                    <option value="">Option3</option>
                                </select>

                                <label>人</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="register_block">
                    <label>チーム名</label>	<br>
                    <input type="text" class="form-control" value="John Doe">
                </div>
                <div class="register_block">
                    <label>代表者</label>	<br>
                    <input type="text" value="自動入力" class="form-control">
                </div>
                <div class="register_block">
                    <label>代表者連絡先(電話番号)</label>	<br>
                    <input type="text" class="form-control" value="">
                </div>
                <div class="register_block">
                    <label>チームメンバー2</label>	<br>
                    <input type="text" value="John Doe" class="form-control">
                </div>
                <div class="register_block">
                    
                    <label>性別</label>	<br>
                    <div class="register_block_content_right">
                        <div class="content_right-center">
                            <input type="radio" id="male" name="gender" value="">
                            <label for="male">男性</label><br>
                            <input type="radio" id="female" name="gender" value="">
                            <label for="female">女性</label><br>
                            <input type="radio" id="other" name="gender" value="">
                            <label for="other">未回答</label>
                        </div>
                    </div>
                </div>
                <div class="register_block">
                    <label>生年月日</label>	<br>
                    <div class="content_right-center date ml-0">
                        <select class="form-control ml-4" name="text">
                            <option value="">Year</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                        </select>
                        <select class="form-control ml-4" name="text">
                            <option value="">Month</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                        <select class="form-control ml-4" name="text">
                            <option value="">Day</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>
                <div class="register_block">
                    <label>チームメンバー3</label>	<br>
                    <input type="text" value="John Doe" class="form-control">
                </div>
                <div class="register_block">
                    
                    <label>性別</label>	<br>
                    <div class="register_block_content_right">
                        <div class="content_right-center">
                            <input type="radio" id="male" name="gender" value="">
                            <label for="male">男性</label><br>
                            <input type="radio" id="female" name="gender" value="">
                            <label for="female">女性</label><br>
                            <input type="radio" id="other" name="gender" value="">
                            <label for="other">未回答</label>
                        </div>
                    </div>
                </div>
                <div class="register_block">
                    <label>生年月日</label>	<br>
                    <div class="content_right-center date ml-0">
                        <select class="form-control ml-4" name="text">
                            <option value="">Year</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                        </select>
                        <select class="form-control ml-4" name="text">
                            <option value="">Month</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                        <select class="form-control ml-4" name="text">
                            <option value="">Day</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>
                <div class="register_block">
                    <label>チームメンバー4</label>	<br>
                    <input type="text" value="John Doe" class="form-control">
                </div>
                <div class="register_block">
                    
                    <label>性別</label>	<br>
                    <div class="register_block_content_right">
                        <div class="content_right-center">
                            <input type="radio" id="male" name="gender" value="">
                            <label for="male">男性</label><br>
                            <input type="radio" id="female" name="gender" value="">
                            <label for="female">女性</label><br>
                            <input type="radio" id="other" name="gender" value="">
                            <label for="other">未回答</label>
                        </div>
                    </div>
                </div>
                <div class="register_block">
                    <label>生年月日</label>	<br>
                    <div class="content_right-center date ml-0">
                        <select class="form-control ml-4" name="text">
                            <option value="">Year</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                        </select>
                        <select class="form-control ml-4" name="text">
                            <option value="">Month</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                        <select class="form-control ml-4" name="text">
                            <option value="">Day</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>
                <div class="register_block">
                    <label>チームメンバー5</label>	<br>
                    <input type="text" value="John Doe" class="form-control">
                </div>
                <div class="register_block">
                    
                    <label>性別</label>	<br>
                    <div class="register_block_content_right">
                        <div class="content_right-center">
                            <input type="radio" id="male" name="gender" value="">
                            <label for="male">男性</label><br>
                            <input type="radio" id="female" name="gender" value="">
                            <label for="female">女性</label><br>
                            <input type="radio" id="other" name="gender" value="">
                            <label for="other">未回答</label>
                        </div>
                    </div>
                </div>
                <div class="register_block">
                    <label>生年月日</label>	<br>
                    <div class="content_right-center date ml-0">
                        <select class="form-control ml-4" name="text">
                            <option value="">Year</option>
                            <option value="">2020</option>
                            <option value="">2021</option>
                        </select>
                        <select class="form-control ml-4" name="text">
                            <option value="">Month</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                        <select class="form-control ml-4" name="text">
                            <option value="">Day</option>
                            <option value="">1</option>
                            <option value="">2</option>
                        </select>
                    </div>
                </div>
                <div class="button_submit button_a">
                    <a href="{{ route('users.register_detail_event')}}"><h3>登録</h3></a>
                </div>
            </div>
        </form>
    </div>
@endsection
