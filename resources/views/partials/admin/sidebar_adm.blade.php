<div class="col-md-2 bg-white border-end min-vh-100 p-3">

    <h6 class="text-muted mb-4">

        MENU

    </h6>

    <div class="list-group list-group-flush">

        <a href="{{ route('admin.dashboard') }}"
            class="list-group-item list-group-item-action border-0
            {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">

            <i class="bi bi-speedometer2 me-2"></i>
            Dashboard

        </a>

        <a href="{{ route('admin.events.index') }}"
            class="list-group-item list-group-item-action border-0
            {{ request()->routeIs('admin.events.*') ? 'active' : '' }}">

            <i class="bi bi-calendar-event me-2"></i>
            Event

        </a>

        <a href="{{ route('admin.categories.index') }}"
            class="list-group-item list-group-item-action border-0
            {{ request()->routeIs('admin.categories.*') ? 'active' : '' }}">

            <i class="bi bi-tags me-2"></i>
            Kategori

        </a>

        <a href="{{ route('admin.organizations.index') }}"
            class="list-group-item list-group-item-action border-0
            {{ request()->routeIs('admin.organizations.*') ? 'active' : '' }}">

            <i class="bi bi-building me-2"></i>
            Organisasi

        </a>

        <a href="{{ route('admin.registrations.index') }}"
            class="list-group-item list-group-item-action border-0
            {{ request()->routeIs('admin.registrations.*') ? 'active' : '' }}">

            <i class="bi bi-person-lines-fill me-2"></i>
            Registrasi

        </a>

        <hr>

        <form action="{{ route('logout') }}" method="POST">
            @csrf

            <button
                type="submit"
                class="list-group-item list-group-item-action border-0 text-danger w-100 text-start">

                <i class="bi bi-box-arrow-right me-2"></i>
                Logout

            </button>
        </form>

    </div>

</div>