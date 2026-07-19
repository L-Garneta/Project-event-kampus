@extends('layouts.admin')

@section('title','Tambah Organisasi')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold">

                Tambah Organisasi

            </h3>

            <p class="text-muted mb-0">

                Tambahkan organisasi penyelenggara event.

            </p>

        </div>

        <a
            href="{{ route('admin.organizations.index') }}"
            class="btn btn-outline-secondary">

            Kembali

        </a>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <form
                action="{{ route('admin.organizations.store') }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf

                <div class="mb-3">

                    <label class="form-label">

                        Nama Organisasi

                    </label>

                    <input
                        type="text"
                        name="nama_organisasi"
                        class="form-control"
                        value="{{ old('nama_organisasi') }}"
                        required>

                    @error('nama_organisasi')

                    <div class="text-danger small mt-1">
                        {{ $message }}
                    </div>

                    @enderror

                </div>

                <div class="mb-3">

                    <label class="form-label">

                        Deskripsi

                    </label>

                    <textarea
                        name="deskripsi"
                        rows="4"
                        class="form-control">{{ old('deskripsi') }}</textarea>

                    @error('deskripsi')

                    <div class="text-danger small mt-1">
                        {{ $message }}
                    </div>

                    @enderror

                </div>

                <div class="mb-4">

                    <label class="form-label">

                        Logo

                    </label>

                    @error('logo')

                    <div class="text-danger small mt-1">
                        {{ $message }}
                    </div>

                    @enderror

                    <input
                        type="file"
                        name="logo"
                        class="form-control">

                </div>

                <div class="text-end">

                    <button
                        class="btn btn-primary">

                        Simpan Organisasi

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection