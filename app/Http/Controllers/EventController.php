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
    public function getShow($slug, Event $event)
    {

        $event = $event->where('slug', $slug)->first();

        return ($event) ? view('pages.event', compact('event')) : App::abort(404, 'No Event Found');
    }

    private function __getProductsPitch($eventID, $pitchID)
    {
       return  DB::table('event_product_qty_cost')
            ->where('event_id', $eventID)
            ->where('pitch_id', $pitchID)
            ->get();
    }

}

