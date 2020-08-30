<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use App\User;

class LikeController extends Controller
{
    public function store(Timeline $timeline, User $user)
    {
       $timeline->toggleLike(auth()->user());

        return back();
    }
}
