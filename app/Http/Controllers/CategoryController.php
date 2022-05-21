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
        try {

            $categories = Category::orderBy('id', 'desc')->get();
            return view('admin.categry.view_cat')
                ->with('categories', $categories);
                    }
            catch (\Throwable $error) {
                        return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
                    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        try {
            return view('admin.categry.add_categry');  
              }
        catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
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
        } catch (\Throwable $th) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
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
        try {
            //
            $category = Category::find($categoryId);
            return view('admin.categry.edit_categry')
                ->with('category', $category);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
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
        try {

            Validator::validate($request->all(), [
                'name' => ['required', 'min:2', 'max:20'],
            ], [
                'name.required' => 'يجب تعبئت هذا الحقل',
                'name.min' => 'لايمكنك ادخال اقل من 2 احرف',
                'name.max' => 'لايمكنك ادخال اقل من 20 حرف',

            ]);
            //
            $category = Category::find($categoryId);
            $category->name = $request->name;
            $category->is_active = $request->is_active;

            if ($request->hasFile('image')) {
                if (realpath($category->image)) {
                    unlink(realpath($category->image));
                }
                $category->image = $this->uploadFile($request->file('image'));
            }


            if ($category->save())
                return redirect()->route('list_categories')->with(['success' => 'تم تحديث البيانات بنجاح']);

            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
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


    /**
     * @param mixed $categoryId
     *This function convert from is_active=1 to is_active=-1 and reverse
     * @return [boolean]
     */
    public function toggle($categoryId)
    {
        try {

            $category = Category::find($categoryId);
            $category->is_active *= -1;
            if ($category->save())
                return back()->with(['success' => 'تم تحديث البيانات بنجاح']);

            return back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     * @param mixed $file
     *this function used to upload category image
     * @return [string]
     */
    public function uploadFile($file)
    {
        try {


            $destination = public_path() . "/images/";
            $fileName = time() . "_" . $file->getClientOriginalName();
            $file->move($destination, $fileName);
            return $fileName;
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }

    /**
     * This function used to view all category in index page
     * @return [string]
     */
    public function viewCategory()
    {
        try {

            $categories = category::get();
            return view('index')->with('category', $categories);
        } catch (\Throwable $error) {
            return redirect()->back()->with(['error' => 'عذرا هناك خطا لم تتم اضافة البيانات']);
        }
    }
}
