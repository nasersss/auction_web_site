<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutUs extends Controller
{
    public function AboutUs(){
        try {

            return view('about us');

        } catch (\Throwable $error) {
return view('error');
        }

}
}
