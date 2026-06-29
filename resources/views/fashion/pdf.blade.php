<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Laporan Koleksi Fashion</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body { font-family: 'DejaVu Sans', Arial, sans-serif; font-size: 11px; color: #333; }
        .header { text-align: center; margin-bottom: 20px; border-bottom: 2px solid #6366f1; padding-bottom: 12px; }
        .header h2 { font-size: 16px; color: #4f46e5; }
        .header p { font-size: 10px; color: #666; margin-top: 4px; }
        table { width: 100%; border-collapse: collapse; margin-top: 10px; }
        thead th { background: #6366f1; color: #fff; padding: 8px 6px; text-align: left; font-size: 10px; }
        tbody tr:nth-child(even) { background: #f5f3ff; }
        tbody td { padding: 7px 6px; border-bottom: 1px solid #e5e7eb; font-size: 10px; }
        .footer { margin-top: 20px; text-align: right; font-size: 9px; color: #888; }
        img.thumb { width: 50px; height: 50px; object-fit: cover; }
    </style>
</head>
<body>
    <div class="header">
        <h2>LAPORAN DATA KOLEKSI FASHION</h2>
        <p>ROMARTUA Collection &mdash; Universitas Pamulang</p>
        <p>NIM: 241011750145 &bull; Dicetak: {{ now()->format('d M Y, H:i') }} WIB</p>
    </div>

    <table>
        <thead>
            <tr>
                <th width="30">No</th>
                <th width="40">ID</th>
                <th width="60">Gambar</th>
                <th>Nama Item</th>
                <th width="60">Ukuran</th>
                <th>Warna</th>
                <th>Brand</th>
                <th>Tgl Input</th>
            </tr>
        </thead>
        <tbody>
            @forelse($fashion as $i => $item)
            <tr>
                <td>{{ $i + 1 }}</td>
                <td>{{ $item->id_fashion }}</td>
                <td>
                    @if($item->gambar)
                        <img class="thumb" src="{{ storage_path('app/public/' . $item->gambar) }}">
                    @else
                        -
                    @endif
                </td>
                <td><strong>{{ $item->nama_item }}</strong></td>
                <td>{{ $item->ukuran }}</td>
                <td>{{ $item->warna }}</td>
                <td>{{ $item->brand }}</td>
                <td>{{ $item->created_at->format('d/m/Y') }}</td>
            </tr>
            @empty
            <tr>
                <td colspan="8" style="text-align:center;padding:20px;color:#888">Belum ada data</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <div class="footer">
        <p>Rekayasa Web &bull; Prodi Sistem Informasi S-1 &bull; Universitas Pamulang</p>
    </div>
</body>
</html>