<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Manage Product</title>
    </head>
    <body>

        <hr>
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->title}}</li>
            @endforeach
        </ul>
    </body>
</html>
