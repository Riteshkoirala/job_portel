<?php

namespace App\Http\Controllers;

use App\Models\RecruiterProfile;
use App\Models\User;
use Illuminate\Http\Request;

class RecruiterProfileController extends Controller
{
    public function index(){
        $user = User::where('email',session('email'))->first();
        $profile = RecruiterProfile::where('user_id',$user->id)->first();
        return view('recruiter.profile',[
            'user'=> $user,
            'profile' =>$profile,
            ]);
    }

    public function edit($id){
        $profile = RecruiterProfile::where('id',$id)->with('user')->first();
        return view('recruiter.updateProfile',[
            'profile'=>$profile,
            ]);
    }
}
