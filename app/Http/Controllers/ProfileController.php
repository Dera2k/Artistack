<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;

class ProfileController extends Controller
{
    // Display user's profile
    public function show()
    {
        /** @var User $user */
        $user = Auth::user();

        return view('profile.show', compact('user'));
    }

    // Show edit profile form
    public function edit()
    {
        /** @var User $user */
        $user = Auth::user();

        return view('profile.edit', compact('user'));
    }

    // Update user's profile
    public function update(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'string',
                'lowercase',
                'email',
                'max:255',
                'unique:users,email,' . $user->id,
            ],
        ]);

        $user->update($validated);

        return redirect()
            ->route('profile.show')
            ->with('success', 'Profile updated successfully.');
    }

    // Show change password form
    public function editPassword()
    {
        return view('profile.change-password');
    }

    // Update user's password
    public function updatePassword(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $validated = $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed', Password::defaults()],
        ]);

        $user->update([
            'password' => Hash::make($validated['password']),
        ]);

        return redirect()
            ->route('profile.show')
            ->with('success', 'Password changed successfully.');
    }

    // Delete user's account
    public function destroy(Request $request)
    {
        /** @var User $user */
        $user = Auth::user();

        $request->validate([
            'password' => ['required'],
        ]);

        if (!Hash::check($request->password, $user->password)) {
            return back()->withErrors([
                'password' => 'Password is incorrect.',
            ]);
        }

        // Delete user's artworks
        $user->artworks()->delete();

        // Delete the user account
        $user->delete();

        // Log out the user
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')
            ->with('success', 'Account deleted successfully.');
    }
}