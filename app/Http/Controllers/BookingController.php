<?php

namespace App\Http\Controllers;

use App\CampSite;
use App\PitchGroup;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function step1($event)
    {

        return view('pages.campsite_loc', compact('event'));
    }

    public function step2($event, PitchGroup $pitchGroup, CampSite $campSite)
    {
        $campSite = $campSite->find(1);

        return view('events.booking', compact('event', 'pitchGroup', 'campSite'));
    }
}
