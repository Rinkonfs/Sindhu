@extends('Backend_Pages.adminDash')

@section('dashView')

<div class="container-fluid">    
    
    @if($message = Session::get('success'))
    <div class = "alert alert-success">
    <p> {{$message}}</p>
    </div>
    @endif
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-shopping-bag "></i> All Product
            <a href="{{route('crud.create')}}" title="Add Product" class="btn btn-success" style="float:right;border-radius: 8px;"><i class="fas fa-plus"></i></a>
        </div>
        {{-- <table class="table table-bordered table-striped"> --}}
        <div class="card-body">    
            <div class="table-responsive">    
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Description</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Image</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Color</th>
                            <th>Size</th>
                            <th>Description</th>
                            <th>Stock</th>
                            <th>Actions</th>
                        </tr>
                    </tfoot>    
                    {{-- <tr>
                    <th width="10%">Image</th>
                    <th width="15%">Product Name</th>
                    <th width="15%">Price</th>
                    <th width="15%">Color</th>
                    <th width="15%">Size </th>
                    <th width="15%">Description </th>
                    <th width="15%">Stock</th>
                    </tr> --}}
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                        <td><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail" width="75" /></td>
                        <td>{{ $row->productName }}</td>
                        <td>{{ $row->productPrice }}</td>
                        <td>{{ $row->productColor }}</td>
                        <td>{{ $row->productSize }}</td>
                        <td>{{ $row->description }}</td>
                        <td>{{ $row->inStock }}</td>
                        <td>
                        <a href= " {{ route ('crud.show', $row->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> </a>
                        <a href= " {{ route ('crud.edit', $row->id) }}" class="btn btn-warning"><i class="fas fa-pen"></i> </a>
                        <form action = "{{ route ('crud.destroy', $row->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style="margin-top:5px;" type="submit" class="btn btn-danger"><i class="fas fa-trash"></i>&nbsp;</button>
                        </form>    
                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {!! $data->links() !!}
            </div> 
        </div>       
    </div>    
</div> 
{{-- <script 
      $(document).ready(function() {
      $('#dataTable').DataTable();
      } );
    </script>    --}}
@endsection
