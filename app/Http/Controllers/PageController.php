<?php

namespace App\Http\Controllers;

use App\Event;
use App\PitchGroup;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{

    function events($categoryId, Event $event, Request $request)
    {
        if($categoryId)
        {
            $event = $event->where('category_id', '=', $categoryId);
        }

        if($request->has('early_bird'))
        {
            $event = $event->where('early_bird_start', '>', Carbon::now());
            $event = $event->where('early_bird_end', '<', Carbon::now());

        }

        $events = $event->get();

        return view('events.index', compact('events'));
    }


    public function getShow($event, PitchGroup $pitchGroup)
    {
        $pitchGroups = $pitchGroup->all();
        return view('pages.event', compact('event', 'pitchGroups'));


    }


}
