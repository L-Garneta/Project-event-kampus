@extends('layouts.app')

@section('title', 'Pendaftaran Berhasil')

@section('content')

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-lg-8">

                <div class="card registration-card" data-aos="zoom-in">

                    <div class="card-body text-center p-5">

                        <div class="success-icon mb-4" data-aos="zoom-in" data-aos-delay="200">

                            <i class="bi bi-patch-check-fill text-success display-1"></i>
                        </div>

                        <h2 class="fw-bold mt-4 mb-2">
                            Pendaftaran Berhasil
                        </h2>

                        <p class="text-muted fs-5">
                            Email konfirmasi telah dikirim ke
                        </p>

                        <p class="fw-semibold text-primary fs-5">
                            {{ $registration->email }}
                        </p>

                    </div>

                    <hr>

                    <div class="registration-info mt-5">

                        <div class="info-item">
                            <span>Nama Peserta</span>
                            <strong>{{ $registration->nama_peserta }}</strong>
                        </div>

                        <div class="info-item">
                            <span>Event</span>
                            <strong>{{ $registration->event->judul }}</strong>
                        </div>

                        <div class="info-item">
                            <span>Tanggal</span>
                            <strong>
                                {{ $registration->event->tanggal->format('d F Y') }}
                            </strong>
                        </div>

                        <div class="info-item">
                            <span>Lokasi</span>
                            <strong>{{ $registration->event->lokasi }}</strong>
                        </div>

                        <div class="info-item">
                            <span>Status</span>

                            <span class="badge bg-success rounded-pill px-3 py-2">
                                {{ $registration->status }}
                            </span>
                        </div>

                    </div>

                    <div class="mt-5" data-aos="fade-up" data-aos-delay="400">

                        <a href="{{ route('registration.pdf', $registration) }}"
                            class="btn btn-danger btn-lg w-100 rounded-pill shadow mb-3">

                            <i class="bi bi-file-earmark-pdf-fill me-2"></i>

                            Download Bukti Registrasi

                        </a>

                        <div class="row g-3">

                            <div class="col-6">

                                <a href="{{ route('home') }}" class="btn btn-primary w-100 rounded-pill">

                                    <i class="bi bi-house-fill me-2"></i>

                                    Home

                                </a>

                            </div>

                            <div class="col-6">

                                <a href="{{ route('events.index') }}" class="btn btn-outline-primary w-100 rounded-pill">

                                    <i class="bi bi-calendar-event me-2"></i>

                                    Event

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