<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use App\Models\Experiences;
use Illuminate\Http\Request;

class ExperienceController extends Controller
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
        $user->experiences;
        return view('experience.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $education = Experiences::create([
                'company' => $data['company'],
                'role' => $data['role'],
                'start' => $data['start'],
                'end' => $data['end'] ?? 'Working',
                'skills_gained' => $data['skills_gained'],
                'user_id' => $data['user_id']
            ]);

        return back()->with('success', 'Experience added');
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
        $exp = Experiences::find($id);

        return view('experience.edit', ['experience'=> $exp]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request;

        $exp = Experiences::find($id);

        $exp -> update([
            'company' => $data['company'],
            'role' => $data['role'],
            'start' => $data['start'],
            'end' => $data['end'] ?? 'Working',
            'skills_gained' => $data['skills_gained']
        ]);

        return back()->with('success', 'Updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $exp = Experiences::find($id);
        $exp -> delete();

        return back()->with('success', 'deleted');
    }
}
