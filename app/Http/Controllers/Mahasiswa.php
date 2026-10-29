<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswas;
use Illuminate\Http\Request;

class Mahasiswa extends Controller
{
    public function index()
    {
        $mahasiswa = Mahasiswas::all();
        return view('index', compact('mahasiswa'));
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        Mahasiswas::create($data);
        return redirect('/mahasiswa');
    }

    public function edit($id)
    {
        $mahasiswa = Mahasiswas::findOrFail($id);
        return view('edit', compact('mahasiswa'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate([
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required',
        ]);

        Mahasiswas::findOrFail($id)->update($data);
        return redirect('/mahasiswa');
    }

    public function destroy($id)
    {
        Mahasiswas::findOrFail($id)->delete();
        return redirect('/mahasiswa');
    }
}
