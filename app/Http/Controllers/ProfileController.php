<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Timeline;
use App\Helpers\Helper;
use Illuminate\Validation\Rule;


class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user'          => $user,
            'timelines'     => $user->timelines,
            'logs'          => $user->logs
        ]);
    }

    public function edit(User $user)
    {
        return view('profiles.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $attributes = $request->validate([
            'name'      => 'string|required|max:255',
            'bio'       => 'nullable|string|max:255',
            'link_web'  => 'nullable|url',
            'location'  => 'nullable|string|max:50',
            'username'  => 'string|required|max:50|alpha_dash|'. Rule::unique('users')->ignore($user),
            'email'     => 'required|email|max:255|'. Rule::unique('users')->ignore($user),
            'password'  => 'string|required|min:8|max:255|confirmed',
        ]);

        $user->name = $attributes['name'];
        $user->bio = $attributes['bio'] ?? '';
        $user->link_web = $attributes['link_web'] ?? '';
        $user->location = $attributes['location'] ?? '';
        $user->username = $attributes['username'];
        $user->email = $attributes['email'];
        $user->password = $attributes['password'];


        $user->save();

        return redirect()->route('profile.show', [
            'user'      => $user,
            'timelines' => $user->timelines,
            'logs'      => $user->logs
        ]);
    }

    public function destroy(User $user)
    {
        $user->delete();

        return view('welcome');
    }

    public function following(User $user)
    {
        return view('profiles.show', [
            'user'          => $user,
        ]);
    }
}
