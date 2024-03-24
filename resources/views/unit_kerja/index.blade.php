<!-- resources/views/unit_kerja/index.blade.php -->
@extends('template-wpadmin')

@section('navbar_unit_kerja', 'active')

@section('main')
    <div class="container">
        <h1>Daftar Unit Kerja</h1>
        <a href="{{ route('unit_kerja.create') }}" class="btn btn-primary mb-3">Tambah Unit Kerja</a>
        <form action="{{ route('unit_kerja.index') }}" method="GET" class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Unit Kerja" value="{{ request('search') }}">
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
                    <th>Unit Kerja</th>
                    <th>Aksi</th>
                    <!-- Tambahkan kolom lainnya sesuai kebutuhan -->
                </tr>
            </thead>
            <tbody>
                @forelse ($unitKerjas as $p)
                    <tr>
                        <td>{{ $p->Unit_Kerja }}</td>
                        <!-- Tambahkan data-data lain sesuai kebutuhan -->
                        <td>
                            <a href="{{ route('unit_kerja.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('unit_kerja.destroy', $p->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus unit_kerja ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2">Tidak ada data unit_kerja.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>

        {{ $unitKerjas->links() }}
    </div>
@endsection
