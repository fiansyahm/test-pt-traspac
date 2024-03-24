<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');
        $query = UnitKerja::query();

        // Pencarian jabatan berdasarkan NIP atau Nama jika kata kunci pencarian diberikan
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('Unit_Kerja', 'like', '%' . $search . '%');
            });
        }

        $unitKerjas = $query->paginate(10);

        return view('unit_kerja.index', compact('unitKerjas'));
    }

    public function create()
    {
        return view('unit_kerja.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'Unit_Kerja' => 'required|string|max:255|unique:unit_kerjas',
            // tambahkan validasi sesuai kebutuhan
        ]);

        // Simpan data
        UnitKerja::create($request->all());

        return redirect()->route('unit_kerja.index')->with('success', 'Unit Kerja berhasil ditambahkan.');
    }

    public function edit(UnitKerja $unit_kerja)
    {
        return view('unit_kerja.edit', compact('unit_kerja'));
    }

    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            // tambahkan validasi sesuai kebutuhan
        ]);

        $unit_kerja = UnitKerja::find($id);

        $unit_kerja->update($request->all());

        return redirect()->route('unit_kerja.index')->with('success', 'Unit Kerja berhasil diperbarui.');
    }

    public function destroy(UnitKerja $unit_kerja)
    {
        // Hapus data
        $unit_kerja->delete();

        return redirect()->route('unit_kerja.index')->with('success', 'Unit Kerja berhasil dihapus.');
    }
}
