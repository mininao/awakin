<div class="container-fluid topNav {{ isset($onTop) ? 'topNav--onTop' : '' }}">
  <div class="row">
    <div class="topNav-brand brand">
      <a href="{{ url('/') }}">
          awakin
      </a>
    </div>
    <div class="topNav-links">
      @if (Auth::guest())
        <div class="topNav-link">
          <a href="#">Features</a>
        </div>
        <div class="topNav-link">
          <a href="#">Comment ça marche ?</a>
        </div>
        <div class="topNav-link topNav-link--cta">
          <a href="{{ route('login') }}">Connexion</a>
        </div>
      @else

      <div class="topNav-link topNav-link--cta">
        <a href="{{ route('logout') }}"
        onclick="event.preventDefault();document.getElementById('logout-form').submit();">
        Déconnexion</a>
      </div>
      @endif
    </div>
  </div>
</div>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  {{ csrf_field() }}
</form>