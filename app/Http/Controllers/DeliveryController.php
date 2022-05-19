<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeliveryController extends Controller
{
    //
    /**
     * this function used for show delivery info page
     * @return [type]
     */
    public function create(){
        try {


        $state=State::with('city')->get();
        return view('delivery.add')->with('states',$state);
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }
    }

    /**
     * @param Request $request
     * this function used to insert data into database
     * @return [type]
     */
    public function store(Request $request){
try {


        $delivery=new Delivery();
        $delivery->receiver_name=$request->res_name;
        $delivery->receiver_identity_type=$request->res_id_type;
        $delivery->receiver_identity_number=$request->res_id_num;
        $delivery->receiver_phone=$request->phone;
        $delivery->payer_id=Auth::user()->id;;
        $delivery->auction_id=1;
        $delivery->city_id=$request->city;


        if($delivery->save())
        return redirect()->route('index')->with(['success'=>"data saving successfully"]);
        return back()->with(['error'=>"error"]);
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }


    }
    /**
     * @param mixed $delivery_id
     * this function used to convert is active attribute from 1 into -1
     * @return [type]
     */
    public function toggle($delivery_id){
try {

        $delivery=Delivery::find($delivery_id);
        $delivery->is_active*=-1;
        if($delivery->save())
        return back()->with(['success'=>"data saving successfully"]);
        return back()->with(['error'=>"error"]);
    } catch (\Throwable $error) {
        throw $error->getMessage();
    }
    }
}
