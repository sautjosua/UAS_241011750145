@extends('layouts.app')

@section('title', 'Data Koleksi Fashion')
@section('breadcrumb')
    <li class="breadcrumb-item active">Koleksi Fashion</li>
@endsection

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <div>
        <h4 class="fw-bold mb-1">Data Koleksi Fashion</h4>
        <p class="text-muted mb-0 small">Kelola data koleksi fashion Anda</p>
    </div>
    <div class="d-flex gap-2">
        <a href="{{ route('fashion.export.pdf') }}" class="btn btn-danger btn-sm">
            <i class="bi bi-file-earmark-pdf me-1"></i>Export PDF
        </a>
        <a href="{{ route('fashion.create') }}" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-lg me-1"></i>Tambah Data
        </a>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h6 class="mb-0 fw-bold"><i class="bi bi-table me-2"></i>Tabel Koleksi Fashion</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="fashionTable" class="table table-hover align-middle">
                <thead>
                    <tr>
                        <th width="50">No</th>
                        <th width="70">Gambar</th>
                        <th>Nama Item</th>
                        <th>Ukuran</th>
                        <th>Warna</th>
                        <th>Brand</th>
                        <th width="150">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($fashion as $i => $item)
                    <tr>
                        <td>{{ $fashion->firstItem() + $i }}</td>
                        <td>
                            @if($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_item }}" class="thumb">
                            @else
                                <div class="thumb d-flex align-items-center justify-content-center bg-light">
                                    <i class="bi bi-image text-muted"></i>
                                </div>
                            @endif
                        </td>
                        <td class="fw-semibold">{{ $item->nama_item }}</td>
                        <td><span class="badge rounded-pill px-3" style="background:#e0e7ff;color:#4f46e5">{{ $item->ukuran }}</span></td>
                        <td>{{ $item->warna }}</td>
                        <td>{{ $item->brand }}</td>
                        <td>
                            <a href="{{ route('fashion.show', $item->id_fashion) }}" class="btn btn-info btn-sm" title="Detail">
                                <i class="bi bi-eye"></i>
                            </a>
                            <a href="{{ route('fashion.edit', $item->id_fashion) }}" class="btn btn-warning btn-sm" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="{{ route('fashion.destroy', $item->id_fashion) }}" method="POST" class="d-inline"
                                  onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center py-5 text-muted">
                            <i class="bi bi-inbox fs-1 d-block mb-2"></i>
                            Belum ada data. <a href="{{ route('fashion.create') }}">Tambah sekarang</a>
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        <div class="mt-3">{{ $fashion->links() }}</div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('#fashionTable').DataTable({
            paging: false,
            info: false,
            searching: true,
            ordering: true,
            language: {
                search: "Cari:",
                zeroRecords: "Data tidak ditemukan",
            }
        });
    });
</script>
@endpush