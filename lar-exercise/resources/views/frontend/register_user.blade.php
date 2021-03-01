@extends('layout.layout_frontend')
@section('title', 'Register_user')
@section('css')
<link rel="stylesheet" href="{{ asset('css/pages/register_user.css')}}">
<link rel="stylesheet" href="{{ asset('css/pages/common.css')}}">
@endsection
@section('content')
    <div class="container-fluid wrapper-main">
        <ul class="nav nav-custom">
            <li class="nav-item nav-item-custom">
                <a href="{{ route('users.register')}}" class="nav-link">新規ユーザー登録</a>
                <div class="active-item"></div>
            </li>
            <li class="nav-item nav-item-custom">
                <a href="{{ route('users.login')}}" class="nav-link">ログイン</a>
            </li>
        </ul>
        <div class="tab-content">
            <div class="form-content ">
                <form action="{{ route('users.store') }}" method="post">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group form-group-custom">
                        <!-- ham old la nhan gia tri nguoi dung nhap -->
                        <input type="text" value="{{old('email')}}" name="email" class="form-control input-item @error('email') is-invalid @enderror" placeholder="Email"/>
                        @error('email')
                          <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group form-group-custom">
                        <input type="password" value="{{old('password')}}" name="password" class="form-control input-item @error('password') is-invalid @enderror" placeholder="Password"/>
                        @error('password')
                          <span><strong>{{ $message }}</strong></span>
                        @enderror 
                    </div>
                    <div class="form-group form-group-custom">
                        <input type="text" value="{{old('firstname')}}" name="firstname" class="form-control input-item @error('firstname') is-invalid @enderror" placeholder="姓"/>
                        @error('firstname')
                          <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group form-group-custom">
                        <input type="text" value="{{old('lastname')}}" name="lastname" class="form-control input-item @error('lastname') is-invalid @enderror" placeholder="名前"/>
                        @error('lastname')
                          <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group form-group-custom">
                        <select class="form-control input-item" name="gender">
                            <option>男性</option>
                            <option>女性</option>
                        </select>
                    </div>
                    <div class="form-group form-group-custom date-group-items">
                        <label class="form-group-custom-label-item">生年月日</label>
                        <div class="row row-custom form-group-custom-inline" name="birthday">
                            <div class="col-xs-4 date-item">
                                <div class="form-group form-group-custom custom-date">
                                    <select class="form-control input-item" name="year">
                                        <option>Year</option>
                                        @for ($year = 1990; $year <= 2000; $year++)                  
                                            <option name="year" value = "{{ $year }}">{{ $year }}</option>                  
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4 date-item">
                                <div class="form-group form-group-custom custom-date">
                                    <select class="form-control input-item" name="month">
                                        <option>Month</option>
                                        @for ($month = 1; $month <= 12; $month++)                  
                                            <option name="month" value = "{{ $month }}">{{ $month }}</option>                  
                                        @endfor
                                    </select>
                                </div>
                            </div>
                            <div class="col-xs-4 date-item">
                                <div class="form-group form-group-custom custom-date">
                                    <select class="form-control input-item" name="day">
                                        <option>Day</option>
                                        @for ($day = 1; $day <= 31; $day++)                  
                                            <option name="day" value = "{{ $day }}">{{ $day }}</option>                  
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group form-group-custom ">
                        <label class="form-group-custom-label-item">郵便番号</label>
                        <input type="text" name="zipcode" value="{{old('zipcode')}}" class="form-control input-item input-item-style @error('zipcode') is-invalid @enderror" placeholder=""/>
                        @error('zipcode')
                          <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group form-group-custom">
                        <input type="text" name="autozip" value="{{old('autozip')}}" class="form-control input-item @error('autozip') is-invalid @enderror" placeholder="郵便番号から自動入力"/>
                        @error('autozip')
                          <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="form-group form-group-custom">
                        <label class="form-group-custom-label-item">その他住所</label>
                        <input type="text" name="address" value="{{old('address')}}" class="form-control input-item @error('address') is-invalid @enderror" placeholder=""/>
                        @error('address')
                          <span><strong>{{ $message }}</strong></span>
                        @enderror
                    </div>
                    <div class="user-register-block">
                        <button type="submit" class="btn common-btn btn-blue user-register-submit">続ける</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
