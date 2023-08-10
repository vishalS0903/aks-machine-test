<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Subcategory;

class SubcategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    public function create()
    {
        // $category = Category::all();
        $category = Category::where('status',1)->get();

       $data= Subcategory::with('category')->get();
    //    dd($data);
        return view('Subcategory/create',compact('category','data'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            // 'image' => 'required',
            // 'category_id' => 'required'

        ], [
            'name.required' => 'Category Name is required',
            'name.required' => 'Subcategory Name is required',
            // 'status.required' => 'Status is required',
            // 'image.required' => 'Image is required',

        ]);
       $product = new Subcategory();
       $product -> category_id = $request->category_id;
       $product -> name = $request->name;
       $product -> status = $request->status;
       $product -> save();
       return redirect()-> route('subcategory.create')->with('message', 'Data Added Successfully!');

    }
    public function edit($id)
    {
       $data= Subcategory::find($id);
       $product = Category::all();
       $subcategory_data=Subcategory::with('category')->get();


        return view('Subcategory/edit',compact('data','product','subcategory_data'));
    }
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'name' => 'required',
            // 'image' => 'required',
            // 'category_id' => 'required'

        ], [
            'name.required' => 'Category Name is required',
            'name.required' => 'Subcategory Name is required',
            // 'status.required' => 'Status is required',
            // 'image.required' => 'Image is required',

        ]);
        $product = Subcategory::find($id);
        $product -> category_id = $request->category_id;
       $product -> name = $request->name;
       $product -> status = $request->status;
       $product -> save();
       return redirect()-> route('subcategory.create')->with('message', 'Data Updated Successfully!');
    }
    public function delete($id)
    {
        $data = Subcategory::find($id);
        $data ->delete();
        return redirect()-> route('subcategory.create')->with('message', 'Data Deleted Successfully!');
    }
}
