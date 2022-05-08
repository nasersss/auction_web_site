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
    public function create($userProfile)
    {
        //
        $userInfo = User::find($userProfile);
        return view('admin.add_profile')
            ->with('userInfo', $userInfo);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $userProfile)
    {
        $user = User::find($userProfile);
        $user->name = $request->name;
        $user->save();
        $userInfo = new UserProfile();
        $userInfo->user_id = $userProfile;
        $userInfo->phone = $request->phone;
        $userInfo->address = $request->address;
        $userInfo->facebook = $request->facebook;
        $userInfo->twitter = $request->twitter;
        $userInfo->instagram = $request->instagram;
        $userInfo->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "defaultImage.png";
        if ($userInfo->save())
            // return redirect()->route('list_categories')->with(['success' => 'تم تحديث البيانات بنجاح']);
            return response($userInfo);
        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show($userProfile)
    {
        //
        $user = User::with('profile')->where('id', Auth::user()->id)->get();
        // $user = User::with('profile')->where('id',$userProfile)->get();
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
        $userInfo = User::with('profile')->find($userProfile);
        return view('admin.edit_profile')
            ->with('userInfo', $userInfo);
        // return response($userInfo);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $userProfile)
    {
        $user = User::find($userProfile);
        $user->name = $request->name;
        $user->save();
        $userInfo = UserProfile::where('user_id',$userProfile)->get();
        $userInfo->user_id = $userProfile;
        $userInfo->phone = $request->phone;
        $userInfo->address = $request->address;
        $userInfo->facebook = $request->facebook;
        $userInfo->twitter = $request->twitter;
        $userInfo->instagram = $request->instagram;
        $userInfo->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "defaultImage.png";
        if ($userInfo->save())
            // return redirect()->route('list_categories')->with(['success' => 'تم تحديث البيانات بنجاح']);
            return response($userInfo);
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

    public function uploadFile($file)
    {
        $destination = public_path() . "/images/";
        $fileName = time() . "_" . $file->getClientOriginalName();
        $file->move($destination, $fileName);
        return $fileName;
    }
}
