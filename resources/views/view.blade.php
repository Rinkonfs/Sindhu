@extends('parent')

@section('main')

<div class="jumbotron text-center">
 <div align="right">
    <a href="{{ route('crud.index') }}" class="btn btn-default">Back</a>
 </div>
 <br />
 <img src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-thumbnail" />
 <h3> productName  - {{ $data->productName }} </h3>
 <h3> productPrice - {{ $data->productPrice }}</h3>
 <h3> productColor - {{ $data->productColor }} </h3>
 <h3> productSize  - {{ $data->productSize }}</h3> 
 <h3> description  - {{ $data->description }} </h3>
 <h3> inStock      - {{ $data->inStock }}</h3>
</div>
@endsection







