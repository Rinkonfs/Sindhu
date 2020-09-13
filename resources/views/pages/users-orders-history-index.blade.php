@include('inc.head')

<body>
<!-- Navbar Starts -->
@include('inc.nav')
<!-- Navbar Ends -->



<section class="py-md-5" style="height:600px;">
    <div class="container">


        <h1>DASHBOARD</h1>

        @if (session('success'))

            <div class="alert alert-success" role="alert">
                <button type="button" class="close" data-dismiss="alert">×</button>
                {{ session('success') }}
            </div>
        @endif


        <div class="row">
            <div class="col-xs-8">
                <div class="list-group" style="border:2px solid red;">
                    <span class="list-group-item" style="background-color: black;color:#7b7d80;font-weight:700;font-size:18px">
                        Menu
                    </span>
                    <a href="{{ route('users.dashboard') }}" class="list-group-item">
                        Account Detail
                    </a>
                    <a href="{{ route('users.orders.index') }}" class="list-group-item">
                        Order History
                    </a>
                    <a href="#" onclick="comingSoon()" class="list-group-item">
                        Support
                    </a>
                    {{-- <a href="#" class="list-group-item">
                        Track Order
                    </a> --}}
                </div>
            </div>
            <div class="col-xs-4 card-body" style="padding: 50px;">
                <h4>Order History</h4>

                @if($orders->count())

                <div id="the1">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-shopping-bag"> All Orders</i>
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
                                        <td>&#x9f3;{{ $totalCosts }}</td>
                                        <td>{{ $order->created_at->format('d-m-y') }}</td>
                                        <td>
                                            <a href= "{{ route('users.orders.show', $order->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    {{-- @endforeach --}}
                                    </tbody>
                                </table>
                                {{-- {!! $data->links() !!} --}}
                            </div>
                        </div>
                    </div>
                </div>

                @else
                    <div class="text-center">


                        <h5>Order list is empty</h5>


                    </div>

                @endif

            </div>
        </div>
    </div>
</section>







<!-- footer Starts-->
@include('inc/footer')
<!-- footer Ends-->

<!-- loader -->
<div id="ftco-loader" class="show fullscreen">
    <svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/>
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/>
    </svg>
</div>
<!-- Java Scripts -->
@include('inc/scripts')


</body>
</html>