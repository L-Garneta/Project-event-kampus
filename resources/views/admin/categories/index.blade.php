@extends('layouts.admin')

@section('title', 'Kategori')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold">

                Data Kategori

            </h3>

            <p class="text-muted mb-0">

                Kelola kategori event.

            </p>

        </div>

        <a
            href="{{ route('admin.categories.create') }}"
            class="btn btn-primary">

            + Tambah Kategori

        </a>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <div class="table-responsive">

                <table class="table table-hover align-middle">

                    <thead class="table-light">

                        <tr>

                            <th width="80">No</th>

                            <th>Nama Kategori</th>

                            <th>Dibuat</th>

                            <th width="180" class="text-center">

                                Aksi

                            </th>

                        </tr>

                    </thead>

                    <tbody>

                        @forelse($categories as $category)

                        <tr>

                            <td>

                                {{ $loop->iteration }}

                            </td>

                            <td>

                                {{ $category->nama_kategori }}

                            </td>

                            <td>

                                {{ $category->created_at->format('d M Y') }}

                            </td>

                            <td class="text-center">

                                <a href="{{ route('admin.categories.edit', $category) }}"
                                    class="btn btn-sm btn-warning">
                                    Edit
                                </a>

                                <form
                                    action="{{ route('admin.categories.destroy', $category) }}"
                                    method="POST"
                                    class="d-inline">

                                    @csrf
                                    @method('DELETE')

                                    <button
                                        type="submit"
                                        class="btn btn-sm btn-danger">

                                        Hapus

                                    </button>

                                </form>

                            </td>

                        </tr>

                        @empty

                        <tr>

                            <td
                                colspan="4"
                                class="text-center text-muted">

                                Belum ada data kategori.

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