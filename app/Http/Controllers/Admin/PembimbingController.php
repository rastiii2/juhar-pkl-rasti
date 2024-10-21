<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Dudi;
use App\Models\Admin\Guru;
use App\Models\Admin\Pembimbing;
use Illuminate\Http\Request;

class PembimbingController extends Controller
{
    public function pembimbing()
    {
        $pembimbings = Pembimbing::with('guru', 'dudi')->get();
        return view('admin.pembimbing', compact('pembimbings'));
    }

    public function create()
    {
        $gurus = Guru::all();
        $dudis = Dudi::all();
        return view('admin.tambah_pembimbing', compact('gurus', 'dudis'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_guru' => 'required',
            'id_dudi' => 'required',
        ]);

        Pembimbing::create([
            'id_guru' => $request->id_guru,
            'id_dudi' => $request->id_dudi,
        ]);

        return redirect()->route('admin.pembimbing')->with('success', 'Data pembimbing Berhasil di Tambah');
    }

    public function edit(string $id)
    {

        $pembimbing = Pembimbing::find($id);
        $gurus = Guru::with('pembimbingGuru')->get();
        $dudis = Dudi::with('pembimbingDudi')->get();
        return view('admin.edit_pembimbing', compact('pembimbing', 'gurus', 'dudis'));
    }

    public function update(Request $request, string $id)
    {
        $pembimbing = Pembimbing::find($id);

        $request->validate([
            'id_guru' => 'required',
            'id_dudi' => 'required',
        ]);

        $pembimbing->update([
            'id_guru' => $request->id_guru,
            'id_dudi' => $request->id_dudi,
        ]);

        return redirect()->route('admin.pembimbing')->with('succes', 'Data Pembimbing Berhasil di Update.');
    }

    public function delete(Request $request, $id)
    {
        $pembimbing = Pembimbing::find($id);

        $pembimbing->delete();

        return redirect()->route('admin.pembimbing')->with('success', 'Data Pembimbing Berhasil di Hapus.');
    }
}
