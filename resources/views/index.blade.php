@extends('parent')

@section('main')

<div align="right">
<a href="{{route('crud.create')}}" class="btn btn-success btn-sm"> Add </a>

@if($message = Session::get('success'))
<div class = "alert alert-success">
<p> {{$message}}</p>
</div>
@endif

<table class="table table-bordered table-striped">
 <tr>
  <th width="10%">Image</th>
  <th width="15%">product name</th>
  <th width="15%">price</th>
  <th width="15%">color</th>
  <th width="15%">size </th>
  <th width="15%">stock </th>
  <th width="15%">description </th>
 </tr>
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
   <a href= " {{ route ('crud.show', $row->id) }}" class="btn btn-primary">Show </a>
   <a href= " {{ route ('crud.edit', $row->id) }}" class="btn btn-warning">Edit </a>
   <form action = "{{ route ('crud.destroy', $row->id) }}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">DELETE </button>

    
   </td>
  </tr>
 @endforeach
</table>
{!! $data->links() !!}
@endsection
