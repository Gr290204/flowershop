<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield("title")</title>
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="/" class="nav-link px-2 text-white">Главная</a></li>
                <li><a href="/clients" class="nav-link px-2 text-white">Клиенты</a></li>
                <li>
                    <div class="dropdown">
                        <button type="button" class="btn btn-dark  dropdown-toggle" data-bs-toggle="dropdown">
                            Заказы
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/orders">Список заказов</a></li>
                            <li><a class="dropdown-item" href="/order/create">Создать заказ</a></li>
                        </ul>
                    </div>
                </li>
            </ul>
            <div class="text-end">
                <a href="/login" class="btn btn-outline-light me-2">Login</a>
                <button type="button" class="btn btn-warning">Sign-up</button>
            </div>
        </div>
    </div>
</header>
<div class="container">
    @yield('main_content')
</div>
@include("error")

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-..." crossorigin="anonymous"></script>
</body>
</html>
