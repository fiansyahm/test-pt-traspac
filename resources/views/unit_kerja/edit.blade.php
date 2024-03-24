<!-- resources/views/jabatan/edit.blade.php -->
@extends('template-wpadmin')

@section('navbar_unit_kerja', 'active')

@section('main')
    <div class="container">
        <h1>Edit Unit Kerja</h1>
        <form action="{{ route('unit_kerja.update', $unit_kerja->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="Unit_Kerja">Unit Kerja</label>
                <input type="text" name="Unit_Kerja" class="form-control" value="{{ $unit_kerja->Unit_Kerja }}">
            </div>
             <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
