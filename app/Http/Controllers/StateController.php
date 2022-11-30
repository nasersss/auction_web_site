<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StateController extends Controller
{
    //

    /**
     * this function used to show page that will insert data from thought it
     * @return [type]
     */
    public function create()
    {
        try {

            return view("admin.address.state.add");
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    public function listState()
    {
        try {

        $state = State::get();
        return view("admin.address.state.list")->with("state", $state);
    } catch (\Throwable $error) {
        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }
    }

    /**
     * @param Request $request
     * this function used to insert data to state table
     * @return [string]
     */
    public function store(Request $request)
    {
        try {

            //
            Validator::validate($request->all(), [
                'name' => ['required', 'min:1', 'max:50'],
            ], [
                'name.required' => 'يجب تعبئت هذا الحقل',
                'name.max' => 'لايمكنك ادخال اقل من 50 حرف',
                'name.min' => 'يجب ان يكون الحقل المدخل اكثر من حرف واحد'

            ]);
            $state = new State();
            $state->name = $request->name;
            $state->is_active = $request->is_active;
            if ($state->save())
                return redirect()->route('list_state')->with(['success' => 'تم اضافة البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }



    /**
     * @param mixed $stateId
     * this function used to show page that will update data from through it
     * @return [type]
     */
    public function edit($stateId)
    {
        try {

            $state = State::find($stateId);
            return view('admin.address.state.edit')->with('state', $state);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }


    /**
     * @param Request $request
     * @param mixed $stateId
     *
     * This function used to update data in state table
     *
     * @return [string]
     */
    public function update(Request $request, $stateId)
    {
        try {

            //
            Validator::validate($request->all(), [
                'name' => ['required', 'min:1', 'max:50'],
            ], [
                'name.required' => 'يجب تعبئت هذا الحقل',
                'name.max' => 'لايمكنك ادخال اقل من 50 حرف',
                'name.min' => 'يجب ان يكون الحقل المدخل اكثر من حرف واحد'

            ]);
            $state = State::find($stateId);
            $state->name = $request->name;
            $state->is_active = $request->is_active;
            if ($state->save())
                return redirect()->route('list_state')->with(['success' => 'تم تحديث البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);

        } catch (\Exception $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }


    /**
     * @param mixed $stateId
     *this function used to convert is-active =1 to -1 and reverse
     * @return [boolean]
     */
    public function toggle($stateId)
    {
        try {

            $state = State::find($stateId);
            $state->is_active *= -1;
            if ($state->save())
                return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

            return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }
}
