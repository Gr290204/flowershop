@extends("/layout")
@section("title")
    Главная
@endsection
@section('main_content')
    <div class="container mt-5">
        <h2 class="mb-4">Список заказов</h2>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>Дата</th>
                <th>Цена</th>
                <th>Заказчик</th>
                <th>Статус</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($orders as $order)
                <tr>
                    <td>{{ $order->id }}</td>
                    <td>{{ $order->order_date }}</td>
                    <td>{{ $order->order_price }}</td>
                    <td>{{ $order->client->client_name }}</td>
                    <td>{{ $order->status->status_title }}</td>
                    <td>
                        <a href="{{ url('order/destroy/'.$order->id) }}" class="btn btn-danger btn-sm">Удалить</a>
                        <a href="{{ url('order/edit/'.$order->id) }}" class="btn btn-warning btn-sm">Редактировать</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-between align-items-center">
            {{ $orders->links() }}
            <a href="{{ url('order/create') }}" class="btn btn-success">Создать новый заказ</a>
        </div>
    </div>
@endsection
