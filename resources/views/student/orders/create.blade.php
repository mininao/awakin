@extends('layouts.student') @section('student-content')
<section class="container order">
    <div class="row justify-content-center">
        <div class="col-md-8 col-lg-6 orders">
            <h1>Créer une commande</h1>
            <i class="ios-cafe"></i>
            <form action="/student/orders" method="post">
                {{ csrf_field() }}
                <h4>Produits choisis :</h4> <br>
                
                <ul class="nav nav-pills justify-content-around" id="myTab">
                    <li role="presentation" class="nav-item active">
                        <a href="#boisson" data-toggle="tab"><i class="ion-ios-cafe"></i></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#sucrerie" data-toggle="tab"><i class="ion-ios-ice-cream"></i></a>
                    </li>
                    <li role="presentation" class="nav-item">
                        <a href="#sale" data-toggle="tab"><i class="ion-ios-pizza"></i></a>
                    </li>
                </ul>
                
                <div class="tab-content order-tab">
                    <div class="tab-pane active" id="boisson" role="tabpanel">
                        <table class="table product-table">
                            <thead class="order-tab__head justify-content-around">
                                <tr>
                                    <th>Produit</th>
                                    <th class="text-center">Prix</th>
                                    <th class="text-center">Quantité</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row" name="product_ids[]">Cappuccino</th>
                                    <td class="text-center">0.60</td>
                                    <td class="text-center">
                                        <button type="button" name="product_qtys[]" class="order-tab__quantity-button order-tab__quantity-button--default">+</button>
                                        <button type="button" name="product_qtys[]" class="order-tab__quantity-button order-tab__quantity-button--active">+</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="sucrerie" role="tabpanel">pane 2</div>
                    <div class="tab-pane" id="sale" role="tabpanel">pane 3</div>
                </div>
                <div class="row justify-content-center">
                    <input type="submit" value="Valider (montant total)">
                </div>
            </form>
        </div>
    </div>
</section>
@endsection