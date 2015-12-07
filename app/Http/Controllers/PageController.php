<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function getHome(Event $event)
    {

        $events = $event->orderBy('created_at', 'desc')->get();


        $this->recentlyAdded = $events->first();

        $events->filter(function($event) {

            if($event->home_featured_early_bird == 1) {
                return $this->earlyBirdFeature = $event;
            }

            if($event->home_list_featured == 1) {
                return $this->highlightsList[] = $event;
            }

        });

        return View::make('pages.home', ['recentlyAdded' => $this->recentlyAdded, 'highlightsList' => $this->highlightsList, 'earlyBirdFeature' => $this->earlyBirdFeature]);

    }
}
