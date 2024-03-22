<!-- resources/views/pegawai/create.blade.php -->
@extends('template-wpadmin')

@section('navbar_pegawai', 'active')

@section('main')
    <div class="container">
        <h1>Tambah Pegawai</h1>
        <form action="{{ route('pegawai.upload', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="file">File:</label>
                <input type="file" name="photo" class="form-control">
            </div>
            <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
