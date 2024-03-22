<!-- resources/views/unit-kerja/create.blade.php -->
@extends('template-wpadmin')

@section('navbar_unit-kerja', 'active')

@section('main')
    <div class="container">
        <h1>Tambah unit-kerja</h1>
        <form action="{{ route('unit_kerja.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Unit_Kerja">Unit Kerja:</label>
                <input type="text" name="Unit_Kerja" class="form-control">
            </div>
            <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
