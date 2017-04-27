@extends('layouts.app')

@section('content')
<div class="sideNav">
    <nav class="sideNav-nav" id="sideNav-nav">
        <a href="/student/">
            <h1 class="brand">
                awakin
            </h1>
        </a>
        <div class="sideNav-cta">
            <a href="/student/orders/create" class="btn btn-primary btn-lg">
                <i class="ion-ios-cart"></i> Commander
            </a>
        </div>
        <div class="sideNav-menu">
            <a href="/student/">
                <div class="sideNav-menu-item">
                    <div class="sideNav-menu-item-icon">
                        <i class="ion-ios-person"></i>
                    </div>
                    <div class="div sideNav-menu-item-label">
                        Mon Profil
                    </div>
                </div>
            </a>
            <a href="/student/orders">
                <div class="sideNav-menu-item">
                    <div class="sideNav-menu-item-icon">
                        <i class="ion-ios-list-box"></i>
                    </div>
                    <div class="div sideNav-menu-item-label">
                        Mes Commandes
                    </div>
                </div>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                <div class="sideNav-menu-item">
                    <div class="sideNav-menu-item-icon">
                        <i class="ion-ios-close-circle"></i>
                    </div>
                    <div class="div sideNav-menu-item-label">
                        Déconnexion
                    </div>
                </div>
            </a>
        </div>
    </nav>
    <main class="sideNav-content" id="sideNav-content">
        <div class="sideNav-content-mobileBar">
            <a href="#" class="sideNav-toggle">
                <div class="sideNav-content-mobileBar-menuIcon">
                    <i class="ion-ios-menu"></i>
                </div>
            </a>
            <a href="/student/">
                <h1 class="brand">
                    awakin
                </h1>
            </a>
        </div>
        @yield('student-content')
    </main>
</div>

<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>

@endsection
