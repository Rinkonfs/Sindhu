<?php

namespace App\Http\Controllers\Order;

use App\Crud;
use App\User;
use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    public function index()
    {
        $totalCosts = 0;
        $productCounter = 0;
        $productsQuantityCounter = 0;

        $orders = Order::latest()->paginate(10);

        $productsId = json_decode($orders[0]->product_id);
        $productsQuantity = json_decode($orders[0]->product_quantity);


        foreach ($productsId as $index => $productId )
        {
            $product = Crud::find($productId->product_id);
            $productCounter++;
            $productsQuantityCounter += $productsQuantity[$index]->product_quantity;
            $totalCosts += ( $product->productPrice * $productsQuantity[$index]->product_quantity );
        }


        return view('Backend_Pages.admin-orders-index', compact('orders', 'productCounter', 'productsQuantityCounter', 'totalCosts'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Order $order)
    {
        $user = User::find($order->user_id);

        $productsId = json_decode($order->product_id);
        $productsQuantity = json_decode($order->product_quantity);

        $totalCosts = 0;

        foreach ($productsId as $index => $productId)
        {
            $product = Crud::find($productId->product_id);
            $products[] =[ 'product' => $product ];
            $totalCosts += $product->productPrice * $productsQuantity[$index]->product_quantity;
        }

        return view('Backend_Pages.admin-orders-show', compact('products', 'productsQuantity', 'totalCosts', 'user', 'order'));
    }


    public function edit(Order $order)
    {
        //
    }


    public function update(Request $request, Order $order)
    {
        $order->order_status = $request->order_status;
        $order->save();

        return redirect()->back()->with('success', 'Order status has been updated successfully!');
    }


    public function destroy(Order $order)
    {
        //
    }
}
