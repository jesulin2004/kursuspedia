<!-- resources/views/courses/show.blade.php -->
@extends('layouts.app')

@push('styles')
    <!-- Tambahan jika belum ada di layouts.app -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
@endpush

@section('content')

<!-- NAVBAR ala TemplateMo -->
<nav class="navbar navbar-expand-lg bg-white shadow-sm sticky-top py-3">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}">
            <img src="{{ asset('assets/KURSUSPEDIAlogo.png') }}" alt="Logo" style="height: 50px;" class="me-2">
            <span class="fw-bold text-success fs-4">KursusPedia</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="/">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link fw-semibold" href="#section_2">Kontak</a>
                </li>
                @auth
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-bs-toggle="dropdown">
                        {{ Auth::user()->name }}
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="/dashboard">Dashboard</a></li>
                        <li><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a></li>
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                </li>
                @else
                <li class="nav-item">
                    <a class="btn btn-outline-success rounded-pill me-2" href="{{ route('login') }}">Masuk</a>
                    <a class="btn btn-success rounded-pill" href="{{ route('register') }}">Daftar</a>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>

<!-- DETAIL KURSUS -->
<section class="py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card border-0 shadow-lg rounded-4 overflow-hidden">
                    <div class="row g-0 align-items-center">
                        <div class="col-md-7 p-5">
                            <h6 class="text-uppercase text-success fw-semibold mb-2">Kursus Populer</h6>
                            <h2 class="fw-bold mb-3">{{ $course['title'] }}</h2>
                            <p class="text-secondary mb-4">{{ $course['description'] }}</p>
                            <div class="d-flex align-items-center mb-3">
                                <h4 class="text-success fw-bold mb-0 me-3">Rp {{ number_format($course['price'], 0, ',', '.') }}</h4>
                                <a href="{{ route('payment.checkout', $course['slug']) }}" class="btn btn-primary btn-lg rounded-pill">
                                    🚀 Daftar Sekarang
                                </a>
                            </div>
                            <ul class="list-unstyled small text-muted mt-3">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Materi lengkap dan up-to-date</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Akses seumur hidup</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i> Sertifikat resmi setelah lulus</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
