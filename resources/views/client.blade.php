<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Клиенты</title>
</head>
<body>
<h2>{{ $client ? "Список заказов клиента: " . $client->client_name : 'Неверный ID категории' }}</h2>
@if($client)
    <table border="1">
        <tr>
            <th>id</th>
            <th>Дата заказа</th>
            <th>Цена</th>
        </tr>
        @foreach ($client->orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->order_date }}</td>
                <td>{{ $order->order_price }}</td>

            </tr>
        @endforeach
    </table>
@endif
</body>
</html>
