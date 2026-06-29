@extends('layouts.app')

@section('title', 'Tambah Koleksi Fashion')
@section('breadcrumb')
    <li class="breadcrumb-item"><a href="{{ route('fashion.index') }}" class="text-decoration-none">Koleksi Fashion</a></li>
    <li class="breadcrumb-item active">Tambah Data</li>
@endsection

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-8">
        <div class="card">
            <div class="card-header">
                <h6 class="mb-0 fw-bold"><i class="bi bi-plus-circle me-2"></i>Tambah Koleksi Fashion</h6>
            </div>
            <div class="card-body p-4">
                <form action="{{ route('fashion.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="text-center mb-4">
                        <div id="imgPreviewWrapper" class="d-none mb-2">
                            <img id="imgPreview" src="#" alt="Preview"
                                 style="max-height:200px;border-radius:0.75rem;object-fit:cover">
                        </div>
                        <label for="gambar" class="btn btn-outline-primary btn-sm">
                            <i class="bi bi-upload me-1"></i>Upload Gambar
                        </label>
                        <input type="file" name="gambar" id="gambar" class="d-none"
                               accept="image/*" onchange="previewImage(this)">
                        <div class="form-text">Format: JPG, PNG, WEBP. Maks 2MB</div>
                        @error('gambar')
                            <div class="text-danger small">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Nama Item <span class="text-danger">*</span></label>
                            <input type="text" name="nama_item" class="form-control @error('nama_item') is-invalid @enderror"
                                   value="{{ old('nama_item') }}" placeholder="Contoh: Kemeja Flanel Premium">
                            @error('nama_item')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Brand <span class="text-danger">*</span></label>
                            <input type="text" name="brand" class="form-control @error('brand') is-invalid @enderror"
                                   value="{{ old('brand') }}" placeholder="Contoh: Uniqlo, H&M, Zara">
                            @error('brand')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Ukuran <span class="text-danger">*</span></label>
                            <select name="ukuran" class="form-select @error('ukuran') is-invalid @enderror">
                                <option value="">-- Pilih Ukuran --</option>
                                @foreach(['XS','S','M','L','XL','XXL','XXXL'] as $uk)
                                    <option value="{{ $uk }}" {{ old('ukuran') == $uk ? 'selected' : '' }}>{{ $uk }}</option>
                                @endforeach
                            </select>
                            @error('ukuran')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="col-md-6">
                            <label class="form-label fw-semibold">Warna <span class="text-danger">*</span></label>
                            <input type="text" name="warna" class="form-control @error('warna') is-invalid @enderror"
                                   value="{{ old('warna') }}" placeholder="Contoh: Merah, Navy Blue">
                            @error('warna')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="d-flex gap-2 justify-content-end mt-4">
                        <a href="{{ route('fashion.index') }}" class="btn btn-secondary">
                            <i class="bi bi-arrow-left me-1"></i>Batal
                        </a>
                        <button type="submit" class="btn btn-primary">
                            <i class="bi bi-save me-1"></i>Simpan Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
function previewImage(input) {
    if (input.files && input.files[0]) {
        const reader = new FileReader();
        reader.onload = function(e) {
            document.getElementById('imgPreview').src = e.target.result;
            document.getElementById('imgPreviewWrapper').classList.remove('d-none');
        };
        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endpush