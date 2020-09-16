@include('inc.head')
<body>
<!-- Navbar Starts -->
@include('inc.nav')
<!-- Navbar Ends -->
<div class="hero-wrap hero-bread" style="background-image: url({{url('images/bg_6.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2">Dashboard</span><span style="color:black">> </span><span>Order History</span></p>
                <h1 class="mb-0 bread">Dashboard</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid pt-2">
    @if (session('success'))
        <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{ session('success') }}
        </div>
    @endif
    <div class="row" style="padding: 50px;">
        <div class="col-lg-2 col-sm-12" >
            <div>
                <h4 >My Account</h4>
                <hr>
                <ul class="list-group">
                    <li>
                        <a href="{{ route('users.dashboard') }}"> Account Details </a>
                    </li>
                    <li>
                        <a href="{{ route('users.orders.index') }}"> Order History </a>
                    </li>
                    <li>
                        <a href="#" > Support </a>
                    </li>
                    <li >
                        <a href="#" > Track Order </a>
                    </li>
                <ul>
            </div>        
        </div>
        <div class="col-lg-10 col-sm-12 " style="border-left:1px solid #e5e5e5;padding-left:25px;padding-right:25px;">
            <h4>All Orders</h4>
            <hr>
            @if($orders->count())
                <table class="table table-striped" cellspacing="0">
                    <thead>
                    <tr>
                        <th scope="col">Order id</th>
                        <th scope="col">Order Status</th>
                        <th scope="col">Payment Status</th>
                        {{-- <th>Payment Method</th> --}}
                        <th scope="col">Total Price</th>    
                        <th scope="col">Order Date</th>
                        <th scope="col">Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach($orders as $order)
                    <tr>

                        <td>{{ $order->id }}</td>
                        <td>{{ $order->order_status }}</td>
                        <td>{{ $order->payment_status }}</td>
                        {{-- <td>{{ $order->payment_method }}</td> --}}
                        <td>&#x9f3;{{ $totalCosts }}</td>
                        <td>{{ $order->created_at->format('d-m-y') }}</td>
                        <td>
                            <a href= "{{ route('users.orders.show', $order->id) }}" class="btn btn-info"><i class="fas fa-eye"></i> </a>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                @else
                <div class="text-center">
                    <h5>Order list is empty</h5>
                </div>
            @endif
        </div>
    </div>
</div>


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