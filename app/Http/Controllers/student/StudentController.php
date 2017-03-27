<?php

namespace App\Http\Controllers\student;

use App\Order;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display the student dashboard
     *
     * @return \Illuminate\Http\Response
     */
    public function dashboard(Request $request)
    {
      $orders = $request->user()->orders()->latest()->take(3)->get();
      return view('student.dashboard', compact('orders'));
    }
}