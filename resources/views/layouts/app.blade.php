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
        <div class="container mt-3">

            @if(session('success'))

                <div class="alert alert-success alert-dismissible fade show">

                    {{ session('success') }}

                    <button class="btn-close" data-bs-dismiss="alert">
                    </button>

                </div>

            @endif

        </div>
        @yield('content')
    </main>

    @include('partials.public.footer')

</body>

</html>