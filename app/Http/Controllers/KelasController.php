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
    public function indexcl()
    {
        $kls = Kelas::get();
        return view("client.kelas.view_kelas", compact('kls'));
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
        $namagr = $ng->getClientOriginalName();

        $data = new Kelas;
        $data->name_kelas = $request->name_kelas;
        $data->type_kelas = $request->type_kelas;
        $data->description_kelas = $request->description_kelas;
        $data->thumbnail = $namagr;

        $ng->move(public_path() . '/thumbnail_kelas', $namagr);
        $data->save();

        return redirect('/index_kelas');
    }

    public function detail($id)
    {

    }

    public function edit($id)
    {
        $kelas = Kelas::findorfail($id);
        return view('admin.Kelas.edit', compact('kelas'));
    }
    public function hapus($id)
    {

    }
    public function update(Request $request, $id)
    {
        $ubahkelas = Kelas::findorfail($id);
        $namagambar = $ubahkelas->thumbnail;
        if($request->thumbnail <> "") {
            $gambar = $request->thumbnail;
            $gambar->move(public_path() . '/thumbnail_kelas', $namagambar);
            $data = [
                'name_kelas' => $request->name_kelas,
                'type_kelas' => $request->type_kelas,
                'description_kelas' => $request->description_kelas,
                'thumbnail' => $namagambar,
            ];
        }else{
            $data = [
                'name_kelas' => $request->name_kelas,
                'type_kelas' => $request->type_kelas,
                'description_kelas' => $request->description_kelas,
            ];
        }
        Kelas::where('id', '=' , $id)->update($data);
        return redirect('/index_kelas')->with('success','Data Berhasil di update');
    }

    public function destroy($id)
    {
        $kelas = Kelas::findorfail($id);
        $kelas->delete();
        return redirect('/index_kelas')->with('success','Data Berhasil di Hapus');
    }
}
