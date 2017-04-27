<?php

namespace App\Http\Controllers\student;

use App\Order;
use App\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Ferus\FairPayApi\FairPay;
use Ferus\FairPayApi\Exception\ApiErrorException;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
      $orders = $request->user()->orders()->latest()->get();
      return view('student.orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('student.orders.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Create an order id and calculate total price
        $order_id = $request->user()->id.crc32(date("Yzis")).rand(0,999);
        $price = 0;
        foreach (request('orderedProducts') as $product_id => $product) {
            $price += Product::find($product_id)->price * $product['quantity'];  
        }
        
        // Register the order in fairpay
        $fairpay = new FairPay(env('FAIRPAY_KEY'));
        if(env('FAIRPAY_DEBIT_FOR_REAL')) { // Only if enabled in .env
          try {
            $fairpay->cash($request->user()->fairpay_id, $price/100, "Commande Awakin #".$order_id);
          } catch(ApiErrorException $e){
            return response()->json($e, 402);
          }
        }
        
        // Create the order
        $order = new Order();
        $order->status = "received";
        $order->user_id = $request->user()->id;
        $order->order_id = $order_id;
        $order->save();
        $order->products()->sync(request('orderedProducts'));
        return response()->json($order, 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        return view('student.orders.show', compact('order'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
    /**
     * Display a listing of the available products.
     *
     * @return \Illuminate\Http\Response
     */
    public function listProducts(Request $request)
    {
      $products = Product::all();
      return response()->json($products, 201);
    }
}