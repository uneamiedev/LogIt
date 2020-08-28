<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     *
     * timelines contains user's timeline from latest to oldest
     */
    public function index()
    {
        return view('home', [
            'logs' => auth()->user()->feed(),
            'timelines' => auth()->user()->timelines()->latest()->get(),
        ]);
    }
}
