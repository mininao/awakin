{{ Form::open([
    'method' => 'PUT',
    'route' => ['updateProduct', $product]
    ]) }}
{{-- {{ Form::model($product, [
    'method' => 'PUT',
    'route' => 'indexDashboardElior'
    ])}} --}}
    {{ Form::label('title', 'Nom du produit :') }}
    {{ Form::text('title', '', ['placeholder' => 'Nom']) }}
    {{ Form::label('description', 'Description :') }}
    {{ Form::textarea('description', '', ['placeholder' => 'Description']) }}
    {{ Form::label('price', 'Prix :') }}
    {{ Form::text('price', '', ['placeholder' => 'Prix']) }}
    {{ Form::submit('Sauvegarder les changements') }}
{{ Form::close() }}
