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
                <i class="fas fa-shopping-bag "> All Orders</i>
            </div>
            {{-- <table class="table table-bordered table-striped"> --}}
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Order id</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>Total Products</th>
                            <th>Total Quantity</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                            <th>Actions</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th>Order id</th>
                            <th>Order Status</th>
                            <th>Payment Status</th>
                            <th>Payment Method</th>
                            <th>Total Products</th>
                            <th>Total Quantity</th>
                            <th>Total Price</th>
                            <th>Order Date</th>
                            <th>Actions</th>
                        </tr>
                        </tfoot>
                        <tbody>
                        @foreach($orders as $order)
                            <tr>

                                <td>{{ $order->id }}</td>
                                <td>{{ $order->order_status }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td>{{ $productCounter }}</td>
                                <td>{{ $productsQuantityCounter }}</td>
                                <td>{{ $totalCosts }}</td>
                                <td>{{ $order->created_at->format('d-m-y') }}</td>
                                <td>
                                    <a href= "{{ route('admin.orders.show', $order->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    {!! $orders->links() !!}
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
