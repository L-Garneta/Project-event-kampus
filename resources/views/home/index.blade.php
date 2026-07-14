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

            <div class="row">

                @foreach ($events as $event)

                    <div class="col-md-4 mb-4">

                        <div class="card h-100">

                            <div class="card-body">

                                <h5 class="card-title">
                                    {{ $event->judul }}
                                </h5>

                                <p class="text-muted mb-2">
                                    {{ $event->organization->nama_organisasi }}
                                </p>

                                <span class="badge bg-success">
                                    {{ $event->category->nama_kategori }}
                                </span>

                                <hr>

                                <p class="mb-1">
                                    <strong>Tanggal:</strong>
                                    {{ $event->tanggal }}
                                </p>

                                <p class="mb-0">
                                    <strong>Lokasi:</strong>
                                    {{ $event->lokasi }}
                                </p>
                                <div class="mt-3">
                                    <a href="{{ route('events.show', $event) }}" class="btn btn-primary">
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