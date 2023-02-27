<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\JobPostsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RecruiterProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SeekerProfileController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserSearchController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/login', LoginController::class);
Route::resource('/signup', RegisterController::class);

Route::resource('/recruiter', RecruiterProfileController::class);
Route::resource('/applicant', ApplicationController::class);
Route::resource('/rprofile', RecruiterProfileController::class);
Route::resource('/addjob', JobPostsController::class);
Route::resource('/dashboard', PostController::class);
Route::post('/updatejob/{id}', [JobPostsController::class,'update'])->name('updatejob.update');

Route::get('/job/{id}', [PostController::class,'show'])->name('job.show');

Route::resource('/user', UserSearchController::class);


Route::resource('/seeker', SeekerProfileController::class);
Route::resource('/applied', ApplicationController::class);
Route::resource('/sprofile', SeekerProfileController::class);


Route::resource('/skill', SkillController::class);
Route::resource('/logout', LogoutController::class);


