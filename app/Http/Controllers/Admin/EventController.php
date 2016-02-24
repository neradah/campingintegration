<?php

namespace App\Http\Controllers\Admin;

use App\CampSite;
use App\Category;
use App\Event;
use App\PitchGroup;
use App\Zone;
use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class EventController extends AdminController
{
    public function __construct()
    {
        view()->share('fields', ['Slug', 'Name', 'Location', 'Date of Event']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Event $event)
    {
        $items = $event->all();
        return view('admin.event.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PitchGroup $pitch, CampSite $campsites, Zone $zones, Category $category)
    {
        $pitches = $pitch->get();
        $campsites = $campsites->all();
        $zones = $zones->all();
        $categories = $category::lists('name', 'id');

        return view('admin.event.create', compact('pitches', 'campsites', 'zones', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateEventRequest $request, Event $event)
    {

        $banner = $this->upload($request->file('banner_upload'));
        $thumbnail = $this->upload($request->file('thumbnail_upload'));

        $request->merge(compact('thumbnail', 'banner'));


        $event =  $event->create($request->all());
        $event->campsites()->sync($request->get('campsites', []));




        foreach($request->get('pitch') as $pitchId => $value){

            //each tent under that pitch
            foreach($value as $tentId => $tent){

                $tentsInsertDB[] = ['pitch_id' => $pitchId, 'event_id' => $event->id, 'tent_id' => $tentId, 'qty' => $tent['qty'], 'cost' => $tent['cost']];

            }

        }

        foreach($request->get('product') as $pitchId => $value){

            //each tent under that pitch
            foreach($value as $productId => $product){



                $productsInsertDB[] = ['pitch_id' => $pitchId, 'event_id' => $event->id, 'product_id' => $productId, 'cost' => $product['cost'], 'active' => isset($product['status']) ? true : false ];

            }

        }

        DB::table('event_tent_qty_cost')->where('event_id', '=', $event->id)->delete();
        DB::table('event_tent_qty_cost')->where('event_id', '=', $event->id)->delete();

        DB::table('event_tent_qty_cost')->insert($tentsInsertDB);
        DB::table('event_product_qty_cost')->insert($productsInsertDB);


        return redirect()->route('admin.event.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Event $event, PitchGroup $pitch, CampSite $campSite, Zone $zones, Category $category)
    {

        $pitches = $pitch->get();
        $campsites = $campSite->all();
        $categories = $category::lists('name', 'id');
        $model = $event->find($id)->firstOrFail();


        return view('admin.event.create', compact('pitches', 'campsites', 'zones', 'categories', 'model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Event $event)
    {
        $event = $event->find($id)->firstOrFail();

        $event->update($request->all());

        $event->campsites()->sync($request->get('campsites', []));


        foreach($request->get('pitch') as $pitchId => $value){

            //each tent under that pitch
            foreach($value as $tentId => $tent){

                $tentsInsertDB[] = ['pitch_id' => $pitchId, 'event_id' => $event->id, 'tent_id' => $tentId, 'qty' => $tent['qty'], 'cost' => $tent['cost']];

            }

        }

        foreach($request->get('product') as $pitchId => $value){

            //each tent under that pitch
            foreach($value as $productId => $product){

                $productsInsertDB[] = ['pitch_id' => $pitchId, 'event_id' => $event->id, 'product_id' => $productId, 'cost' => $product['cost'], 'active' => isset($product['status']) ? true : false ];

            }

        }


        DB::table('event_tent_qty_cost')->where('event_id', '=', $event->id)->delete();
        DB::table('event_product_qty_cost')->where('event_id', '=', $event->id)->delete();

        DB::table('event_tent_qty_cost')->insert($tentsInsertDB);
        DB::table('event_product_qty_cost')->insert($productsInsertDB);


        return redirect()->route('admin.event.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Event $event)
    {
        $event->find($id)->delete();
        return back();
    }
}
