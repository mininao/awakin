@extends('layouts.student')

@section('student-content')
<div class="container">
    <div class="row">
        <div class="">
            <h1>Mes commandes</h1>
            <a href="/student/orders/create">Passer Commande</a>
            <hr>
            @foreach ($orders as $order)
                <div>
                    <h2>Commande #{{ $order->order_id }}</h2>
                    <h3>Status : {{ $order->status }}</h3>
                    <h3>Produits :</h3>
                    <ul>
                        @foreach ($order->products as $product)
                            <li>{{ $product->pivot->quantity }}x {{ $product->title }} à {{ $product->price/100 }} euros</li>
                        @endforeach
                    </ul>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</div>
@endsection