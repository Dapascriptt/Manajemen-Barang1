@extends('layouts.app')

@section('title', 'Detail Barang')

@section('content')
<div class="mb-4">
    <h1 class="h3 mb-1">Detail Barang</h1>
    <p class="text-muted">Informasi lengkap barang.</p>
</div>

<div class="card">
    <div class="card-body">
        <h4 class="card-title mb-3">{{ $barang->nama_barang }}</h4>
        <p><strong>Kategori:</strong> {{ $barang->kategori }}</p>
        <p><strong>Stok:</strong> {{ $barang->stok }}</p>
        <p><strong>Harga:</strong> Rp {{ number_format($barang->harga, 0, ',', '.') }}</p>
        <p><strong>Deskripsi:</strong></p>
        <p class="text-muted">{{ $barang->deskripsi ?: 'Tidak ada deskripsi.' }}</p>
    </div>
</div>

<div class="mt-3">
    <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
    <a href="{{ route('barang.edit', $barang) }}" class="btn btn-warning text-white">Edit</a>
</div>
@endsection
