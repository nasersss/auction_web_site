<?php

namespace App\Http\Controllers;

use App\Models\Policies;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PoliciesController extends Controller
{
    //
    /** this function show list of policies that admin inserted
     * @return [response]
     */
    public function listPolicies()
    {
        try {


            $policies = Policies::orderBy('id', 'desc')->get();
            return view("admin.policies.list")->with("policies", $policies);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }
    /**
     * this function will show all policies in the page
     * @return [string]
     */
    public function viewPolicies()
    {
        try {

            $policies = Policies::orderBy('id', 'desc')->get();
            return view("commQue")->with("policies", $policies);
        } catch (\Throwable $error) {
            throw $error->getMessage();
        }
    }



    /**
     * this function used to show page that will add policies from through it
     * @return [type]
     */
    public function addPolicies()
    {
        try {


            return view('admin.policies.add');
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     * @param Request $request
     *this function used to insert data into policies table
     * @return [string]
     */
    public function store(Request $request)
    {
        try {



            $newPolicies = new Policies();
            $newPolicies->police = $request->name;
            $newPolicies->description = $request->des;
            $newPolicies->user_id = Auth::user()->id;
            $newPolicies->is_active = $request->is_active;
            if ($newPolicies->save())
                return redirect()->route('list_policies')->with(['success' => 'تم اضافة البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }



    /**
     * @param mixed $PoliceId
     * this function used convert is_active from 1 to -1 and reverse
     * @return [boolean]
     */
    public function toggle($PoliceId)
    {
        try {
            $policies = Policies::find($PoliceId);
            $policies->is_active *= -1;
            if ($policies->save())
                return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

            return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     * @param mixed $PoliceId
     *this function will show page that will update data from through it
     * @return [page]
     */
    public function edit($PoliceId)
    {
        //
        try {


            $policies = Policies::find($PoliceId);
            return view('admin.Policies.edit')
                ->with('policies', $policies);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }



    /**
     * @param Request $request
     * @param mixed $PoliceId
     *this function used to update function in table policies
     * @return [string]
     */
    public function update(Request $request, $PoliceId)
    {

        //
        try {

            $policies = Policies::find($PoliceId);
            $policies->police = $request->name;
            $policies->description = $request->des;
            $policies->is_active = $request->is_active;

            if ($policies->save())
                return redirect()->route('list_policies')->with(['success' => 'تم تحديث البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }
}
