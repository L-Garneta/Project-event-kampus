@extends('layouts.admin')

@section('title','Edit Organisasi')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold">

                Edit Organisasi

            </h3>

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
                action="{{ route('admin.organizations.update',$organization) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="mb-3">

                    <label class="form-label">

                        Nama Organisasi

                    </label>

                    <input
                        type="text"
                        name="nama_organisasi"
                        class="form-control"
                        value="{{ old('nama_organisasi',$organization->nama_organisasi) }}">

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
                        class="form-control">{{ old('deskripsi',$organization->deskripsi) }}</textarea>

                    @error('deskripsi')

                    <div class="text-danger small mt-1">
                        {{ $message }}
                    </div>

                    @enderror

                </div>

                <div class="mb-3">

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

                @if($organization->logo)

                <div class="mb-3">

                    <label class="form-label">

                        Logo Saat Ini

                    </label>

                    <br>

                    <img
                        src="{{ asset('storage/'.$organization->logo) }}"
                        class="img-thumbnail"
                        style="max-width:180px;">

                </div>

                @endif

                <div class="text-end">

                    <button
                        class="btn btn-primary">

                        Update Organisasi

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection