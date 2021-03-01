@extends('layout.layout_admin')
@section('title', 'List')
@section('content')
    <div class="list" >
        <h3>List all user</h3>
        <div class="search-page">
        <form action="" method="post">
            <div class="row">
                <div class="input-group">
                    <div class="form-outline search search_text">
                        <input type="search" id="form1" name="valEmail" class="form-control" placeholder="Search user" />
                    </div>
                    <div class="btn_search">
                        <button type="submit" name="search" class="btn btn-primary">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div> 
            </div>
        </form>
        <form action="{{route('admin.detail', $data->id)}}" method="GET">
            <table class="list" border='1'>
                <tr class="style_tr">
                    <td>Id</td>
                    <td>Email</td>
                    <td>Birthday</td>
                    <td>Firstname</td>
                    <td>Lastname</td>
                    <td>Gender</td>
                    <td>Zipcode</td>
                    <td>Autozip</td>
                    <td>Address</td>
                    <td colspan="2">Actions</td>
                </tr>
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->email}}</td>
                    <td>{{$data->birthday}}</td>
                    <td>{{$data->firstname}}</td>
                    <td>{{$data->lastname}}</td>
                    <td>{{$data->gender}}</td>
                    <td>{{$data->zipcode}}</td>
                    <td>{{$data->autozip}}</td>
                    <td>{{$data->address}}</td>
                    <td><a href="{{route('admin.edit', $data->id)}}">Edit</a></td>
                    <td><a href="{{route('admin.destroy', $data->id)}}">Delete</a></td>
                </tr>
            </table>
        </form>
    </div>
@endsection