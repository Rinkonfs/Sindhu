@extends('Backend_Pages.adminDash')
@section('dashView')

<div class="container-fluid">    
    
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('crud.index') }}">
                <i class="fas fa-arrow-left"></i> Product
            </a>
        </li>
        <li class="breadcrumb-item active">
            Add Product
        </li>
    </ol>

    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
   <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-gift"></i> Add Product
        </div>
        <form class="card-body" method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">
         @csrf
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Product Name </label>
                <div  class="col-sm-10">    
                    <input type="text" name="productName" class="form-control input-lg" required />
                </div>
            </div>
            <div class="form-group row">
                <label  class="col-sm-2 col-form-label">Price</label>
                <div class="col-sm-10">
                    <input type="number" name="productPrice" class="form-control input-lg" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Color</label>
                <div  class="col-sm-10">  
                    <input type="text" name="productColor" class="form-control input-lg" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Size</label>
                <div  class="col-sm-8">  
                    <input type="text" name="productSize" class="form-control input-lg" required />
                </div>
                <div  class="col-sm-2">  
                    <select type="text" name="inStock" class="form-control input-lg">
                        <option value="1">For children</option>
                        <option value="0">For Adult</option> 
                    </select>
                </div>  
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Product Category </label>
                <div  class="col-sm-10">    
                    <select type="text" name="category" class="form-control input-lg" required>
                        <option selected disabled>Select Category</option>
                        <option value="Hand Loom">Hand Loom</option>
                        <option value="Sharee">Saree</option>
                        <option value="Sharee">3 Piece</option>
                        <option value="Sharee">Silk Saree</option>
                        <option value="Sharee">Taant Saree</option> 
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Product Desctiption</label>
                <div  class="col-sm-10">  
                    <textarea type="text" name="description" class="form-control input-lg" required></textarea>
                </div>      
            </div>    
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Stock</label>
                <div  class="col-sm-10">
                    <select type="text" name="inStock" class="form-control input-lg" required>
                        <option value="1">In Stock</option>
                        <option value="0">Out Of Stock</option> 
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Product Image</label>
                <div  class="col-sm-10">  
                    <input type="file" name="image" accept="image/x-png,image/gif,image/jpeg" required/>
                </div>
            </div>
            <div class="text-center">
                <input type="submit" name="add" class="btn btn-primary" value="Add Product" />
            </div>
        </form>
    </div>
</div>
@endsection