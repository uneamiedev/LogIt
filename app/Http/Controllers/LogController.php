<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class LogController extends Controller
{
    public function index()
    {
        return view('home', [
            'logs' => auth()->user()->feed(),
            'timelines' => auth()->user()->timelines()->latest()->get(),
        ]);
    }

    /**
     * Store a new log.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'timeline'  => 'required|exists:timelines,id,user_id,'. auth()->user()->id,
            'body'      => 'required|max:255',
        ]);

        Log::create([
            'user_id'       => auth()->id(),
            'timeline_id'   => $attributes['timeline'],
            'body'          => $attributes['body'],
        ]);

        return redirect()->route('home');
    }

    /**
     * Delete log
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function destroy(Log $log)
    {
        $timeline = $log->timeline;
        $log->delete();

        return redirect()->route('timeline.show', ['timeline' => $timeline]);
    }
}
