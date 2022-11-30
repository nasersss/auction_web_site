<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\auction;
use App\Models\State;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class DeliveryController extends Controller
{
    //
    public function create(Request $request)
    {
        $auction = auction::find($request->auction_id);
        $state = State::with('city')->get();
        return view('delivery.add')->with(['states' => $state, 'auction' => $auction]);
    }

    /**
     * @param Request $request
     * this function used to insert data into database
     * @return [type]
     */
    public function store(Request $request)
    {
        $auction = auction::find($request->autionId);
        $payment = new PymentContoller();
        $amountOfPayment = $auction->curren_price + 200 - $auction->stare_price * .2;
        $amountOfPayment =  $amountOfPayment +($auction->curren_price*0.01);//'plus amoutn of system'
        $delivery = new Delivery();
        $delivery->receiver_name = $request->receiver_name;
        $delivery->receiver_identity_type = $request->receiver_identity_type;
        $delivery->receiver_identity_number = $request->receiver_identity_number;
        $delivery->receiver_phone = $request->phone;
        $delivery->payer_id = Auth::user()->id;;
        $delivery->auction_id = $auction->id;
        $delivery->city_id = $request->city;
        $delivery->paid_amout = $amountOfPayment;
        $delivery->amout_delever = 200;
        if ($delivery->save()) {
            session_start();
            $_SESSION["delivery"] = $delivery;
            return $payment->makePyment($auction, $amountOfPayment);
        }
        
        return back()->with(['error' => "error"]);
    }
    /**
     * @param mixed $delivery_id
     * this function used to convert is active attribute from 1 into -1
     * @return [type]
     */
    public function toggle($delivery_id)
    {
        try {

            $delivery = Delivery::find($delivery_id);
            $delivery->is_active *= -1;
            if ($delivery->save())
                return back()->with(['success' => "data saving successfully"]);
            return back()->with(['error' => "error"]);
        } catch (\Throwable $error) {
            return back()->with(['error' => "حدث خطاء لم تتم العملية بنجاح"]);
        }
    }
    public function cencelDelevery(Request $request){

        try {
         //return $request;
         $user = User::find($request->userid);
         $delevery = Delivery::find($request->deleverId);
        // return $delevery->auction->user->name;
         $admin = User::where('role', 0)->first();
         $notification = new NotificationController();
         $notification->sendNotificationFromAdmin($admin->id, ' لقد قام المستخدم ' . $user->name . ' بتمديد برفض عملية تسليم السيارة  '.$delevery->auction->name.' المملوكة للمستخدم '.$delevery->auction->user->name, 'auction_review');
        return view('success2');
        } catch (\Throwable $th) {
            $error = 'لم يتم التأكد من طلبك الرجاء المحاولة لاحقا ';
            return view('error.error')->with('error',$error);
        }
    }
}
