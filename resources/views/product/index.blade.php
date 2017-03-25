<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Product</title>
    </head>
    <body>

        @include('product.addForm')

        <hr>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->title}}</li>
            @endforeach
        </ul>
    </body>
</html>
