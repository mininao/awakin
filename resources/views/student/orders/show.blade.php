@extends('layouts.student') @section('student-content')
<section class="container order-show">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>Commande #{{ $order->order_id }}</h1>
            <p>Statut : <get-status orderid="{{$order->order_id}}"></get-status></p>
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
            <div class="row justify-content-around text-center order-status">
                <div class="status-icon status-icon--received status-icon--received--inactive">
                    <i class="ion-ios-checkmark-circle-outline"></i> Reçue
                </div>
                <div class="status-icon status-icon--in-progress">
                    <i class="ion-ios-checkmark-circle-outline"></i> En Préparation
                </div>
                <div class="status-icon status-icon--delivered status-icon--delivered--inactive">
                    <!-- <i class="ion-ios-checkmark-circle-outline"></i>  -->
                    Livrée
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
