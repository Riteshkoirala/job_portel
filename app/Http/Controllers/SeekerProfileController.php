<?php

namespace App\Http\Controllers;

use App\Models\RecruiterProfile;
use App\Models\User;
use Illuminate\Http\Request;

class RecruiterProfileController extends Controller
{
    public function index()
    {
        $user = User::where('email', session('email'))->first();
        $profile = RecruiterProfile::where('user_id', $user->id)->first();

        if ($profile == null) {
            return view('seeker.profileComplete');
        } else {
            return view('seeker.profile', [
                'user' => $user,
                'profile' => $profile,
            ]);
        }
    }

    public function store(Request $request)
    {
        $user = User::where('email', session('email'))->first();
        $request->validate([
            'company_name' => 'required',
            'location' => 'required',
            'contact_number' => 'required',
            'image' => 'required',
            'detail' => 'required',
        ]);
        $imageName= '';
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/recruiter'), $filename);
            $imageName= $filename;
        }
        $recruiter = RecruiterProfile::create([
            'user_id' => $user->id,
            'company_name' => $request->company_name,
            'location' => $request->location,
            'contact_number' => $request->contact_number,
            'image' => $imageName,
            'detail' => $request->detail,
        ]);

        return view('recruiter.profile');
    }



    public function edit($id){
        $profile = RecruiterProfile::where('id',$id)->with('user')->first();
        return view('recruiter.updateProfile',[
            'profile'=>$profile,
        ]);
    }

    public function update(Request $request, $id){
        $imageName= '';
        $recruiter = RecruiterProfile::where('id',$id)->first();
        $imageName = $recruiter->image;
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $file->getClientOriginalName();
            $file->move(public_path('images/recruiter'), $filename);
            $imageName= $filename;
        }
        $profile = RecruiterProfile::findOrFail($id);
        $profile->update([
            'company_name' => $request->company_name,
            'location' => $request->location,
            'contact_number' => $request->contact_number,
            'image' => $imageName,
            'detail' => $request->detail,
        ]);

        return redirect()->route('rprofile.index');
    }
}
