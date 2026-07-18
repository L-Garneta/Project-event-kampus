@extends('layouts.admin')

@section('title','Data Event')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>
            <h3 class="fw-bold mb-1">
                Data Event
            </h3>

            <p class="text-muted mb-0">
                Kelola seluruh event kampus.
            </p>
        </div>

        <a href="{{ route('admin.events.create') }}"
            class="btn btn-primary">

            + Tambah Event

        </a>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead>

                        <tr>

                            <th>No</th>

                            <th>Poster</th>

                            <th>Judul</th>

                            <th>Kategori</th>

                            <th>Tanggal</th>

                            <th>Kuota</th>

                            <th>Status</th>

                            <th width="180">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($events as $event)

                        <tr>

                            <td>{{ $loop->iteration }}</td>

                            <td>

                                <img
                                    src="{{ asset('storage/'.$event->poster) }}"
                                    width="80"
                                    class="rounded">

                            </td>

                            <td>

                                <strong>

                                    {{ $event->judul }}

                                </strong>

                            </td>

                            <td>

                                {{ $event->category->nama }}

                            </td>

                            <td>

                                {{ $event->tanggal }}

                            </td>

                            <td>

                                {{ $event->kuota }}

                            </td>

                            <td>

                                @if($event->status=='Gratis')

                                    <span class="badge bg-success">
                                        Gratis
                                    </span>

                                @else

                                    <span class="badge bg-warning text-dark">
                                        Berbayar
                                    </span>

                                @endif

                            </td>

                            <td>

                                <a
                                    href="{{ route('admin.events.show',$event) }}"
                                    class="btn btn-info btn-sm">

                                    Detail

                                </a>

                                <a
                                    href="{{ route('admin.events.edit',$event) }}"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="8"
                                class="text-center">

                                Belum ada event.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

@endsection