@extends('layouts.auth')

@section('title', 'Login Administrator')

@section('content')

<div class="container">

    <div class="row justify-content-center align-items-center min-vh-100">

        <div class="col-lg-5 col-md-7">

            <div class="card shadow login-card">

                <div class="card-body p-5">

                    <h2 class="fw-bold text-center text-uppercase mb-2">
                        Campus Event Management
                    </h2>

                    <p class="text-center text-muted mb-4">
                        Login sebagai Administrator untuk mengelola event
                    </p>

                    @if(session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('login.process') }}">
                        @csrf

                        <div class="mb-3">

                            <label class="form-label">
                                Nama
                            </label>

                            <input
                                type="text"
                                name="nama"
                                class="form-control"
                                placeholder="Masukkan nama"
                                value="{{ old('nama') }}"
                                autocomplete="name"
                                required>

                        </div>

                        @error('nama')
                        <div class="text-danger small mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="mb-3">

                            <label class="form-label">
                                NIM
                            </label>

                            <input
                                type="text"
                                name="nim"
                                class="form-control"
                                placeholder="Masukkan NIM"
                                value="{{ old('nim') }}"
                                autocomplete="off"
                                required>

                        </div>

                        @error('nim')
                        <div class="text-danger small mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="mb-3">

                            <label class="form-label">
                                Email
                            </label>

                            <input
                                type="email"
                                name="email"
                                class="form-control"
                                placeholder="Masukkan email"
                                value="{{ old('email') }}"
                                autocomplete="email"
                                required>

                        </div>

                        @error('email')
                        <div class="text-danger small mt-1">
                            {{ $message }}
                        </div>
                        @enderror

                        <div class="mb-4">

                            <label class="form-label">
                                Password
                            </label>

                            <div class="input-group">

                                <input
                                    type="password"
                                    id="password"
                                    name="password"
                                    class="form-control"
                                    placeholder="Masukkan password"
                                    autocomplete="current-password"
                                    required>

                                <button
                                    class="btn btn-outline-secondary"
                                    type="button"
                                    id="togglePassword">

                                    <i class="bi bi-eye"></i>

                                </button>

                            </div>

                            @error('password')
                            <div class="text-danger small mt-1">
                                {{ $message }}
                            </div>
                            @enderror

                        </div>

                        <div class="d-grid">

                            <button
                                type="submit"
                                class="btn btn-login">

                                Login

                            </button>

                        </div>

                    </form>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection