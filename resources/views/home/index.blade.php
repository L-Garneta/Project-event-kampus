@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container py-4">

        {{-- ================= HERO ================= --}}
        <div class="hero-section rounded-4 overflow-hidden mb-5" data-aos="fade-up">

            <div class="row align-items-center g-4">

                <div class="col-lg-6">

                    <span class="badge bg-warning text-dark px-3 py-2 mb-3">
                        Temukan Event Kampus Terbaik
                    </span>

                    <h1 class="display-4 fw-bold">
                        Wujudkan Pengalaman Belajar
                        <br>
                        di Luar Kelas
                    </h1>

                    <p class="lead mt-3 text-white-50">
                        Ikuti seminar, workshop, webinar, lomba,
                        dan berbagai kegiatan kampus hanya dalam
                        satu platform.
                    </p>

                    <div class="mt-4">

                        <a href="{{ route('events.index') }}" class="btn btn-light btn-lg rounded-pill px-4">

                            <i class="bi bi-compass-fill me-2"></i>

                            Jelajahi Event

                        </a>

                        <a href="#latest-event" class="btn btn-outline-light btn-lg rounded-pill px-4 ms-2">

                            <i class="bi bi-arrow-down-circle me-2"></i>

                            Event Terbaru

                        </a>

                    </div>

                </div>

                <div class="col-lg-6 text-center">

                    <img src="{{ asset('assets/images/hero/LogoUdinus.png') }}" class="img-fluid hero-image" alt="Hero">

                </div>

            </div>

        </div>

        {{-- ================= STATISTIK ================= --}}
        <div class="row text-center g-4 mb-5" data-aos="fade-up">

            <div class="col-6 col-lg-3">

                <div class="card border-0 shadow-sm rounded-4 py-4">

                    <i class="bi bi-calendar-event display-5 text-primary"></i>

                    <h2 class="fw-bold text-primary mt-2">
                        {{ $events->count() }}+
                    </h2>
                    <p class="mb-0">Event</p>
                </div>

            </div>

            <div class="col-6 col-lg-3">

                <div class="card border-0 shadow-sm rounded-4 py-4" data-aos="fade-up">
                    <i class="bi bi-people-fill display-5 text-success"></i>
                    <h2 class="fw-bold text-success">
                        300+
                    </h2>

                    <p class="mb-0">
                        Peserta
                    </p>

                </div>

            </div>

            <div class="col-6 col-lg-3">

                <div class="card border-0 shadow-sm rounded-4 py-4">
                    <i class="bi bi-buildings display-5 text-warning"></i>
                    <h2 class="fw-bold text-warning">
                        12
                    </h2>

                    <p class="mb-0">
                        Organisasi
                    </p>

                </div>

            </div>

            <div class="col-6 col-lg-3">

                <div class="card border-0 shadow-sm rounded-4 py-4">
                    <i class="bi bi-star-fill display-5 text-danger"></i>
                    <h2 class="fw-bold text-danger">
                        98%
                    </h2>

                    <p class="mb-0">
                        Kepuasan
                    </p>

                </div>

            </div>

        </div>

        {{-- ================= SEARCH ================= --}}
        <div class="card border-0 shadow-lg rounded-4 mb-5">

            <div class="card-body p-4">

                <form action="{{ route('events.index') }}" method="GET">

                    <div class="row g-3 align-items-end">

                        {{-- Keyword --}}
                        <div class="col-lg-5">

                            <label class="form-label fw-semibold">
                                Cari Event
                            </label>

                            <div class="input-group">

                                <span class="input-group-text bg-white">

                                    <i class="bi bi-search"></i>

                                </span>

                                <input type="text" name="search" class="form-control"
                                    placeholder="Seminar, Workshop, Webinar...">

                            </div>

                        </div>

                        {{-- Kategori --}}
                        <div class="col-lg-3">

                            <label class="form-label fw-semibold">

                                Kategori

                            </label>

                            <div class="input-group">

                                <span class="input-group-text bg-white">

                                    <i class="bi bi-grid"></i>

                                </span>

                                <select name="category" class="form-select">

                                    <option value="">
                                        Semua
                                    </option>

                                    @foreach($categories as $category)

                                        <option value="{{ $category->id }}">

                                            {{ $category->nama_kategori }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                        </div>

                        {{-- Tombol --}}
                        <div class="col-lg-4">

                            <button class="btn btn-primary btn-lg w-100">

                                <i class="bi bi-search me-2"></i>

                                Cari Event

                            </button>

                        </div>

                    </div>

                </form>

            </div>

        </div>
        {{-- ================= KATEGORI ================= --}}
        <div class="mb-5" data-aos="fade-up">
            <h2 class="fw-bold mb-4">

                Kategori Event

            </h2>

            <div class="row g-4">

                @php

                    $categoriesIcons = [

                        ['bi-mortarboard-fill', 'Seminar'],
                        ['bi-laptop', 'Workshop'],
                        ['bi-trophy-fill', 'Kompetisi'],
                        ['bi-camera-video-fill', 'Webinar'],
                        ['bi-music-note-beamed', 'Festival'],
                        ['bi-people-fill', 'Organisasi']

                    ];

                @endphp

                @foreach($categoriesIcons as $category)

                    <div class="col-6 col-md-4 col-lg-2">

                        <div class="card category-card border-0 shadow-sm rounded-4 text-center h-100">

                            <div class="card-body">

                                <div class="display-5 text-primary">

                                    <i class="bi {{ $category[0] }}"></i>

                                </div>

                                <h6 class="mt-3">

                                    {{ $category[1] }}

                                </h6>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        </div>

        {{-- ================= EVENT TERBARU ================= --}}
        <div id="latest-event">

            <div class="d-flex justify-content-between align-items-center mb-4">

                <h2 class="fw-bold">

                    Event Terbaru

                </h2>

                <a href="{{ route('events.index') }}" class="btn btn-outline-primary">

                    Lihat Semua

                </a>

            </div>

            @if($events->isEmpty())

                <div class="alert alert-warning">

                    Belum ada event.

                </div>

            @else

                <div class="row g-4">

                    @foreach($events as $event)

                        <div class="col-12 col-md-6 col-lg-4" data-aos="fade-up">

                            <div class="card event-card border-0 shadow-sm rounded-4 h-100">

                                @if($event->poster)

                                    <img src="{{ asset($event->poster) }}" class="card-img-top" alt="{{ $event->judul }}"
                                        style="height:220px;object-fit:cover;">

                                @endif

                                <div class="card-body">

                                    <span class="badge bg-primary">

                                        {{ $event->category->nama_kategori }}

                                    </span>

                                    <h5 class="fw-bold mt-3">

                                        {{ $event->judul }}

                                    </h5>

                                    <p class="text-muted">

                                        {{ $event->organization->nama_organisasi }}

                                    </p>

                                    <hr>

                                   <p class="mb-2">

    <i class="bi bi-calendar-event text-primary me-2"></i>

    {{ \Carbon\Carbon::parse($event->tanggal)->format('d M Y') }}

</p>

<p class="mb-2">

    <i class="bi bi-geo-alt-fill text-danger me-2"></i>

    {{ $event->lokasi }}

</p>

<p class="text-muted">

    <i class="bi bi-buildings me-2"></i>

    {{ $event->organization->nama_organisasi }}

</p>

                                </div>

                                <div class="card-footer bg-white border-0">

                                    <a href="{{ route('events.show', $event) }}" class="btn btn-primary w-100 rounded-pill">

                                        Detail Event

                                    </a>

                                </div>

                            </div>

                        </div>

                    @endforeach

                </div>

            @endif

        </div>

    </div>

@endsection