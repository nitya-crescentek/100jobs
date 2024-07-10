<?php

namespace App\Http\Controllers;

use App\Models\Certifications;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CertificationController extends Controller
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
        $user->certifications;
        return view('certification.add', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();
        // dd($data);
        $certification = Certifications::create([
                'name' => $data['name'],
                'institution' => $data['institution'],
                'grade' => $data['grade'],
                'year' => $data['year'],
                'duration' => $data['duration'],
                'user_id' => $data['user_id']
            ]);

        return back()->with('success', 'Certification added');
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
