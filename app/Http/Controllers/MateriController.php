<?php

namespace App\Http\Controllers;

use App\Models\Materi;
use Illuminate\Http\Request;

class MateriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $mat = Materi::get();
        return view('admin.materi.listmateri', compact('mat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.materi.materi');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $konten = new Materi;
        $konten->judul = $request->name_materi;
        $konten->konten = $request->content_materi;
        $konten->save();

        return redirect('/listmateri')->with('success','Materi berhasil dibuat');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mat = Materi::findorfail($id);
        return view('admin.materi.detailmateri', compact('mat'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $mat = Materi::findorfail($id);
        return view('admin.materi.editmateri', compact('mat'));
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
        //
        $data = [
            'judul' => $request->judul,
            'konten' => $request->konten,
        ];
        Materi::where('id', '=', $id)->update($data);


        return redirect()->route('detailmateri', ['mat' => $id])->with('success', 'Materi berhasil diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $del = Materi::findorfail($id);
        $del->delete();
        return redirect('/listmateri')->with('success','Materi berhasil dihapus');

    }
}
