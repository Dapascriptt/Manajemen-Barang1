@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
<div class="row gy-4">
    <div class="col-12">
        <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center gap-3">
            <div>
                <h1 class="h3 mb-1">Dashboard</h1>
                <p class="text-muted mb-0">Halo, {{ auth()->user()->name }}. Ini ringkasan barang Anda.</p>
            </div>
            <a href="{{ route('barang.index') }}" class="btn btn-success">Lihat Data Barang</a>
        </div>
    </div>

    <div class="col-md-6 col-xl-4">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h6 class="text-uppercase text-muted mb-2">Total Barang</h6>
                <h2 class="mb-0">{{ $totalBarang }}</h2>
                <p class="text-muted mb-0">Jumlah barang saat ini di dalam sistem.</p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="card shadow-sm border-0">
            <div class="card-body">
                <h5>Petunjuk Singkat</h5>
                <p class="text-muted mb-0">Gunakan menu Data Barang untuk menambahkan, melihat, mengedit, atau menghapus barang. Semua halaman data barang hanya dapat diakses setelah login.</p>
            </div>
        </div>
    </div>
</div>
@endsection
