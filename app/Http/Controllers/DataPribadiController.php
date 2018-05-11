<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataPribadi;

class DataPribadiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dataPribadi = DataPribadi::all();

        return view('data', ['dataPribadi' => $dataPribadi]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dataPribadi = new DataPribadi();
        $dataPribadi->nama_lengkap = $request->nama_lengkap;
        $dataPribadi->email        = $request->email;
        $dataPribadi->alamat       = $request->alamat;
        $dataPribadi->umur         = $request->umur;
        $dataPribadi->save();

        return redirect('datapribadi')->with('success', 'Data Berhasil di Input');
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
        $dataPribadi = DataPribadi::find($id);
        return view('edit', ['dataPribadi' => $dataPribadi]);
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
        $dataPribadi               = DataPribadi::find($id);
        $dataPribadi->nama_lengkap = $request->get('nama_lengkap');
        $dataPribadi->email        = $request->get('email');
        $dataPribadi->alamat       = $request->get('alamat');
        $dataPribadi->umur         = $request->get('umur');

        $dataPribadi->save();

        return redirect('datapribadi')->with('success', 'Berhasl Mengupdate Data');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $dataPribadi = DataPribadi::find($id);

        $dataPribadi->delete();

        return redirect('datapribadi')->with('success', 'Berhasil Menghapus Data');
    }
}
