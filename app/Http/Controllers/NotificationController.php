<?php

namespace App\Http\Controllers;

use App\Models\auction;
use App\Models\category;
use App\Models\Notification;
use App\Models\State;
use App\Models\User;
use App\Models\VehicleType;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class NotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notifications = Notification::where('to_user_id', Auth::user()->id)->where('is_seen', -1)->get();
        return response($notifications);
    }

    public function makeNotificationSeen($notificationId)
    {

        $category = category::get();
        $state = State::with("city")->get();

        $vehicleType = VehicleType::get();
        $notification = Notification::find($notificationId);
        $notifications = Notification::where('to_user_id', Auth::user()->id)->where('is_seen', -1)->get();

        $notification->is_seen = 1;
        $notification->update();

       
        $auction = auction::with("auctionImage")->where('date_of_end_auction', '>=', Carbon::now()->add(-51, 'day'))->where('is_active', 1)->orderBy('created_at', 'desc')->paginate(9);
        return redirect()->route("$notification->route");
    }

    /**
     *  
     *
     * @param mixed $fromUserId
     * @param mixed $toUserId
     * @param mixed $content
     * @param mixed $route
     * 
     * @return boolean
     * 
     */
    public function sendNotification($toUserId,$content,$route)
    {
        $notification = new Notification();
        $notification->from_user_id = Auth::user()->id;
        $notification->to_user_id=$toUserId;
        $notification->content=$content;
        $notification->route=$route;
        $notification->save();

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function show(Notification $notification)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function edit(Notification $notification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Notification $notification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Notification  $notification
     * @return \Illuminate\Http\Response
     */
    public function destroy(Notification $notification)
    {
        //
    }
}
