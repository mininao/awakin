@extends('layouts.app')

@section('content')

@include('layouts.nav',['onTop'=>true])

<div class="container-fluid welcome">
  <div class="topNavSpacer"></div>
  <div class="welcome-hero">
      <h1 class="brand welcome-hero-brand">awakin</h1>
      <h1>Le <em>Réveil</em> des étudiants.</h1>
  </div>
</div>
@endsection