@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')
<div class="mb-4">
    <h1 class="h3 mb-1">Tambah Barang</h1>
    <p class="text-muted">Isi data barang baru dengan lengkap.</p>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul class="mb-0">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('barang.store') }}" method="POST">
    @csrf

    <div class="mb-3">
        <label for="nama_barang" class="form-label required">Nama Barang</label>
        <input type="text" name="nama_barang" id="nama_barang" class="form-control" value="{{ old('nama_barang') }}" required>
    </div>

    <div class="mb-3">
        <label for="kategori" class="form-label required">Kategori</label>
        <input type="text" name="kategori" id="kategori" class="form-control" value="{{ old('kategori') }}" required>
    </div>

    <div class="row g-3">
        <div class="col-md-6">
            <label for="stok" class="form-label required">Stok</label>
            <input type="number" name="stok" id="stok" class="form-control" value="{{ old('stok', 0) }}" min="0" required>
        </div>
        <div class="col-md-6">
            <label for="harga" class="form-label required">Harga</label>
            <input type="number" name="harga" id="harga" class="form-control" value="{{ old('harga', 0) }}" min="0" step="0.01" required>
        </div>
    </div>

    <div class="mb-3 mt-3">
        <label for="deskripsi" class="form-label">Deskripsi</label>
        <textarea name="deskripsi" id="deskripsi" rows="4" class="form-control">{{ old('deskripsi') }}</textarea>
    </div>

    <div class="d-flex gap-2">
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('barang.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</form>
@endsection
