<?php

namespace App\Http\Controllers\Client;

use App\Models\Materi;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ViewMateriController extends Controller
{
    public function index()
    {

        $mat = Materi::get();
        return view('client.view_materi', compact('mat'));
    }

    public function detail($id)
    {

        $mat = Materi::orderBy('id', 'desc')->paginate(3);
        $mat2 = Materi::findorfail($id);
        return view('client.view_detailmateri', compact('mat', 'mat2'));
    }
}
