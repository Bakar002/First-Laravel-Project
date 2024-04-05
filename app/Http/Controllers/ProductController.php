<?php

namespace App\Http\Controllers;
use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::orderBy('created_at','DESC')->get();


return view("products.list",['products'=>$products]);
    }
public function create(){

return view("products.create");


}

public function store(Request $request)
{
    $rules = [
        "name" => "required|min:5",
        "price" => "required|numeric",
        "sku" => "required|min:3",
    ];

    if ($request->hasFile('image')) {
        $rules["image"] = 'image';
    }

    $validator = Validator::make($request->all(), $rules);

    if ($validator->fails()) {
        return redirect()->route("products.create")->withInput()->withErrors($validator);
    }

    $product = new Product();
    $product->name = $request->name;
    $product->price = $request->price;
    $product->sku = $request->sku;
    $product->description = $request->description;
    $product->save();

    if ($request->hasFile('image')) {
        $image = $request->file('image');
        $ext = $image->getClientOriginalExtension();
        $imageName = time() . '.' . $ext;
        $image->move(public_path('uploads/products'), $imageName);
        $product->image = $imageName;
        $product->save();
    }

    return redirect()->route("products.index")->with('success', 'Product added successfully.');
}


        public function edit(){

        }
        public function update(Request $request){}


        public function destroy(Request $request){}


}
