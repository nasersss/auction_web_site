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
        try {

            $notifications = Notification::where('to_user_id', Auth::user()->id)->where('is_seen', -1)->get();
            return response($notifications);
        } catch (\Throwable $error) {
            throw $error->getMessage();
        }
    }

    /**
     * @param mixed $notificationId
     *
     * this function used for make notification seen
     * @return [type]
     */
    public function makeNotificationSeen($notificationId)
    {
        try {

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
        } catch (\Throwable $error) {
            return view('error.error')->with('error',"هناك خطاء ما عفوا ");
        }
    }

    /**
     *
     * this function used to sent notification to user
     *
     * @param mixed $fromUserId
     * @param mixed $toUserId
     * @param mixed $content
     * @param mixed $route
     *
     * @return boolean
     *
     */
    public function sendNotification($toUserId, $content, $route)
    {
        try {

            $notification = new Notification();
            $notification->from_user_id = Auth::user()->id;
            $notification->to_user_id = $toUserId;
            $notification->content = $content;
            $notification->route = $route;
            $notification->save();
        } catch (\Throwable $error) {
            // throw $error->getMessage();
            return view('error.error')->with('error',"هناك خطاء ما عفوا ");

        }
    }
    /**
     * [This function used to send notfication from admin to user]
     *
     * @param mixed $toUserId
     * @param mixed $content
     * @param mixed $route
     * 
     * @return [boolean]
     * 
     */
    public function sendNotificationFromAdmin($toUserId, $content, $route)
    {
        try {
            $notification = new Notification();
            $admin = User::where('role', 0)->first();
            $notification->from_user_id = $admin->id;
            $notification->to_user_id = $toUserId;
            $notification->content = $content;
            $notification->route = $route;
            $notification->save();     
           } catch (\Throwable $th) {
            // throw $error->getMessage();
            return view('error.error')->with('error',"عفوا هناك خطاء ما لم يتم إرسال الاشعارات ");

        }
        
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
