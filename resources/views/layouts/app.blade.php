<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Campus Event Management System')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>

    @include('partials.public.navbar')

    <main class="py-4">
        @yield('content')
    </main>

    @include('partials.public.footer')

</body>

</html>