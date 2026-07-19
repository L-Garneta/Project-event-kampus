@extends('layouts.admin')

@section('title','Edit Event')

@section('content')

<div class="container-fluid">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <div>

            <h3 class="fw-bold">
                Edit Event
            </h3>

        </div>

        <a href="{{ route('admin.events.index') }}"
            class="btn btn-outline-secondary">

            Kembali

        </a>

    </div>

    <div class="card shadow-sm border-0">

        <div class="card-body">

            <form
                action="{{ route('admin.events.update',$event) }}"
                method="POST"
                enctype="multipart/form-data">

                @csrf
                @method('PUT')

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Judul Event

                        </label>

                        <input
                            type="text"
                            name="judul"
                            class="form-control"
                            placeholder="Masukkan judul event"
                            value="{{ old('judul', $event->judul) }}">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Tema

                        </label>

                        <input
                            type="text"
                            name="tema"
                            class="form-control"
                            placeholder="Masukkan tema event"
                            value="{{ old('tema', $event->tema) }}">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Kategori

                        </label>

                        <select
                            name="category_id"
                            class="form-select">

                            <option disabled selected>

                                Pilih Kategori

                            </option>

                            @foreach($categories as $category)

                            <option value="{{ $category->id }}"
                                {{ old('category_id', $event->category_id) == $category->id ? 'selected' : '' }}>

                                {{ $category->nama_kategori }}

                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Organisasi

                        </label>

                        <select
                            name="organization_id"
                            class="form-select">

                            <option disabled selected>

                                Pilih Organisasi

                            </option>

                            @foreach($organizations as $organization)

                            <option value="{{ $organization->id }}"
                                {{ old('organization_id', $event->organization_id) == $organization->id ? 'selected' : '' }}>

                                {{ $organization->nama_organisasi }}

                            </option>

                            @endforeach

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Tanggal

                        </label>

                        <input
                            type="date"
                            name="tanggal"
                            class="form-control"
                            value="{{ old('tanggal', $event->tanggal?->format('Y-m-d')) }}">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Waktu

                        </label>

                        <input
                            type="time"
                            name="waktu"
                            class="form-control"
                            value="{{ old('waktu', $event->waktu?->format('H:i')) }}">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Lokasi

                        </label>

                        <input
                            type="text"
                            name="lokasi"
                            class="form-control"
                            placeholder="Lokasi Event"
                            value="{{ old('lokasi', $event->lokasi) }}">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Kuota

                        </label>

                        <input
                            type="number"
                            name="kuota"
                            class="form-control"
                            min="1"
                            value="{{ old('kuota', $event->kuota) }}">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Status

                        </label>

                        <select
                            name="status"
                            class="form-select">

                            <option value="Gratis"
                                {{ old('status', $event->status) == 'Gratis' ? 'selected' : '' }}>

                                Gratis

                            </option>

                            <option value="Berbayar"
                                {{ old('status', $event->status) == 'Berbayar' ? 'selected' : '' }}>

                                Berbayar

                            </option>

                        </select>

                    </div>

                    <div class="col-12 mb-3">

                        <label class="form-label">

                            Poster

                        </label>

                        @if($event->poster)

                        <div class="mb-3">
                            <label class="form-label">

                                Poster Saat Ini

                            </label>
                            <br>
                            <img
                                src="{{ asset('storage/' . $event->poster) }}"
                                class="img-thumbnail"
                                style="max-width:250px;">
                        </div>
                        @endif

                        <input
                            type="file"
                            name="poster"
                            class="form-control">

                    </div>

                    <div class="col-12 mb-4">

                        <label class="form-label">

                            Deskripsi

                        </label>

                        <textarea
                            name="deskripsi"
                            rows="5"
                            class="form-control"
                            placeholder="Deskripsi event">{{ old('deskripsi', $event->deskripsi) }}</textarea>
                    </div>

                </div>

                <div class="text-end">

                    <button
                        type="submit"
                        class="btn btn-primary">

                        Update Event

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection