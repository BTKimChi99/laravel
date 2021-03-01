<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;  
use Illuminate\Support\Facades\Auth;
use App\Config\Session;
class UserController extends Controller
{    
    public function create()
    {
        return view('frontend.register_user');
    }

    public function top()
    {
        return view('frontend.top');
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
        ] );
        $user = new User();
        $data = request()->all();
        $user->email = $request->input('email');
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->gender = $request->input('gender');
        $user->birthday = $request['birthday'] = $request['year'].'-'.$request['month'].'-'.$request['day'];      
        $user->zipcode = $request->input('zipcode');
        $user->autozip = $request->input('autozip');
        $user->address = $request->input('address');
        $user->password = bcrypt($request->input('password'));
        $user->save();
        if($user) {
            return redirect()->route('users.login');
        }
        return redirect()->back();
    }

    public function login(Request $request)
    {
        // $data = $request->only($this->email(), 'password', 'permission');
        // if(Auth::guard('users')->attempt($data)){
        //     return redirect()->route('users.home');
        // }else{
        //     return redirect()->back();
        // }
        $email = $request['email'];
        $password = $request['password'];
        $permission = $request['permission'];
        if(Auth::attempt(['email'=>$email, 'password'=>$password, 'permission'=>'1']))
        {
            return view('admin.create', ['user'=>Auth::user()]);
        }elseif(Auth::attempt(['email'=>$email, 'password'=>$password, 'permission'=>' '])){
            return view('frontend.home', ['user'=>Auth::user()]);
        }else{
            return view('frontend.login');
        }
    }

    public function logout()
    {
        Auth::logout();
        return view('frontend.login');
    }

    public function home()
    {
        return view('frontend.home');
    }
    
    public function register()
    {
        return view('frontend.register');
    }

    public function register_detail_event()
    {
        return view('frontend.register_detail_event');
    }

    public function register_detail_team()
    {
        return view('frontend.register_detail_team');
    }

    public function check_points()
    {
        return view('frontend.checkpoint');
    }

    public function shopping_points()
    {
        return view('frontend.shopping_point');
    }

    public function experience_points()
    {
        return view('frontend.experience_point');
    }

    public function result()
    {
        return view('frontend.result');
    }

}
