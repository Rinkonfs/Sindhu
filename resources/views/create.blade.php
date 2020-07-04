@extends('parent')

@section('main')
@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif

<div align="right">
 <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
</div>

<form method="post" action="{{ route('crud.store') }}" enctype="multipart/form-data">

 @csrf
 <div class="form-group">
  <label class="col-md-4 text-right">Enter pname</label>
  <div class="col-md-8">
   <input type="text" name="productName" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">price</label>
  <div class="col-md-8">
   <input type="text" name="productPrice" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group">
  <label class="col-md-4 text-right">Select Profile Image</label>
  <div class="col-md-8">
   <input type="file" name="image" />
  </div>
 </div>
 <br /><br /><br />
 <label class="col-md-4 text-right">color</label>
  <div class="col-md-8">
   <input type="text" name="productColor" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <label class="col-md-4 text-right">size</label>
  <div class="col-md-8">
   <input type="text" name="productSize" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <label class="col-md-4 text-right">desc</label>
  <div class="col-md-8">
   <input type="text" name="description" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <label class="col-md-4 text-right">instock</label>
  <div class="col-md-8">
   <input type="text" name="inStock" class="form-control input-lg" />
  </div>
 </div>
 <br />
 <br />
 <br />
 <div class="form-group text-center">
  <input type="submit" name="add" class="btn btn-primary input-lg" value="Add" />
 </div>

</form>

@endsection