<?php

namespace App\Http\Controllers;
use App\Models\Podcast;
use Illuminate\Http\Request;

class PodcastController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() 
    {
        //
        $data = Podcast::get();
        return view('admin.podcast.listpodcast', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.podcast.addpodcast');
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
        $data = new Podcast;
        $data->title = $request->judulpodcast;
        $data->url_podcast = $request->link_podcast;
        $data->deskripsi = $request->deskripsipodcast;
        $data->save();

        return redirect()->back()->with('success','Berhasil Menambahkan Podcast!');
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
        //
        $data = Podcast::findorfail($id);
        return view('admin.podcast.editpodcast', compact('data'));
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
        $edit = Podcast::findorfail($id);
        $data = [
            'title' => $request->judulpodcast,
            'deskripsi' => $request->deskripsipodcast,
            'url_podcast' => $request->linkpodcast
        ];
        Podcast::where('id', '=', $id)->update($data);
        return redirect('/podcast')->with('success', 'Podcast Berhasil di Update');
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
        $del = Podcast::findorfail($id); 
        $del->delete();
        return redirect('/podcast')->with('success', 'Podcast Berhasil di Hapus');
    }
}
