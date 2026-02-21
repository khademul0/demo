<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\form;

class userregistration extends Controller
{
    public function rform()
    {
        return view('form');
    }

    public function register(request $request)
    {
        echo "<pre>";
        return  print_r($request->all());
    }
}
