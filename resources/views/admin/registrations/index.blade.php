@extends('layouts.admin')

@section('title','Data Registrasi')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold">

                Data Registrasi

            </h3>

            <p class="text-muted mb-0">

                Daftar peserta yang telah mendaftar event.

            </p>

        </div>

    </div>

    @if(session('success'))

    <div class="alert alert-success">

        {{ session('success') }}

    </div>

    @endif

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th>No</th>
                            <th>Peserta</th>
                            <th>Event</th>
                            <th>Email</th>
                            <th>Tanggal Daftar</th>
                            <th>Status</th>

                            <th class="text-center">
                                Aksi
                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($registrations as $registration)

                        <tr>

                            <td>

                                {{ $registrations->firstItem()+$loop->index }}

                            </td>

                            <td>

                                {{ $registration->nama_peserta }}

                            </td>

                            <td>

                                {{ $registration->event->judul }}

                            </td>

                            <td>

                                {{ $registration->email }}

                            </td>

                            <td>

                                {{ $registration->created_at->format('d M Y') }}

                            </td>

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

                            <td class="text-center">

                                <a
                                    href="{{ route('admin.registrations.show',$registration) }}"
                                    class="btn btn-info btn-sm">

                                    Detail

                                </a>

                                <form
                                    action="{{ route('admin.registrations.destroy',$registration) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Hapus data registrasi ini?')">

                                    @csrf
                                    @method('DELETE')

                                    <button class="btn btn-danger btn-sm">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td colspan="7" class="text-center text-muted">

                                Belum ada data registrasi.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-3">

                {{ $registrations->links() }}

            </div>

        </div>

    </div>

</div>

@endsection