<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use App\Models\Reply;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Forum::orderBy('id','DESC')->get();
        return view('client.forum.view_forum')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('client.forum.forum');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = Forum::create([
                'judul' => $request->judul,
                'isi' => $request->isi,
                'author' => $request->author
        ]);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Forum::findorFail($id);
        $comment = Reply::where("forum_id", "=", $data->id)->get();
        return view('client.forum.showforum')->with(array("data"=>$data,"comment"=>$comment));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Forum::findorFail($id);
        return view('client.forum.editforum')->with('data',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = [
            'judul' => $request->judul,
            'isi' => $request->isi,
            'author' => $request->author,
        ];
       Forum::where('id', '=', $id)->update($data);


        return redirect()->route('indexforum');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Forum  $forum
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Forum::findorFail($id);
        $data->delete();

        return redirect()->back();
    }
}
