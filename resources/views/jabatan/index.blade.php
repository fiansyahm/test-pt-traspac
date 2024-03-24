<!-- resources/views/jabatan/index.blade.php -->
@extends('template-wpadmin')

@section('navbar_jabatan', 'active')

@section('main')
    <div class="container">
        <h1>Daftar jabatan</h1>
        <a href="{{ route('jabatan.create') }}" class="btn btn-primary mb-3">Tambah jabatan</a>
        <form action="{{ route('jabatan.index') }}" method="GET" class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari Jabatan, Eselon, Golongan, Tempat Tugas" value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>

        <table class="table">
            <thead>
                <tr>
                    <th>Jabatan</th>
                    <th>Eselon</th>
                    <th>Golongan</th>
                    <th>Tempat Tugas</th>
                    <th>Aksi</th>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @forelse ($jabatan as $p)
                    <tr>
                        <td>{{ $p->Jabatan }}</td>
                        <td>{{ $p->Eselon }}</td>
                        <td>{{ $p->Golongan }}</td>
                        <td>{{ $p->Tempat_Tugas }}</td>
                        <!-- Tambahkan data-data lain sesuai kebutuhan -->
                        <td>
                            <a href="{{ route('jabatan.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('jabatan.destroy', $p->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus jabatan ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Tidak ada data jabatan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $jabatan->links() }}
    </div>
@endsection
