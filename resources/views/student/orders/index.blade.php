@extends('layouts.student')

@section('student-content')
<section class="container order-list">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6">
            <h1>Mes commandes</h1>
            <a href="/student/orders/create">Passer Commande</a>
            <hr>
            @foreach ($orders as $order)
                <div class="order-list__item">
                    <h2 class="item__number">Commande #{{ $order->order_id }}</h2>
                    <h3 class="item__status">Status : {{ $order->status }}</h3>
                    <h3 class="item__products">Produits :</h3>
                    <ul>
                        @foreach ($order->products as $product)
                            <li>{{ $product->pivot->quantity }}x {{ $product->title }} à {{ $product->price/100 }} euros</li>
                        @endforeach

                    </ul>
                    <h3>Date : {{$order->created_at}}</h3>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</section>
@endsection