<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class UserAvatarController extends Controller
{
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'avatar' => ['required', 'image']
    //     ]);
    // }

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
    public function update(Request $request, string $id)
    {
        // dd($request);
        // $request->validate();
        // $path = Storage::disk('public')->put('avatars',$request->file('avatar'));
        // $path=$request->file('avatar')->store('avatars','public');

        // if($oldAvatar = $request->user()->avatar){
        //     Storage::disk('public')->delete($oldAvatar);
        // }

        // auth()->user()->update(['avatar'=>$path]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
