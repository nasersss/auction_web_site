<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Cart extends Controller
{
    public function Cart(){
        try {

        return view('Cart');
    } catch (\Throwable $error) {
        return back()->with(['error'=>"حدث خطاء لم تتم العملية بنجاح"]);

    }
}
}
