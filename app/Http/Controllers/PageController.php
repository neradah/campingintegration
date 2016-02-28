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

    function events(Event $event)
    {
        $events = $event->all();
        return view('events.index', compact('events'));
    }


    public function getShow($event, PitchGroup $pitchGroup)
    {
        $pitchGroups = $pitchGroup->all();
        return view('pages.event', compact('event', 'pitchGroups'));


    }


}
