<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewAuctions extends Controller
{
    /**
     * this function will show actions page
     * @return [type]
     */
    public function ViewAuctions(){
        try {
        return view('viewacution');
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }
}
}
