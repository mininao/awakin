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

    public function store(){

        $product = new Product;
        $product->title = request('title');
        $product->description = request('description');
        $product->price = request('price');
        $product->isMenu = false;
        $product->save();

        return redirect('/administrateur/product');

    }

    // public function destroy($id){
    //
    //     $product = Product::find($id);
    //     $product->delete();
    //
    //     return redirect('/')
    //
    // }


}
