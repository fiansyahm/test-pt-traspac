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
                <label for="Jabatan">Jabatan</label>
                <input type="text" name="Jabatan" class="form-control" value="{{ $jabatan->Jabatan }}">
            </div>
            <div class="form-group">
                <label for="Eselon">Eselon</label>
                <input type="text" name="Eselon" class="form-control" value="{{ $jabatan->Eselon }}">
            </div>
            <div class="form-group">
                <label for="Golongan">Golongan</label>
                <input type="text" name="Golongan" class="form-control" value="{{ $jabatan->Golongan }}">
            </div>
            <div class="form-group">
                <label for="Tempat_Tugas">Tempat Tugas</label>
                <input type="text" name="Tempat_Tugas" class="form-control" value="{{ $jabatan->Tempat_Tugas }}">
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
