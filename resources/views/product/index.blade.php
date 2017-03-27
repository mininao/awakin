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
                        <form method="POST" action="{{ route('deleteProduct', $product) }}" accept-charset="UTF-8">
                            {{ csrf_field() }}
                            {{ method_field('DELETE') }}
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                    <td>
                        <a href="{{ route('editProduct', $product) }}">Edit</a>
                    </td>
                </tr>
            @endforeach
            <hr>
            <a href="{{ route('createProduct') }}">Create</a>

    </body>
</html>
