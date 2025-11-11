@extends('backend.dashboard.index')

@section('title', 'Data Jabatan')

@section('content')
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4 class="fw-bold">Data Jabatan</h4>
        <a href="{{ route('jbt_create') }}" class="btn btn-primary btn-sm">+ Tambah Jabatan</a>
    </div>

    {{-- Form Pencarian --}}
    <form action="{{ route('jbt') }}" method="GET" class="mb-3 d-flex" role="search">
    <input type="text" name="search" class="form-control me-2" placeholder="Cari jabatan..." value="{{ request('search') }}">
    <button type="submit" class="btn btn-outline-primary">Cari</button>
    </form>

    {{-- Pesan Sukses --}}
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card border-0 shadow-sm rounded-3">
        <div class="card-body">
            <table class="table table-striped table-bordered">
                <thead class="table-light">
                    <tr>
                        <th>ID</th>
                        <th>Nama Jabatan</th>
                        <th>Gaji Pokok</th>
                        <th width="180">Aksi</th>
                    </tr>
                </thead>
                <tbody>
    @forelse($jbt as $row)
        <tr>
            <td>{{ $row->jabatan_id }}</td>
            <td>{{ $row->nama_jabatan }}</td>
            <td>{{ $row->gaji_pokok }}</td>
            <td>
                <a href="{{ route('jbt_edit', $row->jabatan_id) }}" class="btn btn-warning btn-sm">Edit</a>
                <form action="{{ route('jbt_delete',$row->jabatan_id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus data ini?')">Hapus</button>
                </form>
            </td>
        </tr>
    @empty
        <tr>
            <td colspan="6" class="text-center">Belum ada data jabatan</td>
        </tr>
    @endforelse
</tbody>

            </table>
        </div>
    </div>
@endsection
