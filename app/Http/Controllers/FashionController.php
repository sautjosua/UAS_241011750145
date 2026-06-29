<?php

namespace App\Http\Controllers;

use App\Models\Fashion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class FashionController extends Controller
{
    public function index()
    {
        $fashion = Fashion::latest()->paginate(10);
        return view('fashion.index', compact('fashion'));
    }

    public function create()
    {
        return view('fashion.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'ukuran'    => 'required|string|max:50',
            'warna'     => 'required|string|max:100',
            'brand'     => 'required|string|max:255',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'nama_item.required' => 'Nama item wajib diisi.',
            'ukuran.required'    => 'Ukuran wajib diisi.',
            'warna.required'     => 'Warna wajib diisi.',
            'brand.required'     => 'Brand wajib diisi.',
        ]);

        $data = $request->only(['nama_item', 'ukuran', 'warna', 'brand']);

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('fashion', 'public');
        }

        Fashion::create($data);

        return redirect()->route('fashion.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function show(Fashion $fashion)
    {
        return view('fashion.show', compact('fashion'));
    }

    public function edit(Fashion $fashion)
    {
        return view('fashion.edit', compact('fashion'));
    }

    public function update(Request $request, Fashion $fashion)
    {
        $request->validate([
            'nama_item' => 'required|string|max:255',
            'ukuran'    => 'required|string|max:50',
            'warna'     => 'required|string|max:100',
            'brand'     => 'required|string|max:255',
            'gambar'    => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ], [
            'nama_item.required' => 'Nama item wajib diisi.',
            'ukuran.required'    => 'Ukuran wajib diisi.',
            'warna.required'     => 'Warna wajib diisi.',
            'brand.required'     => 'Brand wajib diisi.',
        ]);

        $data = $request->only(['nama_item', 'ukuran', 'warna', 'brand']);

        if ($request->hasFile('gambar')) {
            if ($fashion->gambar) {
                Storage::disk('public')->delete($fashion->gambar);
            }
            $data['gambar'] = $request->file('gambar')->store('fashion', 'public');
        }

        $fashion->update($data);

        return redirect()->route('fashion.index')->with('success', 'Data berhasil diperbarui!');
    }

    public function destroy(Fashion $fashion)
    {
        if ($fashion->gambar) {
            Storage::disk('public')->delete($fashion->gambar);
        }
        $fashion->delete();

        return redirect()->route('fashion.index')->with('success', 'Data berhasil dihapus!');
    }

    public function exportPdf()
    {
        $fashion = Fashion::all();
        $pdf = Pdf::loadView('fashion.pdf', compact('fashion'))
                  ->setPaper('a4', 'landscape');

        return $pdf->download('laporan_koleksi_fashion.pdf');
    }
}