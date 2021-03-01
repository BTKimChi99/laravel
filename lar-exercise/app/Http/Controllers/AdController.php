<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\User;  

class AdController extends Controller
{
    //
    public function detail($id)
    {
        $data = User::findOrFail($id);
        return view('admin.detail', compact('data'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function list()
    {
        $data = DB::table('users')->get();
        return view('admin.list', compact('data'));
    }

    public function destroy($id)
    {
        $data = User::findOrFail($id);
        $data->delete();
        if($data){
            return redirect()->route('admin.list');
        }else{
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $data = User::findOrFail($id);
        return view('admin.update', compact('data'));
    }

    public function update(Request $request, $id)
    {
        $data = User::find($id);
        $data->email = $request->input('email');
        $data->firstname = $request->input('firstname');
        $data->lastname = $request->input('lastname');
        $data->gender = $request->input('gender');
        $data->birthday = $request->input('birthday');      
        $data->zipcode = $request->input('zipcode');
        $data->autozip = $request->input('autozip');
        $data->address = $request->input('address');
        $data->password = bcrypt($request->input('password'));
        $data->permission == '1';
        $data->save();
        if($data)
        {
            return redirect()->route('admin.list');
        }else{
            return redirect()->back();
        }
    }

    public function search($data)
    {

    }

    public function store(Request $request)
    {   
        $this->validate($request,[
            'email'=>'required|email|max:255',
            'password'=>'required|min:8|max:255',
            'firstname'=>'required|max:255',
            'lastname'=>'required|max:255',
            'zipcode'=>'required|numeric',
            'autozip'=>'required',
            'address'=>'required'
        ]);
        $admin = new User();
        $data = request()->all();
        $admin->permission = $request->permission;
        $admin->email = $request->input('email');
        $admin->firstname = $request->input('firstname');
        $admin->lastname = $request->input('lastname');
        $admin->gender = $request->input('gender');
        $admin->birthday = $request->input('birthday');      
        $admin->zipcode = $request->input('zipcode');
        $admin->autozip = $request->input('autozip');
        $admin->address = $request->input('address');
        $admin->password = bcrypt($request->input('password'));
        $admin->save();
        if($admin) {
            return redirect()->route('admin.list');
        }
        return redirect()->back();
    }
}
