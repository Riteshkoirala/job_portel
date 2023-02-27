<?php

namespace App\Http\Controllers;

use App\Models\JobPosts;
use App\Models\JobType;
use App\Models\RecruiterProfile;
use App\Models\Skill;
use App\Models\User;
use Illuminate\Http\Request;

class JobPostsController extends Controller
{
    public function index(){

        $skills = Skill::get();
        $types = JobType::get();
        return view('recruiter.addJob',[
            'skills'=>$skills,
            'types'=>$types,
        ]);
    }
    public function store(Request $request){

        $userid = User::where('email',session('email'))->first();
        $recruiterid = RecruiterProfile::where('user_id',$userid->id)->first();

        $request->validate([
            'title'=>'required',
            'location'=>'required',
            'deadline'=>'required',
            'skill1'=>'required',
            'skill2'=>'required',
            'skill3'=>'required',
            'type'=>'required',
            'qualification'=>'required',
            'experience'=>'required',
            'vacancy'=>'required',
            'description'=>'required',
            'responsibility'=>'required',
            'benefit'=>'required'
        ]);

        $post = JobPosts::create([
            'recruiter_id'=>$recruiterid->id,
            'title'=>$request->title,
            'location'=>$request->location,
            'deadline'=>$request->deadline,
            'type_id'=>$request->type,
            'qualification'=>$request->qualification,
            'experience'=>$request->experience,
            'vacancy'=>$request->vacancy,
            'description'=>$request->description,
            'responsibility'=>$request->responsibility,
            'benefit'=>$request->benefit,
        ]);

            $post->postskill()->attach([$request->skill1, $request->skill2, $request->skill3]);



        return redirect()->route('dashboard.index');


    }

    public function edit($id){
        $skills = Skill::get();
        $types = JobType::get();

        $post = JobPosts::where('id',$id)->with('postSkill')->with('jobType')->first();
        return view('recruiter.updateJob',[
            'post'=>$post,
            'skills'=>$skills,
            'types'=>$types,
        ]);
    }

    public function update(Request $request, $id){

        $post = JobPosts::findOrFail($id);
        $post->update([
            'title'=>$request->title,
            'location'=>$request->location,
            'deadline'=>$request->deadline,
            'type_id'=>$request->type,
            'qualification'=>$request->qualification,
            'experience'=>$request->experience,
            'vacancy'=>$request->vacancy,
            'description'=>$request->description,
            'responsibility'=>$request->responsibility,
            'benefit'=>$request->benefit,
        ]);

        $post->postskill()->sync([$request->skill1, $request->skill2, $request->skill3]);

        return redirect()->route('job.show', $id);


    }
}
