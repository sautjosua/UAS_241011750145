@extends('layouts.app')

@section('title', 'Detail Koleksi Fashion')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('fashion.index') }}" class="text-decoration-none">Koleksi Fashion</a></li>
    <li class="breadcrumb-item active">Detail</li>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h6 class="mb-0 fw-bold"><i class="bi bi-info-circle me-2"></i>Detail Koleksi Fashion</h6>
                <div class="d-flex gap-2">
                    <a href="{{ route('fashion.edit', $fashion->id_fashion) }}" class="btn btn-warning btn-sm">
                        <i class="bi bi-pencil me-1"></i>Edit
                    </a>
                    <a href="{{ route('fashion.index') }}" class="btn btn-secondary btn-sm">
                        <i class="bi bi-arrow-left me-1"></i>Kembali
                    </a>
                </div>
            </div>
            <div class="card-body p-4">
                <div class="row">
                    <div class="col-md-4 text-center mb-4 mb-md-0">
                        @if($fashion->gambar)
                            <img src="{{ asset('storage/' . $fashion->gambar) }}" alt="{{ $fashion->nama_item }}"
                                 class="img-fluid rounded-3 shadow" style="max-height:280px;object-fit:cover;width:100%">
                        @else
                            <div class="bg-light rounded-3 d-flex align-items-center justify-content-center" style="height:280px">
                                <i class="bi bi-image text-muted" style="font-size:4rem"></i>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-8">
                        <table class="table table-borderless">
                            <tr>
                                <td class="text-muted fw-semibold" width="150">ID Fashion</td>
                                <td>: <span class="badge bg-secondary">{{ $fashion->id_fashion }}</span></td>
                            </tr>
                            <tr>
                                <td class="text-muted fw-semibold">Nama Item</td>
                                <td>: <strong>{{ $fashion->nama_item }}</strong></td>
                            </tr>
                            <tr>
                                <td class="text-muted fw-semibold">Brand</td>
                                <td>: {{ $fashion->brand }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted fw-semibold">Ukuran</td>
                                <td>: <span class="badge px-3 py-2" style="background:#e0e7ff;color:#4f46e5">{{ $fashion->ukuran }}</span></td>
                            </tr>
                            <tr>
                                <td class="text-muted fw-semibold">Warna</td>
                                <td>: {{ $fashion->warna }}</td>
                            </tr>
                            <tr>
                                <td class="text-muted fw-semibold">Ditambahkan</td>
                                <td>: {{ $fashion->created_at->format('d M Y, H:i') }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection