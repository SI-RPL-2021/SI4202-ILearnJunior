<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kls = Kelas::get();
        return view("admin.Kelas.index", compact('kls'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.Kelas.add");

    }
    public function simpan(Request $request)
    {

        $ng = $request->thumbnail;
        $namagambar = $ng->getClientOriginalName();

        $data = new Kelas;
        $data->name_kelas = $request->name_kelas;
        $data->type_kelas = $request->type_kelas;
        $data->description_kelas = $request->description_kelas;
        $data->thumbnail = $namagambar;

        $ng->move(public_path() . '/thumbnail_kelas', $namagambar);
        $data->save();

        return redirect('/index_kelas');
    }

    public function detail($id)
    {

    }

    public function edit($id)
    {

    }
    public function hapus($id)
    {

    }
    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }
}
