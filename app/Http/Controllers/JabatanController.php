<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;

class JabatanController extends Controller
{
    public function index(Request $request)
    {
        $search = $request->get('search');

        $query = Jabatan::query();

        // Pencarian jabatan berdasarkan NIP atau Nama jika kata kunci pencarian diberikan
        if (!empty($search)) {
            $query->where(function ($q) use ($search) {
                $q->where('Jabatan', 'like', '%' . $search . '%')
                    ->orWhere('Golongan', 'like', '%' . $search . '%')
                    ->orWhere('Eselon', 'like', '%' . $search . '%')
                    ->orWhere('Tempat_Tugas', 'like', '%' . $search . '%');
            });
        }

        $jabatan = $query->paginate(10);

        return view('jabatan.index', compact('jabatan'));
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

    public function update(Request $request,$id)
    {
        $request->validate([
            // Atur aturan validasi sesuai kebutuhan Anda
        ]);

        $jabatan = Jabatan::find($id);

        $jabatan->update($request->all());

        // Tambahkan logika untuk mengelola upload foto jabatan

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil diperbarui.');
    }

    public function destroy(Jabatan $jabatan)
    {
        // Hapus data
        $jabatan->delete();

        return redirect()->route('jabatan.index')->with('success', 'Jabatan berhasil dihapus.');
    }
}
