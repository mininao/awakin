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
                            'url' => 'administrateur/product/'.$product->id.'/delete'
                            ]) }}
                            {{ Form::submit('Delete') }}
                        {{ Form::close() }}
                    </td>
                    <td>
                        <a href="{{ route('editProduct', ['product' => $product->id]) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
            <hr>
            <a href="{{ route('createProduct') }}">Create</a>

    </body>
</html>
