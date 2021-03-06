<?php

namespace App\Http\Controllers\Admin;

use App\PitchGroup;
use App\Tent;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TentController extends AdminController
{

    function __construct()
    {
        view()->share('fields', ['Name', 'Capacity', 'image']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Tent $tent)
    {
        $items = $tent->all();
        return view('admin.tent.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PitchGroup $pitch)
    {
        $pitches = $pitch->all();
        return view('admin.tent.create', compact('pitches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateTentRequest $request, Tent $tent)
    {
        $name = $this->upload($request->file('image_upload'));
        $request->merge(['image' => $name]);
        $tent->create($request->only(['name', 'youtube', 'capacity', 'image']))->pitchgroups()->sync($request->get('pitches', []));

        return redirect()->route('admin.tent.index');
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
    public function edit($id, Tent $tent, PitchGroup $group)
    {
        $pitches = $group->all();
        $model = $tent->find($id)->firstOrFail();
        return view('admin.tent.create', compact('model', 'pitches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
