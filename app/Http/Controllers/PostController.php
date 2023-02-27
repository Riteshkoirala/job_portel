<?php

namespace App\Http\Controllers;

use App\Models\JobPosts;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function index(){

        $posts = JobPosts::
        with('postSkill')
            ->with('jobType')->get();

        if(session('role')=='recruiter'){
        return view('recruiter.dashboard', [
            'posts' => $posts,
        ]);
        }
        else {
        return view('seeker.dashboard')->with('posts', $posts);
        }
    }
    public function show($id){
        $posts = JobPosts::find($id);
        $company= $posts->recruiterProfile->user;
        $type = $posts->jobType;
        $skill = $posts->postSkill;

        if(session('role')=='recruiter'){
            return view('recruiter.postView', [
                'posts' => $posts,
                'company' => $company,
                'type'=> $type,
                'skill'=>$skill,
            ]);
        }
      }

}
