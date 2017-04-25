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
        <h1>Chatroom</h1>
        <div id="app">
            <example></example>
        </div>
        <div id="orderlist">
            <orderlist></orderlist>
        </div>

        <script src="../js/app.js"></script>
    </body>
</html>
