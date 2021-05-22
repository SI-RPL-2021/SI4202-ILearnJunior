<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tugas;
use Illuminate\Support\Facades\Auth;

class TugasController extends Controller
{
    //

    public function index(){
        return view('client.tugas.pengumpulan');
    }

    public function upload(Request $request){
        $request->validate([
            'file' => 'required|file|mimes:jpg,jpeg,bmp,png,doc,docx,csv,rtf,xlsx,xls,txt,pdf,zip',
        ]);
        $filesname= time().'.'.$request->file->extension();
        $request->file->move(public_path('/file'), $filesname);

        Tugas::create([
            // 'user_id' => Auth::user()->id,
            'name' => $request->name,
            'file' => $filesname
        ]);
        return back()
            ->with('success','You have successfully file upload.')
            ->with('file',$filesname); 
    }
}
