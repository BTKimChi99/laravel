@extends('layout.layout_admin')
@section('title', 'Update')
@section('content')
<div class="content-wrapper">
    <div class="register" >
        <h3>Update user</h3>
        <form action="{{route('admin.update', $data->id)}}" method="POST">
            @csrf
            <table class="table-create">
                <tr>
                    <td class="td-title">Email:</td>
                    <td><input type="email" name="email" placeholder="Email" value="{{$data->email}}"></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" placeholder="Password" value="{{$data->password}}"></td>
                </tr>
                <tr>
                    <td>Birthday:</td>
                    <td><input type="date" name="birthday" placeholder="Birthday" value="{{$data->birthday}}"></td>
                </tr>
                <tr>
                    <td>Firstname:</td>
                    <td><input type="text" name="firstname" placeholder="Firstname" value="{{$data->firstname}}"></td>
                </tr>
                <tr>
                    <td>Lastname:</td>
                    <td><input type="text" name="lastname" placeholder="Lastname" value="{{$data->lastname}}"></td>
                </tr>
                <tr>
                    <td>Gender:</td>
                    <td>
                        <select class="form-control input-item" name="gender" value="{{$data->gender}}">
                            <option>男性</option>
                            <option>女性</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Zipcode:</td>
                    <td><input type="text" name="zipcode" placeholder="Zipcode" value="{{$data->zipcode}}"></td>
                </tr>
                <tr>
                    <td>Autozip:</td>
                    <td><input type="text" name="autozip" placeholder="Autozip" value="{{$data->autozip}}"></td>
                </tr>
                <tr>
                    <td>Address:</td>
                    <td><input type="text" name="address" placeholder="Address" value="{{$data->address}}"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" value="Update"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
@endsection