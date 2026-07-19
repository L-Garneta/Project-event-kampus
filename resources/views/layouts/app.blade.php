<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Campus Event Management System')</title>

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    @include('partials.public.navbar')

    <main>
        <div class="container">

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
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 800,
            once: true
        });
    </script>
    <script>
        window.addEventListener('scroll', function () {

            const nav = document.querySelector('.navbar-custom');

            if (window.scrollY > 30) {
                nav.classList.add('scrolled');
            } else {
                nav.classList.remove('scrolled');
            }

        });
    </script>

</body>

</html>