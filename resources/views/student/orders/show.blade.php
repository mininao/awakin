@extends('layouts.student')

@section('student-content')
<section class="container order-show">
    <div class="row justify-content-center">
        <div class="">
            <h1>Commande #{{ $order->order_id }}</h1>
            <p>Statut : {{ $order->status }}</p>
            <div class="row justify-content-around text-center">
              <div class="status-icon status-icon--received status-icon--received--inactive">
                <i class="ion-ios-checkmark-circle-outline"></i> Reçue
              </div>
              <div class="status-icon status-icon--in-progress">
                <i class="ion-ios-checkmark-circle-outline"></i> En Préparation
              </div>
              <div class="status-icon status-icon--delivered status-icon--delivered--inactive">
                <i class="ion-ios-checkmark-circle-outline"></i> Livrée
              </div>
            </div>
        </div>
    </div>
</section>
@endsection
