<?php

use App\Http\Controllers\CertificationController;
use App\Http\Controllers\EducationController;
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

Route::get('/', function () {
    return view('home');
})->name('home');

Auth::routes();


Route::get('/jobs',[JobsController::class, 'index'])->name('jobs'); 


Route::group(['middleware' => 'auth'], function(){

    Route::get('/profile',[UserProfileController::class,'profile'])->name('profile');
    Route::get('/post-job',[UserProfileController::class,'post_job'])->name('post-job');
    Route::get('/my-jobs',[UserProfileController::class,'my_jobs'])->name('my-jobs');
    Route::get('/applied-jobs',[UserProfileController::class,'applied_jobs'])->name('applied-jobs');
    Route::get('/saved-jobs',[UserProfileController::class,'saved_jobs'])->name('saved-jobs');


    Route::patch('/profile-avatar', [UserAvatarController::class, 'update'])->name('profile-avatar');


    Route::put('/update-profile',[UpdateProfileController::class, 'update'])->name('update-profile');

    Route::post('/add-education',[EducationController::class, 'store'])->name('add-education');

    Route::post('/add-certification',[CertificationController::class, 'store'])->name('add-certification');

});