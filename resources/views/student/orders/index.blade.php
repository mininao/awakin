@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <h1>Mes commandes</h1>
            <ul>
              @foreach ($orders as $order)
                  <li>
                      {{ $order->status }}
                      {{ $order->products }}
                  </li>
              @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection
