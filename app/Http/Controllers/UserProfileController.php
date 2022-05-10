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
        $userInfo = User::find(Auth::user()->id);
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
        $userInfo  = new UserProfile();
        $userInfo->id = $userProfile;
        $userInfo->user_id = $userProfile;
        $userInfo->phone = $request->phone;
        $userInfo->address = $request->address;
        $userInfo->facebook = $request->facebook;
        $userInfo->twitter = $request->twitter;
        $userInfo->instagram = $request->instagram;
        $userInfo->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "defaultImage.png";
        if ($userInfo->save())
            return redirect()->route('profile')->with(['success' => 'تم تحديث البيانات بنجاح']);
//            return response($userInfo);
        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProfile  $userProfile
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $user = User::with('profile')->where('id', Auth::user()->id)->get();
        // $user = User::with('profile')->where('id',$userProfile)->get();
        return view('admin.profile')
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
        $userInfo = UserProfile::find($userProfile);
        $userInfo->user_id = $userProfile;
        $userInfo->phone = $request->phone;
        $userInfo->address = $request->address;
        $userInfo->facebook = $request->facebook;
        $userInfo->twitter = $request->twitter;
        $userInfo->instagram = $request->instagram;
        if ($request->image !=null) {
            if ( realpath($userInfo->image) ) {
                unlink(realpath($userInfo->image));
            }
        }
        if ($request->hasFile('image')) {
            if (realpath($userInfo->image)) {
                unlink(realpath($userInfo->image));
            }
            $userInfo->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "defaultImage.png";
        }
        if ($userInfo->save())
            return redirect()->route('profile')->with(['success' => 'تم تحديث البيانات بنجاح']);
        // return response($userInfo);
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
        $destination = public_path() . "/images/users/";
        $fileName = time() . "_" . $file->getClientOriginalName();
        $file->move($destination, $fileName);
        return $fileName;
    }
}
