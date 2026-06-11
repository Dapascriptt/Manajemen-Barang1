@extends('layouts.app')

@section('title', 'Selamat Datang')

@section('content')
<div class="row align-items-center min-vh-75">
    <div class="col-lg-7">
        <div class="card shadow-sm border-0">
            <div class="card-body p-5">
                <h1 class="display-6 mb-3">Aplikasi Manajemen Barang</h1>
                <p class="lead text-secondary mb-4">Sistem sederhana untuk belajar CRUD barang dengan login, dashboard, dan pengelolaan stok.</p>
                <div class="d-grid gap-2 d-sm-flex">
                    <a href="{{ route('login') }}" class="btn btn-primary btn-lg">Login</a>
                    <a href="{{ route('register') }}" class="btn btn-outline-primary btn-lg">Register</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5 mt-4 mt-lg-0">
        <div class="card shadow-sm border-0 bg-light">
            <div class="card-body p-4">
                <h2 class="h5 mb-3">Fitur Utama</h2>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">Login dan register sederhana</li>
                    <li class="list-group-item">Dashboard dengan total barang</li>
                    <li class="list-group-item">CRUD data barang</li>
                    <li class="list-group-item">Pencarian barang</li>
                    <li class="list-group-item">Bootstrap 5 responsif</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
