@include('inc.head')

<body>
<!-- Navbar Starts -->
@include('inc.nav')
<!-- Navbar Ends -->
<div class="hero-wrap hero-bread" style="background-image: url({{url('images/bg_6.jpg')}});">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2">Dashboard</span><span style="color:black">> </span><span>View Order</span></p>
                <h1 class="mb-0 bread">Account Detail</h1>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid pt-2 ">
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
                        <a href="{{ route('users.dashboard') }}" >
                            Account Details
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('users.orders.index') }}">
                            Order History
                        </a>
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
        <div class="col-lg-10 col-sm-12" style="border-left:1px solid #e5e5e5;padding-left:25px;padding-right:25px;">
            <h4> Order Details </h4>
            <hr>
                <table class="table table-dark" >
                    <thead>
                    <tr >
                        <th >Product Name</th>
                        <th >Category</th>
                        <th >Price</th>
                        <th >Color</th>
                        <th >Size</th>
                        <th >Quantity</th>
                        <th >Total Price</th>
                    </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                            <tr>

                                <td>{{ $product['product']->productName }}</td>
                                {{-- <td>{{ $product['product']->description }}</td> --}}
                                <td>{{ $product['product']->category }}</td>
                                <td>&#2547; {{ $product['product']->productPrice }}</td>
                                <td>{{ $product['product']->productColor }}</td>
                                <td>{{ $product['product']->productSize }}</td>
                                {{-- <td>{{ $product['product']->image }}</td> --}}
                                <td>{{ $productsQuantity[$loop->index]->product_quantity }}</td>
                                <td>&#2547; {{ $productsQuantity[$loop->index]->product_quantity * $product['product']->productPrice }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                    <thead>
                        <tr style="background-color: #B2BEB5">
                            <th></th>
                            <th></th>
                            <th> </th>
                            <th> </th>
                            <th> </th>
                            <th> <b><h4>Total</b></h4></th>
                            <th><h4>&#2547; {{ $totalCosts }}</h4></th>
                        </tr>
                        </thead>
                </table>
                    
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