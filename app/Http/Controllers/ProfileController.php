<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Helpers\Helper;

class ProfileController extends Controller
{
    public function show(User $user)
    {
        return view('profiles.show', [
            'user'  => $user,
        ]);
    }
}
