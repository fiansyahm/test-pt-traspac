<!-- resources/views/jabatan/edit.blade.php -->
@extends('template-wpadmin')

@section('navbar_jabatan', 'active')

@section('main')
    <div class="container">
        <h1>Edit jabatan</h1>
        <form action="{{ route('jabatan.update', $jabatan->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="NIP">NIP:</label>
                <input type="text" name="NIP" class="form-control" value="{{ $jabatan->NIP }}">
            </div>
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" name="Nama" class="form-control" value="{{ $jabatan->Nama }}">
            </div>
            <div class="form-group">
                <label for="Tempat_Lahir">Tempat Lahir:</label>
                <input type="text" name="Tempat_Lahir" class="form-control" value="{{ $jabatan->Tempat_Lahir }}">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <textarea name="Alamat" class="form-control">{{ $jabatan->Alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="Tanggal_Lahir">Tanggal Lahir:</label>
                <input type="date" name="Tanggal_Lahir" class="form-control" value="{{ $jabatan->Tanggal_Lahir }}">
            </div>
            <div class="form-group">
                <label for="Jenis_Kelamin">Jenis Kelamin:</label>
                <select name="Jenis_Kelamin" class="form-control">
                    <option value="Laki-laki" {{ $jabatan->Jenis_Kelamin == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                    <option value="Perempuan" {{ $jabatan->Jenis_Kelamin == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Agama">Agama:</label>
                <input type="text" name="Agama" class="form-control" value="{{ $jabatan->Agama }}">
            </div>
            <div class="form-group">
                <label for="No_HP">No_HP:</label>
                <input type="text" name="No_HP" class="form-control" value="{{ $jabatan->No_HP }}">
            </div>
            <div class="form-group">
                <label for="NPWP">NPWP:</label>
                <input type="text" name="NPWP" class="form-control" value="{{ $jabatan->NPWP }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
