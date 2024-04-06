<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Simple Laravel Crud</title>
    <style>
        /* Custom styles to adjust the width */

    </style>
</head>
<body>
<div class="bg-dark p-4 m-0 text-center">
    <h3 class="text-white">Simple Laravel Crud</h3>
</div>
<div class="container overflow-hidden">
  <!-- Your content here -->
  <div class="row justify-content-center mt-4">
<div class="col-md-10 d-flex justify-content-end">
<a href="{{ route('products.create') }}" class="btn btn-dark">Back</a>
</div>
</div>
    <div class="row d-flex justify-content-center">
        @if(Session::has("success"))
        <div class="col-md-10">
            <div class=" mt-2 alert alert-success">
{{Session::get('success')}}</div>
        </div>
        @endif
        <div class="col-md-10">
            <div class="card border-0 shadow-lg mt-5">
                <div class="card-header bg-dark text-white">
                    <h4> Products</h4>
                </div>
              <div class="card-body">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Image</th>

                        <th>NAME</th>

                        <th>SKU</th>
                        <th>PRICE</th>
                        <th>ACTION</th>

                    </tr>
                    @if($products->isNotEmpty())
@foreach($products as $product)
<tr>
    <td>{{$product->id}}</td>
    <td>
        @if($product->image !="")
        <img width='50' src="{{asset('uploads/products/'.$product->image)}}" alt="helo">
        @endif
    </td>
    <td>{{$product->name}}</td>
    <td>{{$product->sku}}</td>
    <td>${{$product->price}}</td>
    <td>{{\Carbon\Carbon::parse($product->created_at)->format('d M,Y')}}</td>
   
    <td>
<a href="{{route("products.edit",$product->id)}}" class="btn btn-dark">Edit</a>
<a href="" class="btn btn-danger">Delete</a>
</td>
</tr>
@endforeach 
                    @endif



                </table>
              </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
