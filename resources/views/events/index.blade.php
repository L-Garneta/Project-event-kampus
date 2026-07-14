@extends('layouts.app')

@section('title', 'Daftar Event')

@section('content')

<div class="container py-5">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold">
            Daftar Event
        </h2>

        <a href="{{ route('home') }}" class="btn btn-secondary">
            Kembali
        </a>

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

                        @if($event->poster)

                            <img src="{{ asset('storage/' . $event->poster) }}"
                                 class="card-img-top"
                                 alt="{{ $event->judul }}"
                                 style="height:220px;object-fit:cover;">

                        @endif

                        <div class="card-body">

                            <h5 class="card-title">
                                {{ $event->judul }}
                            </h5>

                            <p class="text-muted">

                                {{ $event->organization->nama_organisasi }}

                            </p>

                            <span class="badge bg-primary">

                                {{ $event->category->nama_kategori }}

                            </span>

                            <span class="badge bg-success">

                                {{ $event->status }}

                            </span>

                            <hr>

                            <p>

                                <strong>Tanggal :</strong><br>

                                {{ $event->tanggal }}

                            </p>

                            <p>

                                <strong>Lokasi :</strong><br>

                                {{ $event->lokasi }}

                            </p>

                        </div>

                        <div class="card-footer bg-white border-0">

                            <a href="{{ route('events.show', $event) }}"
                               class="btn btn-primary w-100">

                                Detail Event

                            </a>

                        </div>

                    </div>

                </div>

            @endforeach

        </div>

        <div class="mt-4">

            {{ $events->links() }}

        </div>

    @endif

</div>

@endsection