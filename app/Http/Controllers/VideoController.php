<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listvid = Video::get();
        return view('admin.video_materi.viewvideo', compact('listvid'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.video_materi.addvideo');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $add = new Video;
        $add->judulvid = $request->name_video;
        $add->descvideo = $request->deskripsi_video;
        $add->linkvideo = $request->link_video;
        $add->save();

        return redirect()->back()->with('success', 'Link Video Berhasil di Simpan');
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
        $edit = Video::findorfail($id);
        return view('admin.video_materi.editvideo', compact('edit'));
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
        $edit = Video::findorfail($id);
        $data = [
            'judulvid' => $request->name_video,
            'descvideo' => $request->deskripsi_video,
            'linkvideo' => $request->link_video
        ];
        Video::where('id', '=', $id)->update($data);
        return redirect('/video')->with('success', 'Link Video Berhasil di Update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = Video::findorfail($id);
        $delete->delete();
        return redirect('/video')->with('success', 'Link Video Berhasil di Hapus');
    }
}
