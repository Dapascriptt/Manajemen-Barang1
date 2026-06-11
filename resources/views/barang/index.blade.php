@extends('layouts.app')

@section('title', 'Daftar Barang')

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
    <div>
        <h1 class="h3 mb-1">Daftar Barang</h1>
        <p class="text-muted mb-0">Kelola data barang Anda dengan cepat dan mudah.</p>
    </div>
    <a href="{{ route('barang.create') }}" class="btn btn-success">Tambah Barang</a>
</div>

<form method="GET" action="{{ route('barang.index') }}" class="row g-2 mb-4">
    <div class="col-md-9">
        <input type="text" name="search" value="{{ old('search', $search) }}" class="form-control" placeholder="Cari nama barang atau kategori...">
    </div>
    <div class="col-md-3 d-grid">
        <button type="submit" class="btn btn-primary">Cari</button>
    </div>
</form>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($barangs->count())
    <div class="table-responsive">
        <table class="table table-bordered table-striped align-middle mb-0">
            <thead class="table-light">
                <tr>
                    <th>#</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Stok</th>
                    <th>Harga</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barangs as $index => $barang)
                    <tr>
                        <td>{{ $barangs->firstItem() + $index }}</td>
                        <td>{{ $barang->nama_barang }}</td>
                        <td>{{ $barang->kategori }}</td>
                        <td>{{ $barang->stok }}</td>
                        <td>Rp {{ number_format($barang->harga, 0, ',', '.') }}</td>
                        <td>
                            <a href="{{ route('barang.show', $barang) }}" class="btn btn-sm btn-info me-1">Detail</a>
                            <a href="{{ route('barang.edit', $barang) }}" class="btn btn-sm btn-warning text-white me-1">Edit</a>
                            <form action="{{ route('barang.destroy', $barang) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Hapus barang ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="mt-3">{{ $barangs->links('pagination::bootstrap-5') }}</div>
@else
    <div class="alert alert-warning">Data barang tidak ditemukan. Silakan tambahkan barang baru.</div>
@endif
@endsection
