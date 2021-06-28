<?php

namespace Tests\Unit;

use App\Timeline;
use Tests\TestCase;

class TimelineTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_slug_respects_naming_rules()
    {
        $title = 'Ma timeline est l\'une des plus belles';
        $expected_slug = 'ma-timeline-est-lune-des-plus-belles';

        $timeline = factory(Timeline::class)->create([
            'title' => $title,
        ]);

        $this->assertEquals($expected_slug, $timeline->slug);
    }
}
