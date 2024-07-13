<?php

namespace App\Http\Controllers;
use App\Models\AppliedJobs;
use App\Models\User;

use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function index(string $id){

        $jobid= $id;

        $candidates = AppliedJobs::select('user_id')->where('job_id' , $jobid)->get();
        // dd($candidates);

        return view('candidates.index', ['candidates' => $candidates]);
    }
}
