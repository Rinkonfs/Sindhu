@extends('parent')

@section('main')
            
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div align="right">
                <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
            </div>
            <br />
     <form method="post" action="{{ route('crud.update', $data->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
      <div class="form-group">
       <label class="col-md-4 text-right">Enter Product Name</label>
       <div class="col-md-8">
        <input type="text" name="productName" value="{{ $data->productName }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
        <label class="col-md-4 text-right">Enter Price </label>
        <div class="col-md-8">
         <input type="text" name="productPrice" value="{{ $data->productPrice }}" class="form-control input-lg" />
        </div>
       </div>
       <br />
       <br />
       <br />
       <div class="form-group">
        <label class="col-md-4 text-right">Enter Color</label>
        <div class="col-md-8">
         <input type="text" name="productColor" value="{{ $data->productColor }}" class="form-control input-lg" />
        </div>
       </div>
       <br />
       <br />
       <br />
       <div class="form-group">
        <label class="col-md-4 text-right">Enter Size</label>
        <div class="col-md-8">
         <input type="text" name="productSize" value="{{ $data->productSize }}" class="form-control input-lg" />
        </div>
       </div>
       <br />
       <br />
       <br />
       <div class="form-group">
        <label class="col-md-4 text-right">Enter Description</label>
        <div class="col-md-8">
         <input type="text" name="description" value="{{ $data->description }}" class="form-control input-lg" />
        </div>
       </div>
       <br />
       <br />
       <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Enter Stock</label>
       <div class="col-md-8">
        <input type="text" name="inStock" value="{{ $data->inStock }}" class="form-control input-lg" />
       </div>
      </div>
      <br />
      <br />
      <br />
      <div class="form-group">
       <label class="col-md-4 text-right">Select Profile Image</label>
       <div class="col-md-8">
        <input type="file" name="image" />
              <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" width="100" />
                        <input type="hidden" name="hidden_image" value="{{ $data->image }}" />
       </div>
      </div>
      <br /><br /><br />
      <div class="form-group text-center">
       <input type="submit" name="edit" class="btn btn-primary input-lg" value="edit" />
      </div>
     </form>

@endsection
