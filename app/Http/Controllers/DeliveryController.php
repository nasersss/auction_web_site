<?php

namespace App\Http\Controllers;

use App\Models\Delivery;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    Validator::validate($request->all(), [
        'res_name' => ['required', 'min:1', 'max:200'],
        'res_id_type' => ['required'],
        'res_id_num'=>['required'],
        'phone'=>['required','min:5','max:15'],
        'city'=>['required'],
    ], [
        'res_name.required' => ' يجب تعبئت  الحقل  الخاص باسم المستلم',
        'res_name.max' => 'لايمكنك ادخال اقل من 200 حرف',
        'res_name.min' => 'لايمكن ان يكون اسم المستلم اقل من حرف',
        'res_id_type.required'=>'يجب  لا يكون الحقل الخاص با نوع بطاقة الهوية فاضي',
        'res_id_num.required'=>'يجب  لا يكون الحقل الخاص با  بطاقة الهوية فاضي',
        'phone.required'=>'يجب  لا يكون الحقل الخاص با  بطاقة الهوية فاضي',
        'phone.min'=>'يجب الايكون الرقم اقل من 5',
        'phone.max'=>'يجب الايكون الرقم اكثر  من 15 اعداد',

    ]);

        $delivery=new Delivery();
        $delivery->receiver_name=$request->res_name;
        $delivery->receiver_identity_type=$request->res_id_type;
        $delivery->receiver_identity_number=$request->res_id_num;
        $delivery->receiver_phone=$request->phone;
        $delivery->payer_id=Auth::user()->id;;
        $delivery->auction_id=1;
        $delivery->city_id=$request->city;


        if($delivery->save())
        return redirect()->route('index')->with(['success'=>"تم حقظ البيانات بنجاح  "]);
        return back()->with(['error'=>"حدث خطاء لم تتم العملية بنجاح"]);
    } catch (\Throwable $error) {
        return back()->with(['error'=>"حدث خطاء لم تتم العملية بنجاح"]);
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
        return back()->with(['error'=>"حدث خطاء لم تتم العملية بنجاح"]);
    }
    }
}
