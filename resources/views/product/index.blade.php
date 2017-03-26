<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Product</title>
    </head>
    <body>

            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->title }}</td>
                    <td>
                        {{-- {!! Form::open([
                            'method' => 'DELETE',
                            'route' => ['administrateur.product', $product->id]
                            ]) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) !!}
                        {!! Form::close() !!} --}}

                        <form action="{{ url('administrateur/product/'.$product->id) }}" method="POST">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}

                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                    </td>
                </tr>

            @endforeach
    </body>
</html>
