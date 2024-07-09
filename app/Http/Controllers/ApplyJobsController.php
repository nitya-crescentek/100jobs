<?php

namespace App\Http\Controllers;
use App\Models\AppliedJobs;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ApplyJobsController extends Controller
{
    public function index(){
        $user = Auth::user();

        $user->applied_jobs;
        dd($user);
    }

    public function apply(Request $request)
    {
        $job_id = $request['job_id'];
        $user_id = Auth::user()->id;
        // dd($user_id);
        if($request['qualified']=='yes'){
            $applied_to = AppliedJobs::create([
                'user_id' => $user_id,
                'job_id' => $job_id
            ]);
        }else{
            return back()->with('Apply to another jobs');
        }

        return back();
    }
}
