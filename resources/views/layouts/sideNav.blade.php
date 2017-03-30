@extends('layouts.app')

@section('content')
<div class="sideNav">
    <nav class="sideNav-nav" id="sideNav-nav">
        <h1 class="brand">
            awakin
        </h1>
        <div class="sideNav-cta">
            <a href="/student/orders/create" class="btn btn-primary btn-lg">
                <i class="ion-ios-cart"></i> Commander
            </a>
        </div>
        <div class="sideNav-menu">
            <a href="#">
                <div class="sideNav-menu-item">
                    <div class="sideNav-menu-item-icon">
                        <i class="ion-ios-person"></i>
                    </div>
                    <div class="div sideNav-menu-item-label">
                        Mon Profil
                    </div>
                </div>
            </a>
            <a href="#">
                <div class="sideNav-menu-item">
                    <div class="sideNav-menu-item-icon">
                        <i class="ion-ios-list-box"></i>
                    </div>
                    <div class="div sideNav-menu-item-label">
                        Mes Commandes
                    </div>
                </div>
            </a>
        </div>
    </nav>
    <main class="sideNav-content" id="sideNav-content">
        @include('layouts.titleBar')
        @yield('student-content')
    </main>
</div>
@endsection