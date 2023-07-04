<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pachara's Books Store - @yield('title')</title>
</head>

<body>
    <header>
        <h1>Pachara's Books Store - @yield('title')</h1>
        <nav>
            <a href="{{ route('products-list') }}">Products</a>
        </nav>
    </header>

    <div class="app-cmp-content">
        @yield('content')
    </div>

    <footer>
        &#xA9; Copyright Week-03, 2023 Pachara's Books Store.
    </footer>
</body>

</html>
