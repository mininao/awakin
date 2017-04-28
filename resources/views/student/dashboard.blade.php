@extends('layouts.student')

@section('student-content')
<section class="container profile">
    <div class="dashboard-welcome">
        <h2>Bienvenue {{ explode(" ",Auth::user()->name)[0]}} !</h2>
        <p>Etudiant</p>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-6">
            <div class="row">
                <div class="col-12 smallOverview-titleBar">
                    <p class="smallOverview-titleBar-credit">
                        Solde fairpay : <em>{{Auth::user()->balance()}}€</em> <br>
                    </p>
                </div>
                <div class="col-12">
                    <!-- <h3>Solde</h3> -->
                </div>
                <div id="profileChart" class="col-12 smallOverview-chart">

                </div>
                <div class="goFP">
                    <a href="https://bde.esiee.fr/fairpay/" target="_blank" class="btn btn-success">Accéder à fairpay</a>
                </div>
                
                
            </div>
        </div>
        <div class="col-lg-6">
            <h2>Historique
            </h2>
            <div class="dashOrderList">
                @foreach (Auth::user()->orders()->latest()->limit(10)->get() as $order)
                    <div>
                        <a href="/student/orders/{{ $order->id }}">Commande #{{ $order->order_id }}</a>
                    </div>
                
                @endforeach
                <div class="dashOrderList-suite">
                    <a href="/student/orders/" target="_blank" class="btn btn-success">Voire la suite</a>
                </div>
                
            </div>
        </div>
    </div>
</section>
<svg width="0" height="0">
  <defs>
    <linearGradient id="linear" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%"   stop-color="#0094F7" stop-opacity="0.1"/>
      <stop offset="100%" stop-color="#0094F7" stop-opacity="0.7"/>
    </linearGradient>
  </defs>
</svg>
@endsection

@section('scripts')
<script src="{{ asset('js/plotly-latest.min.js') }}"></script>
<script>
var profileData = {
  //x: [1, 2, 3, 4],
  y: [1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,1.28,0.78,0.28,0.28,0.28,0.28,0.28,0.28,0.28,0.28,0.03,0.03],
  type: 'scatter',
  line: {shape: 'spline',smoothing:0.5},
  fill:"tonexty",
  marker: {
    color: '#0094F7',
    line: {
        width: 2.5
    }
}
};

var layout = {
  showLegend:false,
  height:233,
  margin: {
    l: 20,
    r: 20,
    b: 20,
    t: 20,
    pad: 0
  },
};

Plotly.newPlot('profileChart', [profileData], layout, {staticPlot: true});
</script>
@endsection