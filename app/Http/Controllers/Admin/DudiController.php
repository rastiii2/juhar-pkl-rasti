<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dudi;
use Illuminate\Http\Request;

class DudiController extends Controller
{
    public function dudi()
    {
        $dudis = Dudi::all();
        return view('admin.dudi', compact('dudis'));
    }

    public function create()
    {
        return view('admin.tambah_dudi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_dudi' => 'required',
            'alamat_dudi' => 'required',
        ]); 
        
        Dudi::create([
            'nama_dudi' => $request->nama_dudi,
            'alamat_dudi' => $request->alamat_dudi,
        ]);

        return redirect()->route('admin.dudi')->with('success', 'Data Dudi Berhasil di Tambah.');
    }

    public function delete(Request $request, $id)
    {
        $dudi = Dudi::find($id);

        $dudi->delete();

        return redirect()->route('admin.dudi')->with('success', 'Data Dudi Berhasil di Hapus.');
    }

    public function edit(string $id)
    {
        $dudi = Dudi::find($id);
        if (!$dudi) {
            return back();
        }
        return view('admin.edit_dudi', compact('dudi'));
    }

    public function update(Request $request, string $id)
    {

        $dudi = Dudi::find($id);

        $request->validate([
            'nama_dudi' => 'required',
            'alamat_dudi' => 'required',
        ]);

        $dudi->update([
            'nama_dudi' => $request->nama_dudi,
            'alamat_dudi' => $request->alamat_dudi,
        ]);

        return redirect()->route('admin.dudi')->with('succes', 'Data Dudi Berhasil di Update.');
    }

}
