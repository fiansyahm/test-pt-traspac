<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index()
    {
        $jabatans = Jabatan::all();
        return view('jabatan.index', compact('jabatans'));
    }

    public function create()
    {
        return view('jabatan.create');
    }

    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'Jabatan' => 'required|string|max:255|unique:jabatans',
            'Golongan' => 'required|string|max:255',
            'Eselon' => 'required|string|max:255',
            'Tempat_Tugas' => 'required|string|max:255',
        ]);

        // Simpan data
        Jabatan::create($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil ditambahkan.');
    }

    public function edit(Jabatan $jabatan)
    {
        return view('jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, Jabatan $jabatan)
    {
        // Validasi data
        $request->validate([
            'nama' => 'required|string|max:255|unique:jabatans,nama,' . $jabatan->id,
            // tambahkan validasi sesuai kebutuhan
        ]);

        // Perbarui data
        $jabatan->update($request->all());

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil diperbarui.');
    }

    public function destroy(Jabatan $jabatan)
    {
        // Hapus data
        $jabatan->delete();

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil dihapus.');
    }
}
