<?php

namespace App\Http\Controllers\administrateur;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{

    public function __construct(){

        $this->middleware('auth');

    }

    public function index(){

        $products = Product::all();

        return view('administrateur.product.index', compact('products'));
    }

    public function create(){

        return view('administrateur.product.create');

    }

    public function store(Request $request){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product = new Product;
        $product->title = request('title');
        $product->description = request('description');
        $product->price = request('price');
        $product->isMenu = false;
        $product->save();

        return redirect('/administrateur/product');

    }

    public function destroy($id){

        $product = Product::find($id);
        $product->delete();

        return redirect('/administrateur/product');

    }

    public function edit($id){

        $product = Product::find($id);

        return view('administrateur.product.edit', compact('product'));

    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
        ]);

        $product = Product::find($id);
        $product->title = request('title');
        $product->description = request('description');
        $product->price = request('price');
        $product->isMenu = false;
        $product->save();

        return redirect('/administrateur/product');

    }
}
