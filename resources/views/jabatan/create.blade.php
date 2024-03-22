<!-- resources/views/jabatan/create.blade.php -->
@extends('template-wpadmin')

@section('navbar_jabatan', 'active')

@section('main')
    <div class="container">
        <h1>Tambah jabatan</h1>
        <form action="{{ route('jabatan.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="Golongan">Golongan:</label>
                <input type="text" name="Golongan" class="form-control">
            </div>
            <div class="form-group">
                <label for="Eselon">Eselon:</label>
                <input type="text" name="Eselon" class="form-control">
            </div>
            <div class="form-group">
                <label for="Jabatan">Jabatan:</label>
                <input type="text" name="Jabatan" class="form-control">
            </div>
            <div class="form-group">
                <label for="Tempat_Tugas">Tempat Tugas:</label>
                <input type="text" name="Tempat_Tugas" class="form-control">
            </div>
            <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
