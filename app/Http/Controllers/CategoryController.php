<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $categories = Category::orderBy('id', 'desc')->get();
        return view('admin.view_cat')
            ->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.add_categry');
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
        Validator::validate($request->all(), [
            'name' => ['required', 'min:2', 'max:20'],
        ], [
            'name.required' => 'يجب تعبئت هذا الحقل',
            'name.min' => 'لايمكنك ادخال اقل من 2 احرف',
            'name.max' => 'لايمكنك ادخال اقل من 20 حرف',

        ]);
        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->is_active = $request->is_active;
        $newCategory->image = $request->hasFile('image') ? $this->uploadFile($request->file('image')) : "defaultCategoryegory.png";
        if ($newCategory->save())
            return redirect()->route('list_categories')->with(['success' => 'تم اضافة البيانات بنجاح']);

        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($categoryId)
    {
        //
        $category = Category::find($categoryId);
        return view('admin.edit_categry')
            ->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $categoryId)
    {
        //
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
     * @param  \App\Models\category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($category)
    {
        //
    }


    public function toggle($categoryId)
    {

        $category = Category::find($categoryId);
        $category->is_active *= -1;
        if ($category->save())
            return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

        return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
    }

    public function uploadFile($file)
    {
        $destination = public_path() . "/images/";
        $fileName = time() . "_" . $file->getClientOriginalName();
        $file->move($destination, $fileName);
        return $fileName;
    }
}
