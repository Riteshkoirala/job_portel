<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Psy\Util\Str;

class RegisterController extends Controller
{
    public function index(){

        return view('signup');
    }

    public function store(Request $request){
        $request->validate([
           'email' => ['required','string', 'email','max:100','unique:'.User::class],
           'password' => ['required'],
            'cpassword' => ['required'],
            'role' =>['required']
        ]);

        $user = User::create([
           'email' => $request->email,
           'password'=>$request->password,
           'role'=>$request->role,
        ]);
        return view('login');

    }
}
