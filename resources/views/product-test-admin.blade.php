@extends('layouts.app')

@section('content')

    <div class="hero-wrap hero-bread" style="background-image: url('images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Shop</span></p>
                    <h1 class="mb-0 bread">Add Product</h1>
                </div>
            </div>

            <div>
                <form enctype="multipart/form-data" method="post" action="test-add-product">
                    @csrf

                    <div class="form-group">
                        <label>Product name</label>
                        <input name="name" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Short description</label>
                        <textarea name="short_description" class="form-control" type="text" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Long description</label>
                        <textarea name="full_description" class="form-control" type="text" rows="3"></textarea>
                    </div>

                    <div class="form-group">
                        <label>Product price</label>
                        <input name="price" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Product Color</label>
                        <input name="color" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Product size</label>
                        <input name="size" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Product stock</label>
                        <input type="checkbox" name="stock" value="1">
                    </div>

                    <div class="form-group">
                        <label>Product images</label>
                        <input required type="file" class="form-control" name="images">
                    </div>

                    <button type="submit" class="btn btn-sm btn-info">Submit</button>

                </form>
            </div>
        </div>
    </div>

@endsection
