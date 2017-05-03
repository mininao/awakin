@extends('layouts.app') @section('content') @include('layouts.nav',['onTop'=>true])

<div class="container-fluid welcome">
    <div class="topNavSpacer"></div>
    <div class="row welcome-hero">
        <div class="col-12">
            <h1 class="brand welcome-hero-brand">
                <img src="/img/awakin.svg" alt="" width="60%">
            </h1>
            <div class="row justify-content-md-center presentation-lg hidden-md-down">
                <div class="col-lg-10 col-xl-8">
                    <img src="/img/presentation.svg" alt="">
                </div>
            </div>
            <div class="row justify-content-around hidden-lg-up presentation-sm">
                <div class="presentation-step col-md-4 col-sm-6 col-8">
                    <img src="/img/presentation1.svg" alt="">
                    <div class="line-separation"></div>
                    <p class="presentation-step__description">Commandez sur l’application</p>
                </div>
                <div class="presentation-step col-md-4 col-sm-6 col-8">
                    <img src="/img/presentation2.svg" alt="">
                    <div class="line-separation"></div>
                    <p class="presentation-step__description">La commande arrive à la cafétéria</p>
                </div>
                <div class="presentation-step col-md-4 col-sm-6 col-8">
                    <img src="/img/presentation3.svg" alt="">
                    <div class="line-separation"></div>
                    <p class="presentation-step__description">préparée le temps que vous vous déplaciez
                    </p>
                </div>
                <div class="presentation-step col-md-4 col-sm-6 col-8">
                    <img src="/img/presentation4.svg" alt="">
                    <div class="line-separation"></div>
                    <p class="presentation-step__description">Vous arrivez ; c’est prêt !</p>
                </div>
            </div>
            <div class="row">
                <div class="welcome-hero__cta row text-center">
                    <a href="/redirect" class="">Commandez !</a>
                </div>
            </div>
            <!-- <h1>Le <em>Réveil</em> des étudiants.</h1> -->
        </div>
    </div>
</div>
@endsection
