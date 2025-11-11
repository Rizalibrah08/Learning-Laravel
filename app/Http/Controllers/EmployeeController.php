<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Jabatan;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use Illuminate\Support\Facades\File;
use PhpParser\Node\Expr\FuncCall;

class EmployeeController extends Controller
{
    public function index()
    {
        $emp = Employee::with('position')->get();
        return view('backend.employees.index', compact('emp'));
    }


    //form tambah data
    public function create()
    {
        $position = Jabatan::all();
        return view('backend.employees.create', compact('position'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'jabatan_id' => 'required',
            'nama' => 'required|string|max:225',
            'email' => 'required|email|unique:employees,email',
            'alamat' => 'nullable|string',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = [
            'jabatan_id' => $request->jabatan_id,
            'nama' => $request->nama,
            'email' => $request->email,
            'alamat' => $request->alamat,
        ];

        //upload foto

         //uploud foto
         if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $namaFile = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $namaFile);
            $data['img'] = $namaFile;
        }

        employee::create($data, $request->all());

        return redirect()->route('emp')->with('success', 'data pegawai berhasil ditambahkan');
    }


    //hapus data    
    public function delete($id)
    {
        $employee = employee::findOrfail($id);
        $employee->delete();

        return redirect()->route('emp')->with('success', 'data pegawai berhasil dihapus.');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('backend.employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|email|unique:employees,email,' . $id . ',id_emp',
        'alamat' => 'nullable|string',
        'jabatan_id' => 'required|string',
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ]);

    $employee = Employee::findOrFail($id);
    $data = [
        'nama' => $request->nama,
        'email' => $request->email,
        'alamat' => $request->alamat,
        'jabatan_id' => $request->jabatan_id,
    ];

    // Jika ada foto baru di-upload
    if ($request->hasFile('foto')) {
        // Hapus foto lama jika ada
        if ($employee->img && File::exists(public_path('images/' . $employee->img))) {
            File::delete(public_path('images/' . $employee->img));
        }

        // Upload foto baru
        $file = $request->file('foto');
        $namaFile = time() . "_" . $file->getClientOriginalName();
        $file->move(public_path('images'), $namaFile);

        $data['img'] = $namaFile;
    }

    $employee->update($data);

    return redirect()->route('emp')->with('success', 'Data pegawai berhasil diperbarui.');
    }

}
