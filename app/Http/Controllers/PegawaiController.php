<?php

namespace App\Http\Controllers;
use App\Models\Pegawai;
use App\Models\UnitKerja;
use Illuminate\Http\Request;


class PegawaiController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $unit_kerja_id = $request->get('unit_kerja_id');

        $query = Pegawai::query();

        // Filter berdasarkan unit kerja jika unit kerja dipilih
        if ($unit_kerja_id) {
            $query->where('unit_kerja_id', $unit_kerja_id);
        }

        // Pencarian pegawai berdasarkan NIP atau Nama jika kata kunci pencarian diberikan
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('NIP', 'like', '%' . $search . '%')
                    ->orWhere('Nama', 'like', '%' . $search . '%');
            });
        }

        $pegawai = $query->paginate(10);

        $unit_kerja = UnitKerja::all();

        return view('pegawai.index', compact('pegawai', 'unit_kerja'));
    }

    public function print(Request $request)
    {
        $pegawai = Pegawai::all();

        return view('pegawai.print', compact('pegawai'));
    }

    public function create()
    {
        return view('pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            // Atur aturan validasi sesuai kebutuhan Anda
        ]);

        $pegawai = Pegawai::create($request->all());

        // Tambahkan logika untuk mengelola upload foto pegawai

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil ditambahkan.');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            // Atur aturan validasi sesuai kebutuhan Anda
        ]);

        $pegawai->update($request->all());

        // Tambahkan logika untuk mengelola upload foto pegawai

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil diperbarui.');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();

        return redirect()->route('pegawai.index')->with('success', 'Pegawai berhasil dihapus.');
    }

    // Tambahkan fungsi-fungsi lain sesuai kebutuhan seperti pencarian, menampilkan pegawai berdasarkan unit kerja, dll.
}
