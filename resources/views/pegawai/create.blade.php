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
            <div class="form-group">
                <label for="jabatan_id">Jabatan:</label>
                {{-- tambah tombol jabatan --}}
                <a href="{{ route('jabatan.create') }}" class="btn btn-primary">Tambah Jabatan</a>
                <select name="jabatan_id" class="form-control">
                    <option>Pilih Jabatan</option>
                    @foreach ($jabatans as $item)
                        <option value="{{ $item->id }}">{{ $item->Jabatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="unit_kerja_id">Unit Kerja:</label>
                {{-- tambah tombol unit kerja --}}
                <a href="{{ route('unit_kerja.create') }}" class="btn btn-primary">Tambah Unit Kerja</a>
                <select name="unit_kerja_id" class="form-control">
                    <option>Pilih Unit Kerja</option>
                    @foreach ($unit_kerjas as $item)
                        <option value="{{ $item->id }}">{{ $item->Unit_Kerja }}</option>
                    @endforeach
                </select>
            </div>
            <!-- Tambahkan input untuk kolom lainnya sesuai kebutuhan -->
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
