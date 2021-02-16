<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PegawaiModel;

class PegawaiController extends Controller
{
    public function index()
    {
        $peg = PegawaiModel::all();
        return view('vpegawai', ['pegawai' => $peg]);
    }
    public function tambah()
    {
        return view('vpegawai_tambah');
    }
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required|min:5|max:6',
            'alamat' => 'required'
        ]);

        PegawaiModel::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat
        ]);

        return redirect('/');
    }

    public function edit($id)
    {
        $peg = PegawaiModel::find($id);
        return view('vpegawai_edit', ['editpegawai' => $peg]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required'
        ]);

        $peg = PegawaiModel::find($id);
        $peg->nama = $request->nama;
        $peg->alamat = $request->alamat;
        $peg->save();
        return redirect('/');
    }
    public function delete($id)
    {
        $peg = PegawaiModel::find($id);
        $peg->delete();
        return redirect('/');
    }
}
