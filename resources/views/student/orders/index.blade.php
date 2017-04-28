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
                    <a href="/student/orders/{{$order->id}}">
                        <h2 class="item__number">Commande #{{ $order->order_id }}</h2>
                    </a>
                    <h3 class="item__status">{{$order->created_at->diffForHumans()}}</h3>
                    <ul>
                        @foreach ($order->products as $product)
                            <li>
                                <div class="plus">+</div>
                                {{ $product->pivot->quantity }} {{ $product->title }}, {{ $product->price/100 }}€
                            </li>
                        @endforeach

                    </ul>
                </div>
                <hr>
            @endforeach
        </div>
    </div>
</section>
@endsection