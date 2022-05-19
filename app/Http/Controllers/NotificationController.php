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
        $notification = Notification::find($notificationId);
        $notification->is_seen = 1;
        $notification->update();
        $route = explode('/', $notification->route);
        $parameter = null;
        if (count($route) == 1)
            return redirect()->route("$notification->route");
        else {
            $parameter = $route[1];
            $route = $route[0];
            return redirect()->route("$route", "$parameter");
        }
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
    public function sendNotification($form = null,$toUserId, $content, $route)
    {
        $notification = new Notification();
        if($form==null)
            $form = Auth::user()->id;
        $notification->from_user_id = $form;
        $notification->to_user_id = $toUserId;
        $notification->content = $content;
        $notification->route = $route;
        $notification->save();
    }
    public function sendNotificationFromAdmin($toUserId, $content, $route)
    {
        $notification = new Notification();
        $admin = User::where('role',0)->first();
        $notification->from_user_id = $admin->id;
        $notification->to_user_id = $toUserId;
        $notification->content = $content;
        $notification->route = $route;
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
