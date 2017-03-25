@extends('layouts.student')

@section('student-content')
<div class="container">
    <div class="takeOrderCTA">
        <h1>Bienvenue sur awakin</h1>
    </div>
    <div class="row">
        <div class="smallOverview smallOverview--profile">
            <div class="smallOverview-titleBar">
                <div>
                    <h2>Maxence Aïci</h2>
                    <p>Etudiant</p>
                </div>
                <p class="smallOverview-titleBar-credit">
                    12.20 €
                </p>
            </div>
            <h3>Solde</h3>
            <div id="profileChart" class="smallOverview-chart">
                
            </div>
            
        </div>
        <div class="smallOverview smallOverview--orders">
            <h2>historique</h2>
        </div>
    </div>
</div>
<svg width="0" height="0">
  <defs>
    <linearGradient id="linear" x1="0%" y1="0%" x2="100%" y2="0%">
      <stop offset="0%"   stop-color="#FA74A9" stop-opacity="0.1"/>
      <stop offset="100%" stop-color="#FA74A9" stop-opacity="0.7"/>
    </linearGradient>
  </defs>
</svg>
@endsection

@section('scripts')
<script src="{{ asset('js/plotly-latest.min.js') }}"></script>
<script>
var profileData = {
  x: [1, 2, 3, 4],
  y: [1, 7, 4, 12.2],
  type: 'scatter',
  line: {shape: 'spline',smoothing:0.5},
  fill:"tonexty",
  marker: {
    color: '#FA74A9',
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