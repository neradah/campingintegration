<?php

namespace App\Http\Controllers\Admin;

use App\Event;
use App\PitchGroup;
use App\Product;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function __construct()
    {
        view()->share('fields', ['Name', 'Price']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        $items = $product->all();
        return view('admin.product.index', compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(PitchGroup $pitch)
    {
        $pitches = $pitch->all();
        return view('admin.product.create', compact('pitches'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateProductRequest $request, Product $product)
    {
        $product->create($request->all())->pitchgroups()->sync($request->get('pitches', []));



        return redirect()->route('admin.product.index');
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
    public function edit($id, Product $product, PitchGroup $pitch)
    {
        $pitches = $pitch->all();

        $model = $product->find($id);

        return view('admin.product.create', compact('model', 'pitches'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id, Product $product)
    {
        $prd = $product->findOrFail($id);
        $prd->update($request->all());
        $prd->pitchgroups()->sync($request->get('pitches', []));

        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Product $product)
    {
        $product->find($id)->delete();
        return back();
    }
}
