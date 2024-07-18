<?php

namespace App\Http\Controllers;
use App\Models\Job;
use App\Models\User;

use App\Models\AppliedJobs;
use Illuminate\Http\Request;

class CandidatesController extends Controller
{
    public function index(string $id){

        $jobid= $id;

        $candidates = Job::with("appliedusers")->where('id' , $jobid)->first();

        return view('candidates.index', ['candidates' => $candidates->appliedusers]);
    }
}
