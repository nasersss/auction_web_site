<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CityController extends Controller
{
    //

    /**
     * this function used to display that through inserter city data
     * @return [type]
     */
    public function create()
    {
        try {

            $state = State::get();
            return view("admin.address.city.add")->with("state", $state);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }



    /**
     * @param Request $request
     *
     * this function used to insert city data in table
     *
     * @return [type]
     */
    public function store(Request $request)
    {
        try {

            Validator::validate($request->all(), [
                'name' => ['required', 'min:1', 'max:50'],
                'state_id' => ['required']
            ], [
                'name.required' => 'يجب تعبئت هذا الحقل',
                'name.max' => 'لايمكنك ادخال اقل من 50 حرف',
                'state_id.required' => 'الرجاء اختيار محافظة',
                'name.min' => 'يجب ان يكون الحقل المدخل حرف واحد'

            ]);
            $city = new City();
            $city->name = $request->name;
            $city->state_id = $request->state_id;
            $city->is_active = $request->is_active;
            if ($city->save())
                return redirect()->route('list_City')->with(['success' => 'تم اضافة البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);

        }
    }

    /**
     *
     *this function used to display all city with state that related with theme
     * @return [type]
     */
    public function listCity()
    {

        try {
            $city = City::with("state")->get();
            return view("admin.address.city.list")->with("city", $city);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }


    /**
     * @param mixed $cityId
     *
     * This function used to convert from is active from 1 to -1
     *
     * @return [type]
     */
    public function toggle($cityId)
    {
        try {


            $city = City::find($cityId);
            $city->is_active *= -1;
            if ($city->save())
                return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

            return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }



    /**
     * @param mixed $cityId
     *
     * This function used to display page that through can update data
     *
     * @return [type]
     */
    public function edit($cityId)
    {
        try {
            //
            $city = City::with("state")->find($cityId);
            $state = State::get();
            return view('admin.address.city.edit')
                ->with(['city' => $city, 'state' => $state]);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }


    /**
     * @param Request $request
     * @param mixed $cityId
     *
     * this function used to update city data in database
     *
     * @return [type]
     */
    public function update(Request $request, $cityId)
    {
        try {


            Validator::validate($request->all(), [
                'name' => ['required', 'min:1', 'max:50'],
                'state_id' => ['required']
            ], [
                'name.required' => 'يجب تعبئت هذا الحقل',
                'name.max' => 'لايمكنك ادخال اقل من 50 حرف',
                'state_id.required' => 'الرجاء اختيار محافظة',
                'name.min' => 'يجب ان يكون الحقل المدخل حرف واحد'

            ]);
            //
            $city = City::find($cityId);
            $city->name = $request->name;
            $city->state_id = $request->state_id;
            $city->is_active = $request->is_active;
            if ($city->save())
                return redirect()->route('list_City')->with(['success' => 'تم تحديث البيانات بنجاح']);
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }
}
