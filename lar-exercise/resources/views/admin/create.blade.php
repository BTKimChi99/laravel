@extends('layout.layout_admin')
@section('title', 'Create')
@section('content')
<div class="content-wrapper">
    <div class="register" >
        <h3>Create new user</h3>
        <form action="{{ route('admin.store') }}" method="POST" >
            <input type="hidden" name="_token" value="{{ csrf_token() }}">            
            <table class="table-create">
                <tr>
                    <td class="td-title">Email:</td>
                    <td><input type="text" name="email" placeholder="Email" value="{{old('email')}}" class="@error('email') is-invalid @enderror"></td>
                    @error('email')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Password" value="{{old('password')}}" class="@error('password') is-invalid @enderror"></td>
                    @error('password')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                </tr>
                <tr>
                    <td>Birthday:</td>
                    <td><input type="date" name="birthday" placeholder="Birthday"></td>
                </tr>
                <tr>
                    <td>Firstname:</td>
                    <td><input type="text" name="firstname" placeholder="Firstname" value="{{old('firstname')}}" class="@error('firstname') is-invalid @enderror"></td>
                    @error('firstname')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                </tr>
                <tr>
                    <td>Lastname:</td>
                    <td><input type="text" name="lastname" placeholder="Lastname" value="{{old('lastname')}}" class="@error('lastname') is-invalid @enderror"></td>
                    @error('lastname')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <select class="form-control input-item" name="gender">
                            <option>男性</option>
                            <option>女性</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Zipcode:</td>
                    <td><input type="text" name="zipcode" placeholder="Zipcode" value="{{old('zipcode')}}" class="@error('zipcode') is-invalid @enderror"></td>
                    @error('zipcode')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                </tr>
                <tr>
                    <td>Autozip:</td>
                    <td><input type="text" name="autozip" placeholder="Autozip" value="{{old('zipcode')}}" class="@error('zipcode') is-invalid @enderror"></td>
                    @error('autozip')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" placeholder="Address" value="{{old('address')}}" class="@error('address') is-invalid @enderror"/></td>
                    @error('address')
                        <span><strong>{{ $message }}</strong></span>
                    @enderror
                </tr>
                <tr>
                    <td><input type="hidden" name="permission" value="1"/></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="register" value="Create"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection