<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2>Клиенты:</h2>
<ul>
    @foreach($status as $state)
        <li>ID: {{ $state->id }} {{ $state->status_title }}</li>
    @endforeach
</ul>

</body>
</html>
