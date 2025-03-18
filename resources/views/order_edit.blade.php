<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактировать</title>
    <style>
        .is-invalid { color: red; }
    </style>
</head>
<body>
<h2>Редактирование товара</h2>
<form method="post" action="{{url('/order/update/'. $order->id)}}">
    @csrf
    <label>Клиент</label>
    <select name="client_id" value="{{ old('client_id') }}">
        <option style="..."></option>
        @foreach ($clients as $client)
            <option value="{{ $client->id }}"
                    @if (old('client_id') == $client->id) selected @else @if ($order->client_id == $client->id) selected @endif @endif>
                {{ $client->client_name }}
            </option>
        @endforeach
    </select>
    @error('client_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror<br>
    <label>Order Date</label>
    <input type="date" name="order_date" value="{{ old('order_date', \Carbon\Carbon::parse($order->order_date)->format('Y-m-d')) }}" />
    @error('order_date')
    <div class="is-invalid">{{ $message }}</div>
    @enderror<br>
    <label>Статус</label>
    <select name="order_status" value="{{ old('order_status') }}">
        <option style="..."></option>
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}"
                    @if (old('order_status') == $status->id) selected @else @if ($order->order_status == $status->id) selected @endif @endif>
                {{ $status->status_title }}
            </option>
        @endforeach
    </select>
    @error('client_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror<br>
    <label>Цена</label>
    <input type="number" name="order_price" value="{{ old('order_price', $order->order_price) }}" />
    @error('order_price')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <input type="submit"/>
</form>
</body>
</html>
