@extends('layouts.app')

@section('title', 'Pendaftaran Event')

@section('content')

<div class="container py-5">

    <div class="row justify-content-center">

        <div class="col-lg-8">

            <div class="card shadow border-0">

                <div class="card-header bg-primary text-white">

                    <h4 class="mb-0">
                        Form Pendaftaran Event
                    </h4>

                </div>

                <div class="card-body">

                    <div class="alert alert-info">

                        <h5 class="mb-1">{{ $event->judul }}</h5>

                        <small>
                            {{ $event->tanggal->format('d F Y') }}
                            |
                            {{ $event->waktu->format('H:i') }} WIB
                            |
                            {{ $event->lokasi }}
                        </small>

                    </div>

                    <form action="{{ route('registrations.store',$event) }}"
                          method="POST">

                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                Nama Lengkap
                            </label>

                            <input
                                type="text"
                                name="nama_peserta"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                Nomor HP
                            </label>

                            <input
                                type="text"
                                name="no_hp"
                                class="form-control"
                                required>

                        </div>

                        <div class="mb-3">

                            <label class="form-label">
                                NIM (Opsional)
                            </label>

                            <input
                                type="text"
                                name="nim"
                                class="form-control">

                        </div>

                        <div class="mb-4">

                            <label class="form-label">
                                Instansi
                            </label>

                            <input
                                type="text"
                                name="instansi"
                                class="form-control">

                        </div>

                        <button
                            type="submit"
                            class="btn btn-primary">

                            Daftar Sekarang

                        </button>

                        <a href="{{ route('events.show',$event) }}"
                           class="btn btn-secondary">

                            Kembali

                        </a>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection