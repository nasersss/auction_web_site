<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactUs extends Controller
{
    public function ContactUs(){
        try {

        return view('contact us');
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }
}
}
