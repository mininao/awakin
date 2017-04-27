@extends('layouts.student')

@section('student-content')
<section class="container profile">
    <div class="takeOrderCTA">

    </div>
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="row">
                <div class="col-12 smallOverview-titleBar">
                    <div>
                        <h2>Maxence Aïci</h2>
                        <p>Etudiant</p>
                    </div>
                    <p class="smallOverview-titleBar-credit">
                        12.20 €
                    </p>
                </div>
                <div class="col-12">
                    <h3>Solde</h3>
                </div>
                <div id="profileChart" class="col-12 smallOverview-chart">

                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <h2>Historique</h2>
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
  x: [1, 2, 3, 4],
  y: [1, 7, 4, 12.2],
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
