<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){

        return view('login');
    }

    public function store(LoginRequest $request){
        $request->validate([
            'email'=>['required'],
            'password'=>['required'],
        ]);


        $user = User::where('email',$request->email)
            ->where('password',$request->password)
            ->first();

        if($user!= ""){
            if($user->role == 'seeker'){
                session(['role'=>$user->role]);
                session(['email'=>$user->email]);
                return redirect()->route('seeker.index');
            }
            else{
                session(['role'=>$user->role]);
                session(['email'=>$user->email]);
                return redirect()->route('recruiter.index');
            }
        }
    }
}
