<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function profile()
    {
        // $user=  Auth::user()->name; 
        return view('user/profile');
    }

    public function post_job()
    {
        // $user=  Auth::user()->name; 
        return view('user/post_job');
    }

    public function my_jobs()
    {
        // $user=  Auth::user()->name; 
        return view('user/my_jobs');
    }

    public function applied_jobs()
    {
        // $user=  Auth::user()->name; 
        return view('user/applied_jobs');
    }

    public function saved_jobs()
    {
        // $user=  Auth::user()->name; 
        return view('user/saved_jobs');
    }

}
