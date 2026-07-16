<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('home') }}">
            Campus Event
        </a>

        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="navbar">

            <ul class="navbar-nav ms-auto">

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

                <li class="nav-item ms-2">
                    <a href="{{ route('login') }}" class="btn btn-light btn-sm px-3">
                        <i class="bi bi-box-arrow-in-right me-1"></i>
                        Login Admin
                    </a>
                </li>

            </ul>

        </div>

    </div>
</nav>