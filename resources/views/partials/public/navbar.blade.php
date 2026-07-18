<nav class="navbar navbar-expand-lg navbar-dark bg-primary position-relative">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            Campus Event
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar"
            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav ms-auto text-end">

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('home') }}">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('events.index') }}">
                        Event
                    </a>
                </li>

                <li class="nav-item mt-2 mt-lg-0 ms-lg-2">
                    <a href="{{ route('login') }}" class="btn btn-light btn-sm px-3">
                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Login Admin
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>