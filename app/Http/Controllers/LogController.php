<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Log;

class LogController extends Controller
{
    /**
     * Store a new log.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
        $attributes = $request->validate([
            'body' => 'required|max:255',
        ]);

        Log::create([
            'user_id' => auth()->id(),
            'body' => $attributes['body'],
            'timeline_id' => 1,
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
