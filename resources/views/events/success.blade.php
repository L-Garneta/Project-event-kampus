@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow border-0 rounded-4">

                <div class="card-body text-center p-5">

                    <div class="mb-4">

                        <div class="display-1 text-success">
                            ✅
                        </div>

                        <h2 class="fw-bold mt-3">
                            Pendaftaran Berhasil
                        </h2>

                        <p class="text-muted">
                            Email konfirmasi telah dikirim ke
                            <strong>{{ $registration->email }}</strong>
                        </p>

                    </div>

                    <hr>

                    <table class="table table-borderless text-start">

                        <tr>
                            <th width="180">Nama Peserta</th>
                            <td>{{ $registration->nama_peserta }}</td>
                        </tr>

                        <tr>
                            <th>Event</th>
                            <td>{{ $registration->event->judul }}</td>
                        </tr>

                        <tr>
                            <th>Tanggal</th>
                            <td>{{ $registration->event->tanggal->format('d F Y') }}</td>
                        </tr>

                        <tr>
                            <th>Lokasi</th>
                            <td>{{ $registration->event->lokasi }}</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>
                                <span class="badge bg-success">
                                    {{ $registration->status }}
                                </span>
                            </td>
                        </tr>

                    </table>

                    <div class="mt-4 d-flex justify-content-center gap-3">

                        <a href="{{ route('home') }}" class="btn btn-primary">
                            Kembali ke Home
                        </a>

                        <a href="{{ route('events.index') }}" class="btn btn-outline-primary">
                            Event Lainnya
                        </a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection