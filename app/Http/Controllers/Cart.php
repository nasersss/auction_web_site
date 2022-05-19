<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
    public function Cart(){
        try {

        return view('Cart');
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }
}
}
