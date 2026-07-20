@extends('layouts.admin')

@section('title', 'Tambah Kategori')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold">

                Tambah Kategori

            </h3>

            <p class="text-muted mb-0">

                Tambahkan kategori baru untuk event.

            </p>

        </div>

        <a
            href="{{ route('admin.categories.index') }}"
            class="btn btn-outline-secondary">

            Kembali

        </a>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <form
                action="{{ route('admin.categories.store') }}"
                method="POST">

                @csrf

                <div class="mb-3">

                    <label class="form-label">

                        Nama Kategori

                    </label>

                    <input
                        type="text"
                        name="nama_kategori"
                        class="form-control"
                        placeholder="Masukkan nama kategori"
                        value="{{ old('nama_kategori') }}"
                        required>

                    @error('nama_kategori')

                    <div class="text-danger small mt-1">

                        {{ $message }}

                    </div>

                    @enderror

                </div>

                <div class="text-end">

                    <button
                        type="submit"
                        class="btn btn-primary">

                        Simpan Kategori

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection