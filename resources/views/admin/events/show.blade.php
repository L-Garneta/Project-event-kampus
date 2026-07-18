@extends('layouts.admin')

@section('title', 'Detail Event')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h3 class="fw-bold">
            Detail Event
        </h3>

        <a
            href="{{ route('admin.events.index') }}"
            class="btn btn-outline-secondary">

            Kembali

        </a>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="row">

                <div class="col-md-4 text-center">

                    @if($event->poster)

                    <img
                        src="{{ asset('storage/' . $event->poster) }}"
                        class="img-fluid rounded shadow-sm"
                        style="max-height:420px; object-fit:cover;">

                    @else

                    <div class="border rounded p-5 text-muted">

                        Belum ada poster

                    </div>

                    @endif

                </div>

                <div class="col-md-8">

                    <table class="table table-borderless">

                        <tr>
                            <th width="220">Judul Event</th>
                            <td>{{ $event->judul }}</td>
                        </tr>

                        <tr>
                            <th>Kategori</th>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Organisasi</th>
                            <td>-</td>
                        </tr>

                        <tr>
                            <th>Tanggal</th>
                            <td>{{ \Carbon\Carbon::parse($event->tanggal)->format('d F Y') }}</td>
                        </tr>

                        <tr>
                            <th>Waktu</th>
                            <td>{{ \Carbon\Carbon::parse($event->waktu)->format('H:i') }}</td>
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

                                @if($event->status == 'Gratis')

                                <span class="badge bg-success">

                                    Gratis

                                </span>

                                @else

                                <span class="badge bg-warning text-dark">

                                    Berbayar

                                </span>

                                @endif

                            </td>

                        </tr>

                        <tr>

                            <th>Dibuat</th>

                            <td>

                                {{ $event->created_at->format('d M Y H:i') }}

                            </td>

                        </tr>

                        <tr>

                            <th>Terakhir Diubah</th>

                            <td>

                                {{ $event->updated_at->format('d M Y H:i') }}

                            </td>

                        </tr>

                        <tr>

                            <th>Deskripsi</th>

                            <td>{!! nl2br(e($event->deskripsi)) !!} </td>

                        </tr>

                    </table>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection