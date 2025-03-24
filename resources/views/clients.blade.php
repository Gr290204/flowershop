@extends("/layout")
@section("title")
    Главная
@endsection
@section('main_content')
    <h2>Клиенты:</h2>
    <ul>
        @foreach($clients as $client)
            <li>ID: {{ $client->id }} {{ $client->client_name }} {{ $client->client_surname }} {{ $client->client_adress }} {{ $client->client_number }}</li>
        @endforeach
    </ul>
@endsection


