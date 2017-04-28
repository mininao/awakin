@extends('layouts.student') @section('student-content')
<section class="container order-show">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Commande #{{ $order->order_id }}</h1>
            <p>Statut : </p>
            <table class="table product-table">
                <thead class="order-tab__head justify-content-around">
                    <tr>
                        <th>Produit</th>
                        <th class="text-center">Prix</th>
                        <th class="text-center">Quantité</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($order->products as $product)
                    <tr>
                        <th> {{ $product->title }} </th>
                        <td class="text-center">{{ $product->price/100 }} euros</td>
                        <td class="text-center">{{ $product->pivot->quantity }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="order-total text-center">
                total = {{ $order->price()/100 }} euros
            </div>
            <get-status orderid="{{$order->id}}"></get-status>
        </div>
    </div>
</section>
@endsection