@extends('layouts.admin')

@section('title','Detail Registrasi')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="fw-bold">

            Detail Registrasi

        </h3>

        <a
            href="{{ route('admin.registrations.index') }}"
            class="btn btn-outline-secondary">

            Kembali

        </a>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <table class="table table-borderless">

                <tr>

                    <th width="220">

                        Nama Peserta

                    </th>

                    <td>

                        {{ $registration->nama_peserta }}

                    </td>

                </tr>

                <tr>

                    <th>Email</th>

                    <td>{{ $registration->email }}</td>

                </tr>

                <tr>

                    <th>No HP</th>

                    <td>{{ $registration->no_hp }}</td>

                </tr>

                <tr>

                    <th>NIM</th>

                    <td>{{ $registration->nim ?: '-' }}</td>

                </tr>

                <tr>

                    <th>Instansi</th>

                    <td>{{ $registration->instansi ?: '-' }}</td>

                </tr>

                <tr>

                    <th>Status</th>

                    <td>

                        @if($registration->status == 'Terdaftar')

                        <span class="badge bg-success">
                            Terdaftar
                        </span>

                        @elseif($registration->status == 'Hadir')

                        <span class="badge bg-primary">
                            Hadir
                        </span>

                        @else

                        <span class="badge bg-secondary">
                            {{ $registration->status }}
                        </span>

                        @endif

                    </td>

                </tr>

                <tr>

                    <th>Event</th>

                    <td>{{ $registration->event->judul }}</td>

                </tr>

                <tr>

                    <th>Kategori</th>

                    <td>{{ $registration->event->category->nama_kategori }}</td>

                </tr>

                <tr>

                    <th>Tema Event</th>

                    <td>

                        {{ $registration->event->tema }}

                    </td>

                </tr>

                <tr>

                    <th>Organisasi</th>

                    <td>{{ $registration->event->organization->nama_organisasi }}</td>

                </tr>

                <tr>

                    <th>Tanggal</th>

                    <td>{{ $registration->event->tanggal->format('d F Y') }}</td>

                </tr>

                <tr>

                    <th>Lokasi</th>

                    <td>{{ $registration->event->lokasi }}</td>

                </tr>

            </table>

        </div>

    </div>

</div>

@endsection