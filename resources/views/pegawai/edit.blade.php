<!-- resources/views/pegawai/edit.blade.php -->
@extends('template-wpadmin')

@section('navbar_pegawai', 'active')

@section('main')
    <div class="container">
        <h1>Edit Pegawai</h1>
        <form action="{{ route('pegawai.update', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="NIP">NIP:</label>
                <input type="text" name="NIP" class="form-control" value="{{ $pegawai->NIP }}">
            </div>
            <div class="form-group">
                <label for="Nama">Nama:</label>
                <input type="text" name="Nama" class="form-control" value="{{ $pegawai->Nama }}">
            </div>
            <div class="form-group">
                <label for="Tempat_Lahir">Tempat Lahir:</label>
                <input type="text" name="Tempat_Lahir" class="form-control" value="{{ $pegawai->Tempat_Lahir }}">
            </div>
            <div class="form-group">
                <label for="Alamat">Alamat:</label>
                <textarea name="Alamat" class="form-control">{{ $pegawai->Alamat }}</textarea>
            </div>
            <div class="form-group">
                <label for="Tanggal_Lahir">Tanggal Lahir:</label>
                <input type="date" name="Tanggal_Lahir" class="form-control" value="{{ $pegawai->Tanggal_Lahir }}">
            </div>
            <div class="form-group">
                <label>Jenis Kelamin:</label><br>
                <label for="laki-laki"><input type="radio" id="laki-laki" name="jenis_kelamin" value="Laki-laki"> Laki-laki</label><br>
                <label for="perempuan"><input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan"> Perempuan</label><br>
                <select name="Jenis_Kelamin" id="jenis_kelamin_select" class="form-control" 
                style="display: none;"
                >
                    <option value="Laki-laki" 
                    @if($pegawai->Jenis_Kelamin == "Laki-laki")
                        selected
                    @endif
                    >Laki-laki</option>
                    <option value="Perempuan"
                    @if($pegawai->Jenis_Kelamin == "Perempuan")
                        selected
                    @endif
                    >Perempuan</option>
                </select>
            </div>
            
            <script>
                document.getElementById("laki-laki").addEventListener("click", function() {
                    // select laki-laki
                    document.getElementById("jenis_kelamin_select").value = "Laki-laki";
                });
                document.getElementById("perempuan").addEventListener("click", function() {
                    // select perempuan
                    document.getElementById("jenis_kelamin_select").value = "Perempuan";
                });
                @if($pegawai->Jenis_Kelamin == "Laki-laki")
                    document.getElementById("laki-laki").click();
                @else
                    document.getElementById("perempuan").click();
                @endif
            </script>
            
            <div class="form-group">
                <label for="Agama">Agama:</label>
                <input type="text" name="Agama" class="form-control" value="{{ $pegawai->Agama }}">
            </div>
            <div class="form-group">
                <label for="No_HP">No_HP:</label>
                <input type="text" name="No_HP" class="form-control" value="{{ $pegawai->No_HP }}">
            </div>
            <div class="form-group">
                <label for="NPWP">NPWP:</label>
                <input type="text" name="NPWP" class="form-control" value="{{ $pegawai->NPWP }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
