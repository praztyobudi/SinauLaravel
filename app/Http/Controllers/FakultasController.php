<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FakultasModel;

use function PHPUnit\Framework\callback;
use function PHPUnit\Framework\returnSelf;

class FakultasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $f_data = FakultasModel::latest()->paginate(5);

        return view('v_fakultas.index',compact('f_data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('v_fakultas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        FakultasModel::create($request->all());

        return redirect()->route('fakul.index')
                        ->with('success','Nama fakultas created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $f_show=FakultasModel::find($id);
        return view('v_fakultas.show', ['fshow'=>$f_show]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $f_edit=FakultasModel::find($id);
        return view('v_fakultas.edit', ['fak'=>$f_edit]);
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
        $request->validate([
            'nama' => 'required',
        ]);

        $f_update = FakultasModel::find($id);
        $f_update->nama=$request->nama;
        $f_update->save();

        return redirect()->route('fakul.index')
                        ->with('success','Nama fakultas updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $f_delete=FakultasModel::find($id);
        $f_delete->delete();
        return redirect()->route('fakul.index')->with('success','di hapus');
    }
}
