<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Admin;
use App\Models\State;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StateController extends Controller
{
    //

    public function create(){
    return view("admin.address.state.add");
    }

    public function listState(){
        $state=State::get();
        return view("admin.address.state.list")->with("state",$state);

        }

    public function store(Request $request)
    {
        //
        Validator::validate($request->all(), [
            'name' => ['required', 'min:2', 'max:50'],
        ], [
            'name.required' => 'يجب تعبئت هذا الحقل',
            'name.max' => 'لايمكنك ادخال اقل من 50 حرف',

        ]);
        $state = new State();
        $state->name = $request->name;
        $state->is_active = $request->is_active;
        if ($state->save())
            return redirect()->route('list_status')->with(['success' => 'تم اضافة البيانات بنجاح']);

        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }



    public function edit($stateId)
    {
        //
        $state = State::find($stateId);
        return view('admin.address.state.edit')
            ->with('state', $state);
    }


    public function update(Request $request, $stateId)
    {
        //
        $state = State::find($stateId);
        $state->name = $request->name;
        $state->is_active = $request->is_active;
        if ($state->save())
            return redirect()->route('list_state')->with(['success' => 'تم تحديث البيانات بنجاح']);

        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }
    public function toggle($stateId)
    {

        $state = State::find($stateId);
        $state->is_active *= -1;
        if ($state->save())
            return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

        return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

}
