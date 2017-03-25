<?php

namespace App\Http\Controllers\administrateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{

    public function index(){

        $products = Product::all();

        return view('product.index', compact('products'));
    }

    public function create(){

        return view('product.create');

    }


}
