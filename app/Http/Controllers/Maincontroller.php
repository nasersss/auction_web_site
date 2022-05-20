<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Maincontroller extends Controller
{
    public function show(){
        try {

        return view('main');
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }
    }
}
