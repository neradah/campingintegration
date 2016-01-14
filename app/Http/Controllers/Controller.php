<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

abstract class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

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
