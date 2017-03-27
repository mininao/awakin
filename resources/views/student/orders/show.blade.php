@extends('layouts.student')

@section('student-content')
<div class="container">
    <div class="row">
        <div class="">
            <h1>Commande #{{ $order->order_id }}</h1>
            <p>Statut : {{ $order->status }}</p>
        </div>
    </div>
</div>
@endsection