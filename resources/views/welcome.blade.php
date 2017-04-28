@extends('layouts.app') @section('content') @include('layouts.nav',['onTop'=>true])

<div class="container-fluid welcome">
    <div class="topNavSpacer"></div>
    <div class="row welcome-hero">
        <h1 class="brand welcome-hero-brand">
            <img src="/img/awakin.svg" alt="" width="60%">
        </h1>
        <div class="presentation-lg col-lg-10 col-xl-8 hidden-md-down">
            <img src="/img/presentation.svg" alt="">
        </div>
        <div class="presentation-sm justify-content-center hidden-lg-up col-6">
            <div class="presentation-step row">
                <img src="/img/presentation1.svg" alt="">
                <div class="line-separation"></div>
                <p class="presentation-step__description">Commandez sur l’application</p>
            </div>
            <div class="presentation-step row">
                <img src="/img/presentation2.svg" alt="">
                <div class="line-separation"></div>
                <p class="presentation-step__description">La commande arrive à la cafétéria</p>
            </div>
            <div class="presentation-step row">
                <img src="/img/presentation3.svg" alt="">
                <div class="line-separation"></div>
                <p class="presentation-step__description">préparée le temps que vous vous déplaciez
                </p>
            </div>
            <div class="presentation-step row">
                <img src="/img/presentation4.svg" alt="">
                <div class="line-separation"></div>
                <p class="presentation-step__description">Vous arrivez ; c’est prêt !</p>
            </div>
        </div>
        <div class="welcome-hero__cta row text-center">
            <a href="{{ route('logout') }}" class="">Commandez !</a>
        </div>
        <!-- <h1>Le <em>Réveil</em> des étudiants.</h1> -->
    </div>
</div>
@endsection