@extends('layouts.admin')

@section('title','Dashboard')

@section('content')

<div class="container-fluid">

    <h2 class="fw-bold mb-4">

        Dashboard

    </h2>

    <div class="row g-4 mb-4">

        <div class="col-md-3">

            <div class="card">

                <div class="card-body">

                    <h6>Total Event</h6>

                    <h2>{{ $totalEvent }}</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card">

                <div class="card-body">

                    <h6>Total Registrasi</h6>

                    <h2>{{ $totalRegistrasi }}</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card">

                <div class="card-body">

                    <h6>Kategori</h6>

                    <h2>{{ $totalKategori }}</h2>

                </div>

            </div>

        </div>

        <div class="col-md-3">

            <div class="card">

                <div class="card-body">

                    <h6>Organisasi</h6>

                    <h2>{{ $totalOrganisasi }}</h2>

                </div>

            </div>

        </div>

    </div>

    <div class="row">

        <div class="col-lg-8">

            <div class="card">

                <div class="card-header fw-bold">

                    Event per Organisasi

                </div>

                <div class="card-body">

                    <canvas
                        id="organizationChart"
                        data-labels='@json($chart->pluck("nama_organisasi")->values())'
                        data-values='@json($chart->pluck("events_count")->values())'>
                    </canvas>

                </div>

            </div>

        </div>

        <div class="col-lg-4">

            <div class="card">

                <div class="card-header fw-bold">

                    Event Aktif

                </div>

                <div class="card-body">

                    @forelse($eventAktif as $event)

                    <div class="border rounded p-3 mb-3">

                        <h6 class="fw-bold">

                            {{ $event->judul }}

                        </h6>

                        <small>

                            📅 {{ $event->tanggal->format('d M Y') }}

                        </small>

                        <br>

                        <small>

                            📍 {{ $event->lokasi }}

                        </small>

                        <br>

                        <small>

                            🏢 {{ $event->organization->nama_organisasi }}

                        </small>

                        <br>

                        <small>

                            👥 Kuota : {{ $event->kuota }}

                        </small>

                    </div>

                    @empty

                    <p class="text-muted">

                        Tidak ada event aktif.

                    </p>

                    @endforelse

                </div>

            </div>

        </div>

    </div>

</div>

@endsection