<?php

namespace App\Http\Controllers\Admin;

use App\PitchGroup;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Mockery\Exception;

class PitchController extends Controller
{
    public function __construct()
    {
        view()->share('fields', ['Name']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(PitchGroup $pitch)
    {
        $items = $pitch->all();
        return view('admin.pitch.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pitch.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\PitchRequest $request, PitchGroup $pitch)
    {
        $pitch->create($request->all());

       return redirect()->route('admin.pitch.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       throw new Exception('Not Implement');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, PitchGroup $pitch)
    {
        $model = $pitch->find($id);
        return view('admin.pitch.create', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, PitchGroup $pitch)
    {
        $pitch->findOrFail($id)->update($request->all());
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, PitchGroup $pitch)
    {
        $pitch->find($id)->delete();
        return back();
    }
}
