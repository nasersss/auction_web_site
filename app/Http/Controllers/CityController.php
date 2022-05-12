<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    //

    public function create(){
        $state=State::get();
    //    return response($state);
        return view("admin.address.city.add")->with("state",$state);

    }
    public function store(Request $request)
    {
        //
        Validator::validate($request->all(), [
            'name' => ['required', 'min:2', 'max:50'],
            'state_id'=>['required']
        ], [
            'name.required' => 'يجب تعبئت هذا الحقل',
            'name.max' => 'لايمكنك ادخال اقل من 50 حرف',
            'state_id.required'=>'الرجاء اختيار محافظة'

        ]);
        $city = new City();
        $city->name = $request->name;
        $city->state_id = $request->state_id;
        $city->is_active = $request->is_active;
        if ($city->save())
            return redirect()->route('list_status')->with(['success' => 'تم اضافة البيانات بنجاح']);

        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    public function listCity(){
        $city=City::with("state")->get();
        return view("admin.address.city.list")->with("city",$city);

        }
}
