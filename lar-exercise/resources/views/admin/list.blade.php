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
        <form action="{{route('admin.list')}}" method="GET">
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
                @foreach($data as $datas)
                    <tr>
                        <td>{{$datas->id}}</td>
                        <td>{{$datas->email}}</td>
                        <td>{{$datas->birthday}}</td>
                        <td>{{$datas->firstname}}</td>
                        <td>{{$datas->lastname}}</td>
                        <td>{{$datas->gender}}</td>
                        <td>{{$datas->zipcode}}</td>
                        <td>{{$datas->autozip}}</td>
                        <td>{{$datas->address}}</td>
                        <td><a href="{{route('admin.edit', $datas->id)}}">Edit</a></td>
                        <td><a href="{{route('admin.destroy', $datas->id)}}">Delete</a></td>
                        <td><a href="{{route('admin.detail', $datas->id)}}">Detail</a></td>
                    </tr>
                @endforeach
            </table>
        </form>
    </div>
@endsection