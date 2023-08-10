<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Subcategory;
use App\Models\Product;
use Illuminate\Http\Request;
use Auth;
class ProductController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');

    }
    public function create()
    {
        $category = Category::where('status',1)->get();
        $subcategory = Subcategory::all();
        $product = Product::with('category','subcategory')->get();
        return view('Product/create',compact('category','subcategory','product'));
    }

    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'product' => 'required',
            'image' => 'required',
            'shortdescription' => 'required',
            'title' => 'required',
            'heading' => 'required',
            'desciption' => 'required',
            'content' => 'required',
            'pdf_heading' => 'required',
            'pdf_file' => 'required',

        ], [
            'category_id.required' => 'Category Name is required',
            'subcategory_id.required' => 'Subcategory Name is required',
            'product.required' => 'product is required',
            'image.required' => 'Image is required',
            'shortdescription.required' => 'shortdescription is required',
            'title.required' => 'title is required',
            'heading.required' => 'heading is required',
            'desciption.required' => 'Description is required',
            'content.required' => 'content is required',
            'pdf_heading.required' => 'pdf_heading is required',
            'pdf_file.required' => 'pdf_file is required',

        ]);
        $product = new Product();
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        // $selectedSubcategories = $request->input('subcategory_id');


        // $subcategory_ids = $request->subcategory_id;
        // $subcategory_ids = implode(',', $subcategory_ids);
        // $input = $request->except('subcategory_id');
        // $product['subcategory_id'] = $input;



        $product->product = $request->product;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads_images',  $filename);
            $product->image=$filename;
        }
        $product->shortdescription = $request->shortdescription;
        $product->title = $request->title;
        $product->heading = $request->heading;
        $product->desciption = $request->desciption;
        $product->content = $request->content;
        $product->pdf_heading = $request->pdf_heading;

        if($request->hasFile('pdf_file')){
            // $file = $request->pdf_file;
            $file = $request->file('pdf_file');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $product->pdf_file=$filename;

            }
            $product->status = $request->status;





            $product->save();
            return redirect()->route('product.create');

    }
    public function edit($id)
    {
        $data = Product::find($id);
        // dd($d    ata);


        $category = Category::all();
        $subcategory = Subcategory::all();
        $product = Product::all();
        return view('Product/edit',compact('data','category','subcategory','product'));
    }
    public function update(Request $request,$id)
    {
        $validatedData = $request->validate([
            'category_id' => 'required',
            'subcategory_id' => 'required',
            'product' => 'required',
            'image' => 'required',
            'shortdescription' => 'required',
            'title' => 'required',
            'heading' => 'required',
            'desciption' => 'required',
            'content' => 'required',
            'pdf_heading' => 'required',
            'pdf_file' => 'required',

        ], [
            'category_id.required' => 'Category Name is required',
            'subcategory_id.required' => 'Subcategory Name is required',
            'product.required' => 'product is required',
            'image.required' => 'Image is required',
            'shortdescription.required' => 'shortdescription is required',
            'title.required' => 'title is required',
            'heading.required' => 'heading is required',
            'desciption.required' => 'Description is required',
            'content.required' => 'content is required',
            'pdf_heading.required' => 'pdf_heading is required',
            'pdf_file.required' => 'pdf_file is required',

        ]);
        $product = Product::find($id);
        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->product = $request->product;
        if($request->hasFile('image'))
        {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads_images',  $filename);
            $product->image=$filename;
        }
        $product->shortdescription = $request->shortdescription;
        $product->title = $request->title;
        $product->heading = $request->heading;
        $product->desciption = $request->desciption;
        $product->content = $request->content;
        $product->pdf_heading = $request->pdf_heading;

        if($request->hasFile('pdf_file')){
            // $file = $request->pdf_file;
            $file = $request->file('pdf_file');
            $extension =$file->getClientOriginalExtension();
            $filename = time().'.'.$extension;
            $file->move('uploads',$filename);
            $product->pdf_file=$filename;

            }
            $product->status = $request->status;
            $product->save();
            return redirect()->route('product.create');

    }


    public function delete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.create');
    }

//     public function  getsubcategories(Request $request)
// {
//     $category_id = $request->input('category_id');
//     $subcategory_id = Subcategory::where('category_id', $category_id)->get();

//     return response()->json($subcategory_id);
// }

public function getsubcategories(Request $request)
{
    $categoryId = $request->input('category_id');
    $subcategory_id = Subcategory::where('category_id', $categoryId)->get();

    return response()->json($subcategory_id);
}
}
