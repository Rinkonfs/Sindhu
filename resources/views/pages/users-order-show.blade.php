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
                    <a href="#" class="list-group-item">
                        Support
                    </a>
                    <a href="#" class="list-group-item">
                        Track Order
                    </a>
                </div>
            </div>
            <div class="col-xs-4 card-body" style="padding: 50px;">
                <h4>Order Details</h4>
                <div id="">
                    <div class="card mb-3">
                        <div class="card-header">
                            <i class="fas fa-shopping-bag"> All Products</i>
                        </div>
                        {{-- <table class="table table-bordered table-striped"> --}}
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </tr>
                                    </thead>
                                    <tfoot>
                                    <tr>
                                        <th>Product Name</th>
                                        <th>Description</th>
                                        <th>Category</th>
                                        <th>Price</th>
                                        <th>Color</th>
                                        <th>Size</th>
                                        <th>Image</th>
                                        <th>Quantity</th>
                                        <th>Total Price</th>
                                    </tr>
                                    </tfoot>
                                    <tbody>

                                    @foreach($products as $product)
                                        <tr>

                                            <td>{{ $product['product']->productName }}</td>
                                            <td>{{ $product['product']->description }}</td>
                                            <td>{{ $product['product']->category }}</td>
                                            <td>{{ $product['product']->productPrice }}</td>
                                            <td>{{ $product['product']->productColor }}</td>
                                            <td>{{ $product['product']->productSize }}</td>
                                            <td>{{ $product['product']->image }}</td>
                                            <td>{{ $productsQuantity[$loop->index]->product_quantity }}</td>
                                            <td>{{ $productsQuantity[$loop->index]->product_quantity * $product['product']->productPrice }}</td>
                                        </tr>
                                    @endforeach

                                    <td>{{ $totalCosts }}</td>
                                    {{-- @endforeach --}}
                                    </tbody>
                                </table>
                                {{-- {!! $data->links() !!} --}}
                            </div>
                        </div>
                    </div>
                </div>

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