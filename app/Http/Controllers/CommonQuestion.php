<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonQuestion extends Controller
{
    public function CommonQuestion(){
        try {

        return view('CommQue');
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }
}
}
