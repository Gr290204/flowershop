@extends("/layout")
@section("title")
    Главная
@endsection
@section('main_content')
    <div class="container mt-5">
        <h2 class="mb-4">Редактирование товара</h2>
        <form method="post" action="{{ url('/order/update/' . $order->id) }}">
            @csrf
            <div class="mb-3">
                <label for="client_id" class="form-label">Клиент</label>
                <select name="client_id" id="client_id" class="form-select @error('client_id') is-invalid @enderror">
                    <option value="">Выберите клиента</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}"
                                @if (old('client_id', $order->client_id) == $client->id) selected @endif>
                            {{ $client->client_name }}
                        </option>
                    @endforeach
                </select>
                @error('client_id')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="order_date" class="form-label">Дата заказа</label>
                <input type="date" name="order_date" id="order_date" class="form-control @error('order_date') is-invalid @enderror"
                       value="{{ old('order_date', \Carbon\Carbon::parse($order->order_date)->format('Y-m-d')) }}" />
                @error('order_date')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="order_status" class="form-label">Статус</label>
                <select name="order_status" id="order_status" class="form-select @error('order_status') is-invalid @enderror">
                    <option value="">Выберите статус</option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}"
                                @if (old('order_status', $order->order_status) == $status->id) selected @endif>
                            {{ $status->status_title }}
                        </option>
                    @endforeach
                </select>
                @error('order_status')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="order_price" class="form-label">Цена</label>
                <input type="number" name="order_price" id="order_price" class="form-control @error('order_price') is-invalid @enderror"
                       value="{{ old('order_price', $order->order_price) }}" />
                @error('order_price')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Сохранить изменения</button>
            <a href="{{ url('order') }}" class="btn btn-secondary">Отмена</a>
        </form>
    </div>
@endsection
