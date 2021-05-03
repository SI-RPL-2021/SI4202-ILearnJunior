<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YourController extends Controller
{
    //
    public function externalMethod($angka1,$angka2){
        
        $hasil = $angka1+$angka2;
        return $hasil;
    }
}
