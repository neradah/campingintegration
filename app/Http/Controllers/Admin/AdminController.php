<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

abstract class AdminController extends Controller
{

    protected function upload($request, $folder = 'uploads')
    {
        if ($request->isValid()) {
            $name = str_random(10).'.'.$request->getClientOriginalExtension();
            $request->move('uploads', $name);

            return $name;
        }
        return false;
    }

}