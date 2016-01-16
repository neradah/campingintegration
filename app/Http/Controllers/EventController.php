<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use App;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getShow($event, App\PitchGroup $pitchGroup)
    {
        $pitchGroups = $pitchGroup->all();
        return view('demo_event', compact('event', 'pitchGroups'));
    }



}

