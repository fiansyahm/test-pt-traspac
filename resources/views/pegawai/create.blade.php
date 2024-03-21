<!-- resources/views/pegawai/create.blade.php -->
@extends('template-wpadmin')

@section('navbar_pegawai', 'active')

@section('main')
    <div class="container">
        <h1>Tambah Pegawai</h1>
        <form action="{{ route('pegawai.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="NIP">NIP:</label>
                <input type="text" name="NIP" class="form-control">
            </div>
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" name="Nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="Tempat_Lahir">Tempat Lahir:</label>
                <input type="text" name="Tempat_Lahir" class="form-control">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <textarea name="Alamat" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="Tanggal_Lahir">Tanggal Lahir:</label>
                <input type="date" name="Tanggal_Lahir" class="form-control">
            </div>
            <div class="form-group">
                <label for="Jenis_Kelamin">Jenis Kelamin:</label>
                <select name="Jenis_Kelamin" class="form-control">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Agama">Agama:</label>
                <input type="text" name="Agama" class="form-control">
            </div>
            <div class="form-group">
                <label for="No_HP">No_HP:</label>
                <input type="text" name="No_HP" class="form-control">
            </div>
            <div class="form-group">
                <label for="NPWP">NPWP:</label>
                <input type="text" name="NPWP" class="form-control">
            </div>
            <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
