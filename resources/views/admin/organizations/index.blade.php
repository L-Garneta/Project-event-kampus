@extends('layouts.admin')

@section('title','Organisasi')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold">

                Data Organisasi

            </h3>

            <p class="text-muted mb-0">

                Kelola organisasi penyelenggara event.

            </p>

        </div>

        <a
            href="{{ route('admin.organizations.create') }}"
            class="btn btn-primary">

            + Tambah Organisasi

        </a>

    </div>

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

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th width="70">

                                No

                            </th>

                            <th width="120">

                                Logo

                            </th>

                            <th>

                                Nama Organisasi

                            </th>

                            <th>

                                Deskripsi

                            </th>

                            <th width="140">

                                Dibuat

                            </th>

                            <th width="180" class="text-center">

                                Aksi

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($organizations as $organization)

                        <tr>

                            <td>

                                {{ $organizations->firstItem() + $loop->index }}

                            </td>

                            <td>

                                @if($organization->logo)

                                <img
                                    src="{{ asset('storage/'.$organization->logo) }}"
                                    class="img-thumbnail"
                                    style="width:70px;height:70px;object-fit:cover;">

                                @else

                                <span class="text-muted">

                                    Tidak ada

                                </span>

                                @endif

                            </td>

                            <td>

                                {{ $organization->nama_organisasi }}

                            </td>

                            <td>

                                {{ \Illuminate\Support\Str::limit($organization->deskripsi,100) }}

                            </td>

                            <td>

                                {{ $organization->created_at->format('d M Y') }}

                            </td>

                            <td class="text-center">

                                <a
                                    href="{{ route('admin.organizations.edit',$organization) }}"
                                    class="btn btn-warning btn-sm">

                                    Edit

                                </a>

                                <form
                                    action="{{ route('admin.organizations.destroy',$organization) }}"
                                    method="POST"
                                    class="d-inline"
                                    onsubmit="return confirm('Yakin ingin menghapus organisasi ini?')">

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

                            <td colspan="6" class="text-center text-muted">

                                Belum ada organisasi.

                            </td>

                        </tr>

                        @endforelse

                    </tbody>

                </table>

            </div>

            <div class="mt-3">

                {{ $organizations->links() }}

            </div>

        </div>

    </div>

</div>

@endsection