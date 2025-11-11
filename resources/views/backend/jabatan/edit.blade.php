@extends('backend.dashboard.index')

@section('title', 'Edit Jabatan')

@section('content')
<div class="container">
    <h4 class="fw-bold mb-3">Edit Data Jabatan</h4>

    <form action="{{ route('jbt_update', $jabatan->jabatan_id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama_jabatan" class="form-label">Nama Jabatan</label>
            <input type="text" name="nama_jabatan" id="nama_jabatan" value="{{ old('nama_jabatan', $jabatan->nama_jabatan) }}" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="gaji_pokok" class="form-label">Gaji Pokok</label>
            <input type="number" name="gaji_pokok" id="gaji_pokok" value="{{ old('gaji_pokok', $jabatan->gaji_pokok) }}" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        <a href="{{ route('jbt') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection