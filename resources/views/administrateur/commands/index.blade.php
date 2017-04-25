<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Commands</title>
        <link rel="stylesheet" href="../css/app.css">
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>

    </head>
    <body>

        <div id="orderlist">
            <orderlist></orderlist>
        </div>

        <script src="../js/app.js"></script>
    </body>
</html>
