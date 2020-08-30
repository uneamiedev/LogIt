<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Timeline;
use App\Helpers\Helper;

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
            'bio'       => 'string|max:255',
            'link_web'  => 'url',
            'location'  => 'string|max:50',
        ]);

        $user->name = $attributes['name'];
        $user->bio = $attributes['bio'] ?? '';
        $user->link_web = $attributes['link_web'] ?? '';
        $user->location = $attributes['location'] ?? '';

        $user->save();

        return redirect()->route('profile.show', [
            'user' => $user,
            'timelines'     => $user->timelines,
            'logs'          => $user->logs
        ]);
    }
}
