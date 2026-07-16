@extends('layouts.app')

@section('title', $event->judul)

@section('content')

<div class="container py-5">

    <div class="row">

        <div class="col-md-5">

            @if ($event->poster)

                <img src="{{ asset('storage/' . $event->poster) }}"
                     class="img-fluid rounded shadow"
                     alt="{{ $event->judul }}">

            @else

                <div class="bg-light border rounded d-flex align-items-center justify-content-center"
                     style="height:350px;">
                    <span class="text-muted">Poster belum tersedia</span>
                </div>

            @endif

        </div>

        <div class="col-md-7">

            <h2 class="fw-bold">{{ $event->judul }}</h2>

            <p class="text-muted">
                {{ $event->tema }}
            </p>

            <hr>

            <table class="table">

                <tr>
                    <th width="180">Penyelenggara</th>
                    <td>{{ $event->organization->nama_organisasi }}</td>
                </tr>

                <tr>
                    <th>Kategori</th>
                    <td>{{ $event->category->nama_kategori }}</td>
                </tr>

                <tr>
                    <th>Tanggal</th>
                    <td>{{ $event->tanggal->format('d F Y') }}</td>
                </tr>

                <tr>
                    <th>Waktu</th>
                    <td>{{ $event->waktu->format('H:i') }} WIB</td>
                </tr>

                <tr>
                    <th>Lokasi</th>
                    <td>{{ $event->lokasi }}</td>
                </tr>

                <tr>
                    <th>Kuota</th>
                    <td>{{ $event->kuota }} Peserta</td>
                </tr>

                <tr>
                    <th>Status</th>
                    <td>
                        <span class="badge bg-success">
                            {{ $event->status }}
                        </span>
                    </td>
                </tr>

            </table>

            <div class="mt-4">

                <a href="{{ route('registrations.create', $event) }}"
                   class="btn btn-primary">
                    Daftar Sekarang
                </a>

                <a href="{{ route('events.index') }}"
                   class="btn btn-outline-secondary">
                    Kembali
                </a>

            </div>

        </div>

    </div>

    <div class="card mt-5">

        <div class="card-header">
            <strong>Deskripsi Event</strong>
        </div>

        <div class="card-body">
            {!! nl2br(e($event->deskripsi)) !!}
        </div>

    </div>

</div>

@endsection