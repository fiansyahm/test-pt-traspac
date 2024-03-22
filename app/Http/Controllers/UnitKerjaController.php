<?php

namespace App\Http\Controllers;

use App\Models\UnitKerja;
use Illuminate\Http\Request;

class UnitKerjaController extends Controller
{
    public function index()
    {
        $unitKerjas = UnitKerja::all();
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

    public function update(Request $request, UnitKerja $unit_kerja)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255|unique:unit_kerjas,nama,' . $unit_kerja->id,
            // tambahkan validasi sesuai kebutuhan
        ]);

        // Perbarui data
        $unit_kerja->update($request->all());

        return redirect()->route('unit-kerja.index')->with('success', 'Unit Kerja berhasil diperbarui.');
    }

    public function destroy(UnitKerja $unit_kerja)
    {
        // Hapus data
        $unit_kerja->delete();

        return redirect()->route('unit-kerja.index')->with('success', 'Unit Kerja berhasil dihapus.');
    }
}
