<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleTypeController extends Controller
{

    /**
     * this function will show page that through will insert data
     * @return [type]
     */
    public function create()
    {
        try {
            return view("admin.vehicle.add");
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     *this function will show page that contain all vehicle in database
     * @return [type]
     */
    public function listVehicle()
    {
        try {

            $vehicle = VehicleType::get();
            return view("admin.vehicle.list")->with("vehicle", $vehicle);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     * @param Request $request
     *
     * this function used for insert data to table Vehicle types
     *
     * @return [string ]
     */
    public function store(Request $request)
    {
        //
        try {


            Validator::validate($request->all(), [
                'name' => ['required', 'max:50', 'unique:vehicle_types'],
            ], [
                'name.required' => 'يجب تعبئت هذا الحقل',
                'name.max' => 'لايمكنك ادخال اقل من 50 حرف',
                'name.unique' => 'الاسم الذي ادخلتة موجود مسبقاً'

            ]);
            $vehicle = new VehicleType();
            $vehicle->name = $request->name;
            $vehicle->is_active = $request->is_active;
            if ($vehicle->save())
                return redirect()->route('list_vehicle')->with(['success' => 'تم اضافة البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }



    /**
     * @param mixed $vehicleId
     * this function used to show page that through update date
     * @return [type]
     */
    public function edit($vehicleId)
    {
        try {

            //
            $vehicle = VehicleType::find($vehicleId);
            return view('admin.vehicle.edit')
                ->with('vehicle', $vehicle);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }


    /**
     * @param Request $request
     * @param mixed $vehicleId
     *this function used to update data from database
     * @return [string]
     */
    public function update(Request $request, $vehicleId)
    {
        try {

            Validator::validate($request->all(), [
                'name' => ['required', 'max:50'],
            ], [
                'name.required' => 'يجب تعبئت هذا الحقل',
                'name.max' => 'لايمكنك ادخال اقل من 50 حرف',

            ]);
            //
            $vehicle = VehicleType::find($vehicleId);
            $vehicle->name = $request->name;
            $vehicle->is_active = $request->is_active;
            if ($vehicle->save())
                return redirect()->route('list_vehicle')->with(['success' => 'تم تحديث البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }


    /**
     * @param mixed $vehicleId
     * this function used to convert is active attribute from 1 to -1
     * @return [boolean]
     */
    public function toggle($vehicleId)
    {
        try {

            $vehicle = VehicleType::find($vehicleId);
            $vehicle->is_active *= -1;
            if ($vehicle->save())
                return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

            return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }
}
