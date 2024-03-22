<!-- resources/views/pegawai/index.blade.php -->
@extends('template-wpadmin')

@section('navbar_pegawai', 'active')

@section('main')
    <div class="container">
        <h1>Daftar Pegawai</h1>
        <a href="{{ route('pegawai.create') }}" class="btn btn-primary mb-3">Tambah Pegawai</a>
        <form action="{{ route('pegawai.index') }}" method="GET" class="mb-3">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari NIP atau Nama" value="{{ request('search') }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <select name="unit_kerja_id" class="form-control">
                            <option value="">Pilih Unit Kerja</option>
                            @foreach ($unit_kerja as $unit)
                                <option value="{{ $unit->id }}" {{ request('unit_kerja_id') == $unit->id ? 'selected' : '' }}>{{ $unit->Unit_Kerja }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Cari</button>
                </div>
            </div>
        </form>

        <div class="table-responsive" id="printableArea">
            <table class="table">
                <thead>
                    <tr>
                        <th>Foto Pegawai</th>
                        <th>NIP</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Alamat</th>
                        <th>Tanggal Lahir</th>
                        <th>Jenis Kelamin</th>
                        <th>Golongan</th>
                        <th>Eselon</th>
                        <th>Jabatan</th>
                        <th>Tempat Tugas</th>
                        <th>Agama</th>
                        <th>Unit Kerja</th>
                        <th>No HP</th>
                        <th>NPWP</th>
                        <th class="aksi">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($pegawai as $p)
                        <tr>
                            <td>
                                @if($p->photo)
                                    <img src="{{ $p->photo }}" alt="{{ $p->Nama }}" width="100">
                                @else
                                    Belum ada foto
                                @endif
                            </td>
                            <td>{{ $p->NIP }}</td>
                            <td>{{ $p->Nama }}</td>
                            <td>{{ $p->Tempat_Lahir }}</td>
                            <td>{{ $p->Alamat }}</td>
                            <td>{{ $p->Tanggal_Lahir }}</td>
                            <td>{{ $p->Jenis_Kelamin }}</td>

                            <td>{{ $p->jabatan->Golongan}}</td>
                            <td>{{ $p->jabatan->Eselon}}</td>
                            <td>{{ $p->jabatan->Jabatan }}</td>
                            <td>{{ $p->jabatan->Tempat_Tugas }}</td>

                            <td>{{ $p->Agama }}</td>

                            <td>{{ $p->unitKerja->Unit_Kerja}}</td>
                            <td>{{ $p->No_HP }}</td>
                            <td>{{ $p->NPWP }}</td>
                            <td class="aksi">
                                <a href="{{ route('pegawai.edit', $p->id) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('pegawai.destroy', $p->id) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus pegawai ini?')">Hapus</button>
                                </form>
                                <a href="{{ route('pegawai.upload', $p->id) }}" class="btn btn-sm btn-success">Upload Foto</a>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="9">Tidak ada data pegawai.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        {{ $pegawai->links() }}

        <!-- Tombol untuk mencetak tabel -->
        <button class="btn btn-primary" onclick="printTable()">Cetak Tabel</button>
    </div>

    {{-- cdn jquery --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    {{-- cdn datatable --}}

    <!-- Script JavaScript untuk mencetak tabel -->
    <script>
        function printTable() {
            var printContents = document.getElementById('printableArea').innerHTML;
            var originalContents = document.body.innerHTML;
    
            // Menghapus kolom aksi dari tabel yang akan dicetak menggunakan class="aksi"
            var aksi = document.getElementsByClassName('aksi');
            for (var i = 0; i < aksi.length; i++) {
                // display: none !important; agar tidak muncul saat mencetak
                aksi[i].style.display = 'none';
            }
            
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
    
            // Mengembalikan kolom aksi setelah selesai mencetak
            for (var i = 0; i < aksi.length; i++) {
                aksi[i].classList.remove('hide-aksi');
            }
        }
    </script>

    <style>
        .hide-aksi {
            display: none !important;
        }
    </style>
@endsection
