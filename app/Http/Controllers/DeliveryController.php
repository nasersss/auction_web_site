<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    //
    public function create(){
        $state=State::with('city')->get();
        return view('delivery.add')->with('states',$state);
    }

    public function store(Request $request){

        $delivery=new Delivery();
        $delivery->receiver_name=$request->res_name;
        $delivery->receiver_identity_type=$request->res_id_type;
        $delivery->receiver_identity_number=$request->res_id_num;
        $delivery->receiver_phone=$request->phone;
        $delivery->payer_id=Auth::user()->id;;
        $delivery->auction_id=1;
        $delivery->city_id=$request->city;


        if($delivery->save())
        return back()->with(['success'=>"data saving successfully"]);
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
