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
            Edit Product
        </li>
    </ol>       
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="card mb-3"> 
        <div class="card-header">
            <i class="fas fa-gift"></i> Edit Product
        </div>       
        <form class="card-body" method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
         @csrf
         @method('PATCH')
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Product Name</label>
                <div  class="col-sm-10"> 
                    <input type="text" name="productName" value="{{ $data->productName }}" class="form-control input-lg" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Price </label>
                <div class="col-sm-10">
                    <input type="text" name="productPrice" value="{{ $data->productPrice }}" class="form-control input-lg" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Color</label>
                <div class="col-sm-10">
                    <input type="text" name="productColor" value="{{ $data->productColor }}" class="form-control input-lg" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Size</label>
                <div class="col-sm-10">
                    <input type="text" name="productSize" value="{{ $data->productSize }}" class="form-control input-lg" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <input type="text" name="description" value="{{ $data->description }}" class="form-control input-lg" />
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Stock</label>
                <div class="col-sm-10">
                    <input type="text" name="inStock" value="{{ $data->inStock }}" class="form-control input-lg" required/>
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Select Profile Image</label>
                <div class="col-sm-10">
                    <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="300" />
                    <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
                    <input type="file" name="image"/>
                </div>
            </div>   
            <div class="text-center">
                <input  type="submit" name="edit" class="btn btn-primary" value="Edit Product" />
            </div>
        </form>
    </div>

@endsection
