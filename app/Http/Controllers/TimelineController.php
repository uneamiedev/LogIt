<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Timeline;
use App\Helpers\Helper;

class TimelineController extends Controller
{
    public function index()
    {
        return view('timelines.index', [
            'timelines' => auth()->user()->timelines()->get(),
        ]);
    }

    public function show(Timeline $timeline)
    {
        return view('timelines.show', [
            'timeline'  => $timeline,
            'logs'      => $timeline->logs,
        ]);
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'title'         => 'required|max:255',
            'description'   => 'required|max:255',
            'url_web'       => 'url',
        ]);

        $timeline = Timeline::create([
            'user_id'       => auth()->id(),
            'title'         => $attributes['title'],
            'description'   => $attributes['description'],
            'cover'         => 'default_cover_'. Helper::getRandTheme() . '.jpg',
            'url_web'       => $attributes['url_web'] ? $attributes['url_web'] : '',
        ]);

        return redirect()->route('timeline.show', ['timeline' => $timeline]);
    }

    public function destroy(Timeline $timeline)
    {
        $timeline->delete();

        return redirect()->route('timelines');
    }

    /**
     * Show the form for editing a given timeline
     *
     * @param  Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeline $timeline)
    {
        return view('timelines.edit', [
            'timeline' => $timeline
        ]);
    }

    public function update(Request $request, Timeline $timeline)
    {
        $attributes = $request->validate([
            'title'         => 'required|max:255',
            'description'   => 'required|max:255',
            'url_web'       => 'url',
        ]);

        $timeline->title = $attributes['title'];
        $timeline->description = $attributes['description'];
        $timeline->url_web = $attributes['url_web'] ?? '';

        $timeline->save();

        return redirect()->route('timeline.show', ['timeline' => $timeline]);
    }
}
