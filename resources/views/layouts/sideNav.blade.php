@extends('layouts.app')

@section('content')
<div class="sideNav">
    <div class="sideNav-nav" id="sideNav-nav">
        <h1 href="/" class="brand">
            awakin
        </h1>
        <div class="sideNav-cta">
            <a href="">
                
            </a>
        </div>
    </div>
    <div class="sideNav-content" id="sideNav-content">
        @yield('student-content')
    </div>
</div>
@endsection