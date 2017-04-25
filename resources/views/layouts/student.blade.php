@extends('layouts.app')

@section('content')
    @include('layouts.sideNav')
    <div class="studentContent" id="mainContent">
        @yield('student-content')
    </div>
@endsection