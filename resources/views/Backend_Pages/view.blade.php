@extends('Backend_Pages.adminDash')
@section('dashView')

<div class="container-fluid">   
   <ol class="breadcrumb">
      <li class="breadcrumb-item">
          <a href="{{ route('crud.index') }}">
              <i class="fas fa-arrow-left"></i> Product
          </a>
          {{-- @foreach($data as $row)
          <a style="float:left;" href= "{{ route ('crud.edit', $row->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i> </a>
          @endforeach
          {!! $data->links() !!} --}}
      </li>
      <li class="breadcrumb-item active">
          View Product
      </li>
  </ol>
  <div class="card mb-3">
      <div class="card-header">
         Viewing {{ $data->productName }}
      </div>
      <div class="card-body row">
            <div class="col-sm-6">
               <img style="width:90%;height:90%;" src="{{ URL::to('/') }}/images/{{ $data->image }}" class="img-fluid img-thumbnail" />
            </div>
            <div class="col-sm-6">
                  <div class="ls-details">
                     <h1 style="text-align: justified;font-family:sans-serif" id="h1">{{ $data->productName }}</h1>
                     <h2 id="h2"style="opacity: 0.5">TK {{ $data->productPrice }}</h2>
                     <p style="text-align: justified;font-family:sans-serif">{{ $data->description }}</p>
                     <div class="row">
                        <div class="col-sm-2">
                           
                           <div style="display:inline-block;float:left;text-transform: uppercase;">
                              Color:{{ $data->productColor }}
                           </div>
                        </div>
                        <div class="col-sm-10">   
                           
                           <div style="display:inline-block;float:left;width:25px;height:25px;border:2px solid grey;background:{{ $data->productColor }};">
                           </div>
                           
                        </div>
                     </div>
                     <h6 style="font-weight: 400">Size: {{ $data->productSize }}</h6>
                  <div style="margin-top:20%">
                     <h5 >Stock: {{ $data->inStock }}</h5>
                  </div>   
                  </div>
            </div>
      </div>  
  </div>
</div>


@endsection





	
	





