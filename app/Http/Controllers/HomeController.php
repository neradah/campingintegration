<?php

namespace App\Http\Controllers;

use App\Category;
use App\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getIndex(Category $category, Event $event)
    {
        $carousel = $event->all();


        $categories = $category->lists('name', 'id');
        $earlyBirdFeature = $event
            ->where('early_bird_start', '<',  Carbon::now()) //its started
            ->where('early_bird_end', '>', Carbon::now()) //not finised
            ->first();


        $tent = $earlyBirdFeature->Tents()->orderBy('cost', 'DESC')->first();

        $start = $earlyBirdFeature->start->toFormattedDateString();
        $end = $earlyBirdFeature->end->toFormattedDateString();

        $earlyBirdFeature = $earlyBirdFeature->toArray();

        $earlyBirdFeature['saving'] =  ($tent->cost / 100) * $earlyBirdFeature['discount'];

        $earlyBirdFeature['start'] = $start;
        $earlyBirdFeature['end'] = $end;




        $recentlyAdded = $event->orderBy('created_at', 'DESC')->first();

        $start = $recentlyAdded->start->toFormattedDateString();
        $end = $recentlyAdded->end->toFormattedDateString();

        $tent =  $recentlyAdded->Tents()->orderBy('cost', 'ASC')->first();

        $recentlyAdded = $recentlyAdded->toArray();

        $recentlyAdded['cheapest'] = $tent->cost;

        $recentlyAdded['start'] = $start;
        $recentlyAdded['end'] = $end;




        foreach($carousel as $event)
        {
            $start = $event->start->toFormattedDateString();
            $end = $event->end->toFormattedDateString();

            $tent = $event->Tents()->orderBy('qty', 'ASC')->first();

            $tentCheapest = $event->Tents()->orderBy('cost', 'ASC')->first();


            $carouselEvent = $event->toArray();
            $carouselEvent['pitchesLeft'] = 0;
            $carouselEvent['tentsLeft'] = $tent->qty;
            $carouselEvent['cheapest'] = $tentCheapest->cost;

            $carouselEvent['start'] = $start;
            $carouselEvent['end'] = $end;

            $carouselEvents[] = $carouselEvent;

        }

        $carousel = $carouselEvents;



        
        return view('pages.home', compact('categories', 'carousel', 'earlyBirdFeature', 'recentlyAdded'));
    }

    /**
     * @param Category $category
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function postSearch(Category $category, Request $request)
    {
        $results = $category->findOrFail($request->get('id'))->events()->get();

        return view('pages.home', compact('results'));
    }
}
