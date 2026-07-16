<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">

    @vite([
        'resources/css/app.css',
        'resources/js/app.js'
    ])
</head>

<body>

    @include('partials.admin.navbar_adm')

<div class="container-fluid">
    <div class="row">

        @include('partials.admin.sidebar_adm')

        <main class="col-md-10 py-4">
            @yield('content')
        </main>

    </div>
</div>

@include('partials.admin.footer_adm')

</body>

</html>