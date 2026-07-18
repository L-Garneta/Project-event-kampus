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
                            placeholder="Masukkan judul event">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Kategori

                        </label>

                        <select
                            name="category_id"
                            class="form-select">

                            <option selected disabled>

                                Pilih Kategori

                            </option>

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Organisasi

                        </label>

                        <select
                            name="organization_id"
                            class="form-select">

                            <option selected disabled>

                                Pilih Organisasi

                            </option>

                        </select>

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Tanggal

                        </label>

                        <input
                            type="date"
                            name="tanggal"
                            class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Waktu

                        </label>

                        <input
                            type="time"
                            name="waktu"
                            class="form-control">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Lokasi

                        </label>

                        <input
                            type="text"
                            name="lokasi"
                            class="form-control"
                            placeholder="Lokasi Event">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Kuota

                        </label>

                        <input
                            type="number"
                            name="kuota"
                            class="form-control"
                            min="1">

                    </div>

                    <div class="col-md-6 mb-3">

                        <label class="form-label">

                            Status

                        </label>

                        <select
                            name="status"
                            class="form-select">

                            <option value="Gratis">

                                Gratis

                            </option>

                            <option value="Berbayar">

                                Berbayar

                            </option>

                        </select>

                    </div>

                    <div class="col-12 mb-3">

                        <label class="form-label">

                            Poster

                        </label>

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
                            placeholder="Deskripsi event"></textarea>

                    </div>

                </div>

                <div class="text-end">

                    <button
                        type="submit"
                        class="btn btn-primary">

                        Simpan Event

                    </button>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection