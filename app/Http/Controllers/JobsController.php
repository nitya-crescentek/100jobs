<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Job; 

use Illuminate\Http\Request;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $jobs=Job::where('id', '=', 2)->get();
        $jobs=Job::all();
        

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data=$request->all();

        $job = Job::create([
            'role' => $data['role'],
            'company' => $data['company'],
            'company_website' => $data['company_website'],
            'location' => $data['location'],
            'job_type' => $data['job_type'],
            'category' => $data['category'],
            'description' => $data['description'],
            'salary' => $data['salary'],
            'skills' => $data['skills'],
            'qualification' => $data['qualification'],
            'user_id' => $data['user_id'],
        ]);

        return redirect(route('profile'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
