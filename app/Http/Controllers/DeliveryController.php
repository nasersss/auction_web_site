<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\auction;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    //
    public function create(Request $request){
        $auction = auction::find($request->auction_id);
        $state=State::with('city')->get();
        return view('delivery.add')->with(['states'=>$state,'auction'=> $auction]);
    }

    public function store(Request $request){
        $auction= auction::find($request->autionId);
        $payment= new PymentContoller();
        $amountOfPayment = $auction->curren_price + 200 - $auction->stare_price * .2;
   
        $delivery=new Delivery();
        $delivery->receiver_name=$request->receiver_name;
        $delivery->receiver_identity_type=$request->receiver_identity_type;
        $delivery->receiver_identity_number=$request->receiver_identity_number;
        $delivery->receiver_phone=$request->phone;
        $delivery->payer_id=Auth::user()->id;;
        $delivery->auction_id=$auction->id;
        $delivery->city_id=$request->city;
        if($delivery->save())
        {
            session_start();
            $_SESSION["delivery"] = $delivery; 
            return $payment->makePyment($auction,$amountOfPayment);
        }
        return back()->with(['error'=>"error"]);


    }
    public function toggle($delivery_id){

        $delivery=Delivery::find($delivery_id);
        $delivery->is_active*=-1;
        if($delivery->save())
        return back()->with(['success'=>"data saving successfully"]);
        return back()->with(['error'=>"error"]);

    }
}
