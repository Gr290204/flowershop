<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>609-11</title>
</head>
<body>
<h2>{{$order ? "Список товаров заказа № " . $order->id : 'Неверный ID заказа' }}</h2>
@if($order)
    <table border="1">
        <tr>
            <td></td>
            <td>Наименование</td>
            <td>Цена</td>
            <td>Кол-во</td>
        </tr>
        @foreach ($order->flowers as $flower)
            <tr>
                <td>{{$flower->id}}</td>
                <td>{{$flower->flower_name}}</td>
                <td>{{$flower->flower_price}}</td>
                <td>{{$flower->pivot->count}}</td>
            </tr>
        @endforeach
    </table>
    <h2>Итого: {{$order->order_price}} р.</h2>
@endif
</body>
</html>
