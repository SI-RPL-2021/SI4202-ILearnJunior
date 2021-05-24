<?php

namespace App\Http\Controllers;

use App\Models\InputNilai;
use Illuminate\Http\Request;

class InputNilaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $inputnilai = InputNilai::get();
        return view("admin.nilai.index", compact('inputnilai'));
    }

    public function Tampilan()
    {
        $inputnilai = InputNilai::get();
        return view("client.TampilanNilai", compact('inputnilai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.nilai.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ng = $request->bukti;
        $namagr = $ng->getClientOriginalName();

        $data = new InputNilai;
        $data->nama_siswa = $request->nama_siswa;
        $data->kelas = $request->kelas;
        $data->mapel = $request->mapel;
        $data->nilai = $request->nilai;
        $data->keterangan = $request->keterangan;
        $data->bukti = $namagr;

        $ng->move(public_path() . '/bukti', $namagr);
        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\InputNilai  $inputNilai
     * @return \Illuminate\Http\Response
     */
    public function show(InputNilai $inputNilai)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InputNilai  $inputNilai
     * @return \Illuminate\Http\Response
     */
    public function edit(InputNilai $inputNilai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InputNilai  $inputNilai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InputNilai $inputNilai)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InputNilai  $inputNilai
     * @return \Illuminate\Http\Response
     */
    public function destroy(InputNilai $inputNilai)
    {

    }
}
