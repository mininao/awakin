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
                        {{ Form::open([
                            'method' => 'DELETE',
                            'url' => 'administrateur/product/'.$product->id
                            ]) }}
                            {{ Form::submit('Delete', ['class' => 'btn btn-danger btn-block']) }}
                        {{ Form::close() }}
                    </td>
                </tr>

            @endforeach
    </body>
</html>
