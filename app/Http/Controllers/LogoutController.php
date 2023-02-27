<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(){
        session()->forget('role');
        return redirect()->route('login.index');
    }
}
