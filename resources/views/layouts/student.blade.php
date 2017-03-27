@extends('layouts.app')

@section('content')
    @include('layouts.nav')
    <div class="studentContent">
        @yield('student-content')
    </div>
@endsection