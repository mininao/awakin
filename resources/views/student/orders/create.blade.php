@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="">
            <h1>Créer une commande</h1>
            <form action="/student/orders" method="post">
                {{ csrf_field() }}
                <h4>Produits choisis :</h4> <br>
                <input type="text" name="product_ids[]" value="1"><input type="text" name="product_qtys[]" value="1"> <br>
                <input type="text" name="product_ids[]" value="2"><input type="text" name="product_qtys[]" value="1"> <br>
                <input type="text" name="product_ids[]" value="3"><input type="text" name="product_qtys[]" value="1"> <br>
                <input type="text" name="product_ids[]" value="4"><input type="text" name="product_qtys[]" value="1"> <br>
                <input type="submit" value="Passer commande">
            </form>
        </div>
    </div>
</div>
@endsection