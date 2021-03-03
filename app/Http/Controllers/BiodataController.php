<?php

namespace App\Http\Controllers;

use App\BiodataModel;
use Illuminate\Http\Request;

class BiodataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = BiodataModel::all();
        return view('vcontent.vbiodata.index', compact('biodata'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('vcontent.vbiodata.bcreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'nama' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jenkel' => 'required',
            'telp' => 'required',
            ]);

               BiodataModel::create([
            'nama' => $request->nama,
            'ttl' => $request->ttl,
            'alamat' => $request->alamat,
            'jenkel' => $request->jenkel,
            'telp' => $request->telp,
            ]);

            return redirect('/biodata');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bio_edit=BiodataModel::find($id);
        return view('vcontent.vbiodata.bedit', ['bio_edit'=>$bio_edit]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'nama' => 'required',
            'ttl' => 'required',
            'alamat' => 'required',
            'jenkel' => 'required',
            'telp' => 'required',
            ]);

               $bio_update=BiodataModel::find($id);

            $bio_update -> nama = $request->nama;
            $bio_update -> ttl = $request->ttl;
            $bio_update -> alamat = $request->alamat;
            $bio_update -> jenkel = $request->jenkel;
            $bio_update -> telp = $request->telp;
            $bio_update -> save();


            return redirect('/biodata');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bio_del=BiodataModel::find($id);
        $bio_del -> delete();
        return back();
    }
}
