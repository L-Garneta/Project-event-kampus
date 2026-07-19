@extends('layouts.admin')

@section('title','Data Event')

@section('content')

<div class="container-fluid">

    @if(session('success'))

    <div class="alert alert-success alert-dismissible fade show">

        {{ session('success') }}

        <button
            type="button"
            class="btn-close"
            data-bs-dismiss="alert">
        </button>

    </div>

    @endif

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

                                @if($event->poster)

                                <img
                                    src="{{ asset('storage/'.$event->poster) }}"
                                    width="80"
                                    class="rounded">

                                @else

                                <span class="text-muted">
                                    Tidak ada
                                </span>

                                @endif

                            </td>

                            <td>

                                <strong>

                                    {{ $event->judul }}

                                </strong>

                            </td>

                            <td>

                                {{ $event->category->nama_kategori ?? '-' }}

                            </td>

                            <td>

                                {{ $event->tanggal->format('d M Y') }}

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

                                <form
                                    action="{{ route('admin.events.destroy',$event) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus event ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        class="btn btn-danger btn-sm">

                                        Hapus

                                    </button>

                                </form>

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