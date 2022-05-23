<?php

namespace App\Http\Controllers;

use App\Models\auction;
use App\Models\Bidding;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('is.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auctions=auction::get();
        $users=User::get();
        $bayders=Bidding::get();
        // return $bayders;
        // $orders=Order::get();
        try {
            return view('admin/home')->with([
                'auctions'=>$auctions,
                'users'=>$users,
                'bayders'=>$bayders,
            ]);
        } catch (\Exception $e) {
            return view('error');
        }
    }
}
