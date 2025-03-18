<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создание заказа</title>
    <style>
        .is-invalid { color: red; }
    </style>
</head>
<body>
<h2>Добавление заказа</h2>
<form method="post" action="{{ url('order') }}">
    @csrf
    <label>Client ID</label>
    <select name="client_id" value="{{ old('client_id') }}">
        <option style="...">
        @foreach ($clients as $client)
            <option value="{{ $client->id }}"
                    @if(old('client_id') == $client->id) selected @endif>
                {{ $client->client_name }}
            </option>
        @endforeach
        </option>
    </select>
    @error('client_id')
    <div class="is-invalid">{{ $message }}</div>
    @enderror
    <br>
    <label>Order Date</label>
    <input type="date" name="order_date" value="{{ old('order_date') }}" required />
    @error('order_date')
    <div class="is-invalid">{{ $message }}</div>
    @enderror<br>
    <label>Order Status</label>
    <select name="order_status" value="{{ old('order_status') }}">
        <option style="..."></option>
        @foreach ($statuses as $status)
            <option value="{{ $status->id }}"
                    @if(old('order_status') == $status->id) selected @endif>
                {{ $status->status_title }}
            </option>
        @endforeach
    </select><br>
    <label>Order Price</label>
    <input type="number" name="order_price" value="{{ old('order_price') }}" required />
    @error('order_price')
    <div class="is-invalid">{{ $message }}</div>
    @enderror<br>
    <input type="submit" value="Создать заказ">
</form>
</body>
</html>
