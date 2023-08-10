<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    public function create()
    {
        $product = Category::all();
        // dd($product);
        return view('Category/create',compact('product'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            // 'status' => 'required',
            // 'image' => 'required',
            // 'category_id' => 'required'

        ], [
            'name.required' => 'Category Name is required',
            // 'status.required' => 'Status is required',
            // 'image.required' => 'Image is required',

        ]);
       $product = new Category();
       $product -> name = $request->name;
       $product -> status = $request->status;
       $product -> save();
    //    return redirect()-> route('category.create')->with('message', 'Data Added Successfully!');
       return redirect()-> route('category.create');

    }
    // public function index(){

    //     $product = Category::all();
    //     return view('Category/edit',compact('product'));
    // }
    public function edit($id)
    {
        $data = Category::find($id);
        $product = Category::all();

        // dd($product);
        return view('Category/edit',compact('data','product'));
    }

    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            // 'status' => 'required',
            // 'image' => 'required',
            // 'category_id' => 'required'

        ], [
            'name.required' => 'Category Name is required',
            // 'status.required' => 'Status is required',
            // 'image.required' => 'Image is required',

        ]);
        $product = Category::find($id);
        $product -> name = $request->name;
       $product -> status = $request->status;
       $product -> save();
       return redirect()-> route('category.create');
    }
    public function delete($id)
    {
        $data = Category::find($id);
        if ($data->subcategories()->exists()) {
            // Subcategories exist, prevent deletion
            return redirect()->back()->with('message', 'Cannot delete this category because it contains its subcategories');
        }
        $data ->delete();
        return redirect()-> route('category.create');
    }
}
