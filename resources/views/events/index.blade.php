@php
    use Illuminate\Support\Facades\Storage;
@endphp
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

                    <div class="col-12 col-md-6 col-lg-4 mb-4">

                        <div class="card event-card border-0 shadow-sm rounded-4 h-100 overflow-hidden">

                            {{-- Poster --}}
                            <div class="event-image">

                                @if($event->poster)

                                    <img src="{{ Storage::url($event->poster) }}" class="card-img-top" alt="{{ $event->judul }}">

                                @else

                                    <img src="{{ asset('assets/images/default-event.jpg') }}" alt="Poster Default">

                                @endif

                                <span class="badge bg-primary position-absolute top-0 start-0 m-3 px-3 py-2">
                                    {{ $event->category->nama_kategori }}
                                </span>

                            </div>

                            <div class="card-body">

                                <h5 class="fw-bold mb-2">

                                    {{ $event->judul }}

                                </h5>
                                <div class="mb-2">

                                    <i class="bi bi-calendar-event me-2 text-primary"></i>

                                    {{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}

                                </div>

                                <div class="mb-3">

                                    <i class="bi bi-geo-alt me-2 text-danger"></i>

                                    {{ $event->lokasi }}

                                </div>

                                <span class="badge bg-success">

                                    {{ $event->status }}

                                </span>

                            </div>

                            <div class="card-footer bg-white border-0">

                                <a href="{{ route('events.show', $event) }}" class="btn btn-primary rounded-pill w-100">
                                    <i class="bi bi-arrow-right-circle me-2"></i>

                                    Detail Event
                                    <i class="bi bi-arrow-right ms-2"></i>

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