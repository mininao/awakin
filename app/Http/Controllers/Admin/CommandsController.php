<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Order;
class CommandsController extends Controller
{
    public function index(){

        return view('administrateur.commands.index');

    }
    public function updateOrder(Request $request) {
      $order = Order::find(request('order'));
      $order->status = request('status');
      $order->save();
      return response()->json($order, 201);
    }
}