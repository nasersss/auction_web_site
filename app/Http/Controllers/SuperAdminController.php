<?php

namespace App\Http\Controllers;

class SuperAdminController extends Controller
{
    //
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('is.super.admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $auctions = auction::get();
        $users = User::get();
        $bayders = Bidding::get();
        $orders = Order::get();
        try {
            return view('admin/home')->with([
                'auctions' => $auctions,
                'users' => $users,
                'bayders' => $bayders,
                'orders' => $orders,
            ]);
        } catch (\Exception$e) {
            return view('error');
        }
    }
}
