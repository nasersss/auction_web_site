<?php

namespace App\Http\Controllers;

use App\Models\VehicleType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class VehicleTypeController extends Controller
{

    public function create(){
        return view("admin.vehicle.add");
        }

        public function listVehicle(){
            $vehicle=VehicleType::get();
            return view("admin.vehicle.list")->with("vehicle",$vehicle);

            }

        public function store(Request $request)
        {
            //
            Validator::validate($request->all(), [
                'name' => ['required', 'max:50','unique:vehicle_types'],
            ], [
                'name.required' => 'يجب تعبئت هذا الحقل',
                'name.max' => 'لايمكنك ادخال اقل من 50 حرف',
                'name.unique'=>'الاسم الذي ادخلتة موجود مسبقاً'

            ]);
            $vehicle = new VehicleType();
            $vehicle->name = $request->name;
            $vehicle->is_active = $request->is_active;
            if ($vehicle->save())
                return redirect()->route('list_vehicle')->with(['success' => 'تم اضافة البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }



        public function edit($vehicleId)
        {
            //
            $vehicle = VehicleType::find($vehicleId);
            return view('admin.vehicle.edit')
                ->with('vehicle', $vehicle);
        }


        public function update(Request $request, $vehicleId)
        {
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
        }
        public function toggle($vehicleId)
        {

            $vehicle = VehicleType::find($vehicleId);
            $vehicle->is_active *= -1;
            if ($vehicle->save())
                return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

            return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }

}
