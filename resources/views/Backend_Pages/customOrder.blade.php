@extends('Backend_Pages.adminDash')

@section('dashView')
<div class="container-fluid">
    {{-- <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="{{ route('crud.index') }}">
                <i class="fas fa-arrow-left"></i> Product
            </a>
        </li>
        <li class="breadcrumb-item active collaspe">
           Coupon  
        </li>
    </ol>
    @if (\Session::has('success'))
        <div class="alert alert-success">
            <ul>
                <p>{!! \Session::get('success') !!}</p>
            </ul>
        </div>
    @endif --}}
    <div  class="card mb-3 p-3" >
        <div class="table-responsive">    
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Client Name</th>
                        <th>Client Mobile</th>
                        <th>Quantity</th>
                        <th>Message</th>
                        <th>Design</th>
                        <th>Color</th>
                        <th>Wear Type</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Client Name</th>
                        <th>Client Mobile</th>
                        <th>Quantity</th>
                        <th>Message</th>
                        <th>Design</th>
                        <th>Color</th>
                        <th>Wear Type</th>
                    </tr>
                </tfoot>    
                <tbody>
                    @foreach($order as $row)
                    <tr>
                    <td>{{$row->name}} </td>
                    <td>{{$row->mobile}}</td>
                    <td>{{$row->quantity}}</td>
                    <td>{{$row->message}} </td>
                    <td ><img  src="{{$row->design}}" width="32" height="auto"  onclick="style1();"/> </td>
                    <td><div style="height:15px;width:15px;background-color:{{$row->color}}"></div> </td>
                    <td>{{$row->wear_type}} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- <button onclick="style1();">THis is the</button> --}}
            {{-- {!! $data->links() !!} --}}
        </div> 
    </div>
</div> 
<script>
    function style1(){
        showImage('bilder/Almanacka_stor.png');
    }
</script>
@endsection