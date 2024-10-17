<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Guru;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function guru()
    {
        $gurus = Guru::all();
        return view('admin.guru', compact('gurus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tambah_guru');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nip' => 'required|unique:guru,nip|digits:18',
            'email' => 'required|email|unique:guru,email',
            'password' => 'required|min:6',
            'nama_guru' => 'required',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $foto = null;

        if ($request->hasFile('foto')) {
            $uniqueFile = uniqid() . '_' . $request->file('foto')->getClientOriginalName();
            $foto = $request->file('foto')->storeAs('foto_guru', $uniqueFile, 'public');
        }

        Guru::create([
            'nip' => $request->nip,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'nama_guru' => $request->nama_guru,
            'foto' => $foto,
        ]);

        return redirect()->route('admin.guru')->with('success', 'Data Guru Berhasil di Tambah.');
    }

    public function delete(Request $request, $id)
    {
        $guru = Guru::find($id);

        $foto = 'public/foto_guru' . $guru->foto;

        if (Storage::exists($foto)) {
            Storage::delete($foto);
        }

        $guru->delete();

        return redirect()->route('admin.guru')->with('success', 'Data Guru Berhasil di Hapus.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
