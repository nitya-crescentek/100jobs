<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

use Illuminate\Http\Request;

class UpdateProfileController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request)
    {
        $request->validate([
            'resume' => 'required|file'
        ]);

        $path = $request->file('resume')->store('resumes', 'public');

        // dd($path);
        $user = Auth::user();
        if ($user->resume) {
            Storage::disk('public')->delete($user->resume);
        }
        
        $user->update(
            [
                'resume' => $path,
                'name' => $request->name,
                'email' => $request->email,
                'contact' => $request->contact,
                'bio' => $request->bio,
                'city' => $request->city,
                'country' => $request->country

            ]
        );

        return redirect(route('profile'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
