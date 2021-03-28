<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $blog = Blog::get();
        return view('admin.blog.list', compact('blog'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blog.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ng = $request->thumbnail_blog;
        $namagambar = $ng->getClientOriginalName();

        $data = new Blog;
        $data->name_blog = $request->name_blog;
        $data->content_blog = $request->content;
        $data->thumbnail_blog = $namagambar;

        $ng->move(public_path() . '/gambar_blog', $namagambar);
        $data->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $blog = Blog::findorfail($id);
        return view('admin.blog.detail', compact('blog'));
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
        $blog = Blog::findorfail($id);
        return view('admin.blog.edit', compact('blog'));
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
        $ubah = Blog::findorfail($id);
        $nama = $ubah->thumbnail_blog;
        if ($request->thumbnail_blog <> "") {
            $gambar = $request->thumbnail_blog;
            $gambar->move(public_path() . '/gambar_blog', $nama);
            $data = [
                'name_blog' => $request->name_blog,
                'content_blog' => $request->content,
                'thumbnail_blog' => $nama,
            ];
        }else{
            $data = [
                'name_blog' => $request->name_blog,
                'content_blog' => $request->content,
            ];
        }
        Blog::where('id', '=', $id)->update($data);


        return redirect('/postblog');
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
        $del = Blog::findorfail($id);
        $del->delete();
        return redirect('/postblog');

    }
}
