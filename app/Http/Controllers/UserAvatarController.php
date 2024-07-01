<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;


class UserAvatarController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Validate the uploaded file
        $request->validate([
            'user-avatar' => 'required|image'
        ]);

        // Store the new avatar
        $path = $request->file('user-avatar')->store('avatars', 'public');

        // Delete the old avatar if exists
        $user = Auth::user();
        if ($user->avatar) {
            Storage::disk('public')->delete($user->avatar);
        }

        // Update the user avatar path
        $user->update(['avatar' => $path]);

        // Return a response or redirect as needed
        return redirect(route('profile'));
    }

}
