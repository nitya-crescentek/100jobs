<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class UserProfileController extends Controller
{
    public function profile()
    {
        $user=  Auth::user(); 
        // dd($user);
        return view('user/profile', ['user' => $user]);
    }

    public function post_job()
    {
        $user=  Auth::user(); 
        return view('user/post_job', ['user' => $user]);
    }

    public function my_jobs()
    {
        $user=  Auth::user(); 
        return view('user/my_jobs', ['user' => $user]);
    }

    public function applied_jobs()
    {
        $user=  Auth::user();  
        return view('user/applied_jobs', ['user' => $user]);
    }

    public function saved_jobs()
    {
        $user=  Auth::user(); 
        return view('user/saved_jobs', ['user' => $user]);
    }

}
