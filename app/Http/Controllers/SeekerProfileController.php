<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SeekerProfileController extends Controller
{
    public function index(){
        return view('seeker.profile');
    }
}
