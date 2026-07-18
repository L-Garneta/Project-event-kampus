@extends('layouts.app')

@section('title', $event->judul)

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-10">

            <div class="card border-0 shadow rounded-4 overflow-hidden">

                <div class="row g-0">

                    <!-- Poster -->
                    <div class="col-lg-5">

                        @if($event->poster)

                            <img src="{{ asset('storage/'.$event->poster) }}"
                                 class="img-fluid h-100 w-100 object-fit-cover"
                                 alt="{{ $event->judul }}">

                        @else

                            <div class="d-flex justify-content-center align-items-center h-100 bg-light"
                                 style="min-height:450px;">
                                Poster belum tersedia
                            </div>

                        @endif

                    </div>

                    <!-- Detail -->
                    <div class="col-lg-7">

                        <div class="card-body p-4">

                            <h2 class="fw-bold">
                                {{ $event->judul }}
                            </h2>

                            <p class="text-muted">
                                {{ $event->tema }}
                            </p>

                            <hr>

                            <table class="table align-middle">

                                <tr>
                                    <th width="170">Penyelenggara</th>
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
                                        <span class="badge bg-success px-3 py-2">
                                            {{ $event->status }}
                                        </span>
                                    </td>
                                </tr>

                            </table>

                            <hr>

                            <h5 class="fw-bold mb-3">
                                Deskripsi Event
                            </h5>

                            <p class="text-muted">
                                {!! nl2br(e($event->deskripsi)) !!}
                            </p>

                            <div class="d-flex gap-2 mt-4">

                                <a href="{{ route('registrations.create',$event) }}"
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

                </div>

            </div>

        </div>

    </div>

</div>
@endsection