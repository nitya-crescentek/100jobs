<?php

use App\Http\Controllers\ApplyJobsController;
use App\Http\Controllers\CertificationController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\UpdateProfileController;
use App\Http\Controllers\UserAvatarController;
use App\Http\Controllers\UserProfileController;
use App\Models\User;
use App\Models\Job;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();


Route::get('/all-jobs',[JobsController::class, 'index'])->name('jobs');
Route::get('/job/{id}',[JobsController::class, 'show'])->name('single-job'); 


Route::group(['middleware' => 'auth'], function(){

    //Show profile pages
    Route::get('/profile',[UserProfileController::class,'profile'])->name('profile');
    Route::get('/post-job',[UserProfileController::class,'post_job'])->name('post-job');
    Route::get('/my-jobs',[UserProfileController::class,'my_jobs'])->name('my-jobs');
    Route::get('/applied-jobs',[UserProfileController::class,'applied_jobs'])->name('applied-jobs');
    Route::get('/saved-jobs',[UserProfileController::class,'saved_jobs'])->name('saved-jobs');


    //For profile
    Route::patch('/profile-avatar', [UserAvatarController::class, 'update'])->name('profile-avatar');
    Route::put('/update-profile',[UpdateProfileController::class, 'update'])->name('update-profile');
    Route::get('/edit-profile', [UpdateProfileController::class, 'edit'])->name('edit-profile');


    //For educations
    Route::get('/add-education', [EducationController::class, 'create'])->name('create-education');
    Route::post('/add-education',[EducationController::class, 'create'])->name('add-education');


    //For certifications
    Route::post('/add-certification',[CertificationController::class, 'store'])->name('add-certification');
    Route::get('/add-certification',[CertificationController::class, 'create'])->name('create-certification');


    //For experiences
    Route::post('/add-experience',[ExperienceController::class, 'store'])->name('add-experience');
    Route::get('/add-experience',[ExperienceController::class, 'create'])->name('create-experience');


    //For jobs
    Route::post('/create-job',[JobsController::class,'store'])->name('create-job');
    Route::post('/submit-application',[ApplyJobsController::class,'apply'])->name('submit-job-application');

});