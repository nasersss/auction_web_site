<?php

namespace App\Http\Controllers;

use App\Models\Policies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoliciesController extends Controller
{
    //
    public function listPolicies(){
        $policies=Policies::orderBy('id', 'desc')->get();
        return view("admin.policies.list")->with("policies",$policies);
    }
    public function viewPolicies(){
        $policies=Policies::orderBy('id', 'desc')->get();
        return view("commQue")->with("policies",$policies);
    }

    public function addPolicies(){
        return view('admin.policies.add');

    }

    public function store(Request $request){
        $newPolicies = new Policies();
        $newPolicies->police = $request->name;
        $newPolicies->description = $request->des;
        $newPolicies->user_id=Auth::user()->id;
        $newPolicies->is_active = $request->is_active;
        if ($newPolicies->save())
            return redirect()->route('list_policies')->with(['success' => 'تم اضافة البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);


    }

    public function toggle($PoliceId)
    {

        $policies = Policies::find($PoliceId);
        $policies->is_active *= -1;
        if ($policies->save())
            return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

        return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    public function edit($PoliceId)
    {
        //
        $policies = Policies::find($PoliceId);
        return view('admin.Policies.edit')
            ->with('policies', $policies);
    }
    public function update(Request $request, $PoliceId)
    {
        //
        $policies = Policies::find($PoliceId);
        $policies->police = $request->name;
        $policies->description = $request->des;
        $policies->is_active = $request->is_active;

        if ($policies->save())
            return redirect()->route('list_policies')->with(['success' => 'تم تحديث البيانات بنجاح']);

        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }



}
