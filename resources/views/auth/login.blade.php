@extends('layouts.app')

@section('content')
<div class="auth">
      <div class="auth-box">
          <h1 class="brand">awakin</h1>
          <div class="panel-body">
              <form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
                  {{ csrf_field() }}

                  <div class="form-group">
                      <div class="col-md-8 col-md-offset-4">

                          <a href="redirect">Google</a>
                      </div>
                  </div>
              </form>
          </div>
    </div>
</div>
@endsection
