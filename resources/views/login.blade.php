@extends("/layout")
@section("title")
    Главная
@endsection
@section('main_content')

    <div class="container mt-5">
        @if($user)
            <h2>Здравствуйте, {{ $user->name }}</h2>
            <a href="{{ url('logout') }}" class="btn btn-danger">Выйти из системы</a>
        @else
            <h2>Вход в систему</h2>
            <form method="post" action="{{ url('auth') }}">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">E-mail</label>
                    <input type="text" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}"/>

                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">Пароль</label>
                    <input type="password" name="password" id="password" class="form-control @error('password') is-invalid @enderror" />

                </div>

                <button type="submit" class="btn btn-primary">Войти</button>
            </form>

        @endif
    </div>
@endsection
