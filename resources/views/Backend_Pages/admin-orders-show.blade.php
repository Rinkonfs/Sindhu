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
                <i class="fas fa-shopping-bag "> Order Show</i>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" width="100%" cellspacing="0">
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

                        </tbody>
                    </table>
                </div>
                <div class="text-center"><h5><span class="text-danger">Total Costs:</span> Tk. {{ $totalCosts }}</h5></div>
            </div>
        </div>

            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-shopping-bag "> Order By</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Street</th>
                                <th>Apartment</th>
                                <th>City</th>
                                <th>Post Code</th>
                                <th>Country</th>
                            </tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->phone }}</td>
                                    <td>{{ $user->address->street }}</td>
                                    <td>{{ $user->address->apartment }}</td>
                                    <td>{{ $user->address->city }}</td>
                                    <td>{{ $user->address->post_code }}</td>
                                    <td>{{ $user->address->country }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


            <div class="card mb-3">
                <div class="card-header">
                    <i class="fas fa-shopping-bag "> Order Status</i>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Order Status</th>
                                <th>Payment Status</th>
                                <th>Payment Method</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            <tr>
                                <td>{{ $order->order_status }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>{{ $order->payment_method }}</td>
                                <td><div><button class="btn btn-info btn-sm" data-toggle="modal" data-target="#exampleModal">Update</button></div></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </div>

    <!-- Order Status Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Update Order Status</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('admin.orders.update', $order->id) }}" method="post">
                    @csrf
                    {{ method_field('put') }}

                    <div class="modal-body">

                        <p class="text-danger"><span class="text-dark">Order status:</span> {{ $order->order_status }}</p>
                        <label for="order-status">Change status:</label>
                        <select id="order-status" name="order_status">

                            <option @if( $order->order_status == 'Pending') selected disabled @endif value="Pending">Pending</option>
                            <option @if( $order->order_status == 'Processing') selected disabled @endif value="Processing">Processing</option>
                            <option @if( $order->order_status == 'Delivered') selected disabled @endif value="Delivered">Delivered</option>

                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-info btn-sm">Update changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
