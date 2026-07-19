
<nav class="navbar navbar-expand-lg navbar-custom fixed-top">

    <div class="container">

        <a class="navbar-brand fw-bold fs-3" href="{{ route('home') }}">
            Campus Event
        </a>

        <button class="navbar-toggler border-0 shadow-none"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarContent">

            <i class="bi bi-list fs-2"></i>

        </button>

        <div class="collapse navbar-collapse" id="navbarContent">

            <ul class="navbar-nav mx-auto">

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

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Kalender
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#">
                        Tentang
                    </a>
                </li>

            </ul>

            <a href="{{ route('login') }}"
                class="btn btn-primary rounded-pill px-4">

                Login Admin

            </a>

        </div>

    </div>

</nav>