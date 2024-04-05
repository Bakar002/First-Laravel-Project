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
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-10">
            <div class="card border-0 shadow-lg mt-5">
                <div class="card-header bg-dark text-white">
                    <h4>Create Product</h4>
                </div>
                <form action="{{route('products.store')}}" method='post'>
                @csrf
                <div class="card-body">
                    <div class="mb-3">
                        <label class='form-label h5' for="">Name</label>
                        <input value="{{old('name')}}" type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" name="name" id="" placeholder='Name'>
  
                        @error('name')
                    <p class="invalid-feedback">

                        {{
                        $message 
                        }}
                    </p>

                    @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label class='form-label h5' for="">SKU</label>
                 
                        <input value="{{old('sku')}}" type="text" class="@error('sku') is-invalid @enderror form-control form-control-lg" name="sku" id="" placeholder='Sku'>
                 
                        @error('sku')
                    <p class="invalid-feedback">
                        {{
                        $message 
                        }}
                    </p>

                    @enderror
                    </div>
                   
                    <div class="mb-3">
                        <label class='form-label h5' for="">Price</label>
                        <input value="{{old('price')}}" type="text" class="@error('name') is-invalid @enderror form-control form-control-lg" name="price" id="" placeholder='Price'>
                
                        @error('price')
                    <p class="invalid-feedback">
                        {{$message}}
                    </p>

                    @enderror
                    </div>
                  
                    <div class="mb-3">
                        <label class='form-label h5' for="">Description</label>
                        <textarea value="{{old('description')}}" name="description" class='form-control form-control-lg' id="" cols="30" rows="10" placeholder='Product Description'></textarea>
                    </div>
                    <div class="mb-3">
                        <label class='form-label h5' for="">Picture</label>
                        <input type="file" name="image" class='form-control form-control-lg' id="" placeholder='picture'>
                    </div>
                </div>
                <div class="d-grid">
                    <button class='btn btn-primary btn-lg' action='submit'>Submit</button>
                </div>
</form>
            </div>
        </div>
    </div>
</div>
</body>
</html>
