<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Validation\ValidationData;

class adminregis extends Controller
{
    public function aform()
    {
        return view('adminfrom');
    }

    public function aregister(request $done)
    {
        $done->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required'

        ]);

        echo "<pre>";
        return print_r($done->all());
    }
}
