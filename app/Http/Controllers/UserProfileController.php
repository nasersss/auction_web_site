<?php

namespace App\Http\Controllers;

use App\Models\UserProfile;
use Illuminate\Http\Request;

use App\Models\User;

use Illuminate\Support\Facades\Auth;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::with('profile')->get();
        return view('user.profile')
            ->with('users', $user);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $user = User::with('profile')->find(Auth::id());
        return view('user.profile', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show(UserProfile $userProfile)
    {
        //
        $user = User::with('profile')->where('id',Auth::user()->id)->get();
        return view('user.profile')
            ->with('users', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function edit($userProfile)
    {
        $userInfo = User::find($userProfile);
        // return view('user.edit_profile')
        //     ->with('userInfo', $userInfo);
        return response($userInfo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProfile $userProfile)
    {
        $category = Category::find($categoryId);
        $category->name = $request->name;
        $category->is_active = $request->is_active;
        if ($request->hasFile('image'))
            $category->image = $this->uploadFile($request->file('image'));

        if ($category->save())
            return redirect()->route('list_categories')->with(['success' => 'تم تحديث البيانات بنجاح']);

        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProfile $userProfile)
    {
        //
    }
}
