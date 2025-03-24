@extends("/layout")
@section("title")
    Главная
@endsection

@section('main_content')
    <div class="container mt-5">
        <h2 class="mb-4">Добавление заказа</h2>
        <form method="post" action="{{ url('order') }}">
            @csrf
            <div class="mb-3">
                <label for="client_id" class="form-label">Client ID</label>
                <select name="client_id" id="client_id" class="form-select" required>
                    <option value="">Выберите клиента</option>
                    @foreach ($clients as $client)
                        <option value="{{ $client->id }}"
                                @if(old('client_id') == $client->id) selected @endif>
                            {{ $client->client_name }}
                        </option>
                    @endforeach
                </select>
                @error('client_id')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="order_date" class="form-label">Order Date</label>
                <input type="date" name="order_date" id="order_date" class="form-control" value="{{ old('order_date') }}" required />
                @error('order_date')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="order_status" class="form-label">Order Status</label>
                <select name="order_status" id="order_status" class="form-select" required>
                    <option value="">Выберите статус</option>
                    @foreach ($statuses as $status)
                        <option value="{{ $status->id }}"
                                @if(old('order_status') == $status->id) selected @endif>
                            {{ $status->status_title }}
                        </option>
                    @endforeach
                </select>
                @error('order_status')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="order_price" class="form-label">Order Price</label>
                <input type="number" name="order_price" id="order_price" class="form-control" value="{{ old('order_price') }}" required />
                @error('order_price')
                <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Создать заказ</button>
        </form>
    </div>
@endsection
