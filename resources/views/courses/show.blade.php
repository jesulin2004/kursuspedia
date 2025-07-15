@extends('layouts.app')

@section('content')
<div class="container py-5">
    <h2>{{ $course['title'] }}</h2>
    <p>{{ $course['description'] }}</p>
    <h4>Harga: Rp {{ number_format($course['price'], 0, ',', '.') }}</h4>

    <a href="{{ route('payment.checkout', $course['slug']) }}" class="btn btn-primary mt-3">
        Daftar Sekarang
    </a>
</div>
@endsection
