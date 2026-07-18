@extends('layouts.app')

@section('title', 'Home')

@section('content')

    <div class="container py-5">

        <!-- Hero Section -->
        <div class="p-5 mb-5 bg-primary text-white rounded-3">
            <div class="container-fluid py-3">
                <h1 class="display-5 fw-bold">
                    Campus Event Management System
                </h1>

                <p class="lead">
                    Temukan berbagai seminar, workshop, lomba, dan kegiatan kampus
                    yang dapat kamu ikuti.
                </p>

                <a href="{{ route('events.index') }}" class="btn btn-light btn-lg">
                    Lihat Semua Event
                </a>
            </div>
        </div>

        <!-- Event Terbaru -->
        <div class="mb-4">
            <h2 class="fw-bold">Event Terbaru</h2>
        </div>

        @if ($events->isEmpty())

            <div class="alert alert-warning">
                Belum ada event yang tersedia.
            </div>

        @else

            <div class="row g-4">

                @foreach($events as $event)

                    <div class="col-12 col-md-6 col-lg-4">

                        <div class="card h-100 shadow-sm border-0 rounded-4">

                            @if($event->poster)
                                <img src="{{ asset('storage/' . $event->poster) }}" class="card-img-top"
                                    style="height:220px; object-fit:cover;" alt="{{ $event->judul }}">
                            @endif

                            <div class="card-body">

                                <h5 class="card-title fw-bold">
                                    {{ $event->judul }}
                                </h5>

                                <p class="text-muted mb-2">
                                    {{ $event->organization->nama_organisasi }}
                                </p>

                                <span class="badge bg-success">
                                    {{ $event->category->nama_kategori }}
                                </span>

                                <hr>

                                <p class="mb-2">
                                    <strong>Tanggal:</strong><br>
                                    {{ $event->tanggal }}
                                </p>

                                <p class="mb-0">
                                    <strong>Lokasi:</strong><br>
                                    {{ $event->lokasi }}
                                </p>

                            </div>

                            <div class="card-footer bg-white border-0">

                                <a href="{{ route('events.show', $event) }}" class="btn btn-primary w-100">
                                    Detail Event
                                </a>

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </div>

@endsection