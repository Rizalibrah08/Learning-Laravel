<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jabatan;

class JabatanController extends Controller
{
    public function index(Request $request)
    {
        // buat
        $query = Jabatan::query();

        // jika
        if ( !empty($search)){
            $query->where('nama_jabatan', 'like', '%' . $search . '%')
              ->orWhere('gaji_pokok', 'like', '%' . $search . '%');
        }
        //  ambil
        $jbt = $query->orderBy('nama_jabatan', 'asc')->get();

        // $jbt = Jabatan::all();
        return view('backend.jabatan.index', compact('jbt'));
    }

    public function create()
    {
        return view('backend.jabatan.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:225',
            'gaji_pokok' => 'required|numeric',
        ]);

        Jabatan::create($request->all());

        return redirect()->route('jbt')->with('success', 'data jabatan berhasil ditambahkan');
    }

    public function delete($id)
    {
        $jabatan = Jabatan::findOrfail($id);
        $jabatan->delete();

        return redirect()->route('jbt')->with('success', 'data pegawai berhasil dihapus.');
    }

    public function edit($id)
    {
        $jabatan = Jabatan::findOrFail($id);
        return view('backend.jabatan.edit', compact('jabatan'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_jabatan' => 'required|string|max:225',
            'gaji_pokok' => 'required|numeric',
        ]);

        $jabatan = Jabatan::findOrFail($id);
        $jabatan->update([
            'nama_jabatan' => $request->nama_jabatan,
            'gaji_pokok' => $request->gaji_pokok,
        ]);

        return redirect()->route('jbt')->with('success', 'Data pegawai berhasil diperbarui.');
    }
}
