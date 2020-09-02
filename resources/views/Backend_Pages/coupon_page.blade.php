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

   this is the coupon


</div>   
@endsection