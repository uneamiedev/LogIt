<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TimelineController extends Controller
{
    public function index()
    {
        return view('timelines.index', [
            'timelines' => auth()->user()->timelines()->get(),
        ]);
    }
}
