<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\Educations;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = Auth::user();
        $user->educations;
        return view('education.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $education = Educations::create([
                'college' => $data['college'],
                'degree' => $data['degree'],
                'grades' => $data['grades'],
                'start' => $data['start'],
                'end' => $data['end'],
                'skills_learned' => $data['skills_learned'],
                'user_id' => $data['user_id']
            ]);

        return back()->with('success', 'Education Added.');

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
    public function edit()
    {

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
