<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-11</title>
</head>
<body>
<h2>Список заказов</h2>
<table border="1">
    <thead>
    <tr>
        <td>id</td>
        <td>Дата</td>
        <td>Цена</td>
        <td>Заказчик</td>

    </tr>
    </thead>
    @foreach ($orders as $order)
        <tr>
            <td>{{ $order->id }}</td>
            <td>{{ $order->order_date }}</td>
            <td>{{ $order->order_price }}</td>
            <td>{{ $order->client->client_name }}</td>

        </tr>
    @endforeach
</table>
</body>
</html>
