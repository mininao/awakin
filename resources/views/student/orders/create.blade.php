@extends('layouts.student')

@section('student-content')
<div class="container">
    <div class="row">
        <div class="">
            <h1>Créer une commande</h1>
            <form action="/student/orders" method="post">
                {{ csrf_field() }}
                <h4>Produits choisis :</h4> <br>
                ID produit:<input type="text" name="product_ids[]" value="1">
                Quantité : <input type="number" name="product_qtys[]" value="1"> <br>
                ID produit:<input type="text" name="product_ids[]" value="2">
                Quantité : <input type="number" name="product_qtys[]" value="1"> <br>
                ID produit:<input type="text" name="product_ids[]" value="3">
                Quantité : <input type="number" name="product_qtys[]" value="1"> <br>
                ID produit:<input type="text" name="product_ids[]" value="4">
                Quantité : <input type="number" name="product_qtys[]" value="1"> <br>
                <input type="submit" value="Passer commande">
            </form>
        </div>
    </div>
</div>
@endsection