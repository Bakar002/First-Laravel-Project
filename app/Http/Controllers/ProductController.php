<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    //
    public function index(){

    }
public function create(){

return view("products.create");


}

        public function store(Request $request){
            $rules=[
 "name"=> "required|min:5",
 "price"=> "required|numeric",
 "sku"=> "required|min:3",

            ];

$validator=Validator::make($request->all(), $rules);
if ($validator->fails()) {
return redirect()->route("products.create")->withInput()->withErrors($validator );
    # code...
}


        }

        public function edit(){

        }
        public function update(Request $request){}


        public function destroy(Request $request){}


}
