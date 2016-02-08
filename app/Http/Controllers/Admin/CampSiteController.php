<?php

namespace App\Http\Controllers\Admin;

use App\CampSite;
use App\Category;
use App\Zone;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CampSiteController extends AdminController
{

    function __construct()
    {
        view()->share('fields', ['name', 'address', 'check in time', 'check out time']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CampSite $campSite)
    {
        $items = $campSite->all();
        return view('admin.campsite.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Zone $zone)
    {
        $zones = $zone->all();

        return view('admin.campsite.create', compact('zones'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateCampsiteRequest $request, CampSite $campSite)
    {
        $image = $this->upload($request->file('image_upload'));

        $request->merge(compact('image'));

        $campSite->create($request->all())->zones()->sync($request->get('zones', []));
        return redirect()->route('admin.campsite.index');
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
    public function edit($id, CampSite $campSite, Zone $zone)
    {
        $zones = $zone->all();
        $model = $campSite->find($id)->firstOrFail();
        return view('admin.campsite.create', compact('model', 'zones'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, CampSite $campSite)
    {
        $campsite = $campSite->find($id)->firstOrFail();
        $campsite->update($request->all());
        $campsite->zones()->sync($request->get('zones', []));


        return redirect()->route('admin.campsite.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, CampSite $campSite)
    {
        $campSite->find($id)->delete();
        return back();
    }
}
