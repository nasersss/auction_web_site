<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class editphotoauction extends Controller
{
    public function editphotoauction(){
        try {
        return view('admin.editphotoauction');
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }
}
}
