<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tema extends Controller
{
    public function viewnama(){
        $nama="Fhadly Sabda Dinov";
        $npm=183510802;
        $data=array(
            'nama'=>$nama,
            'npm'=>$npm
        );
        return view('landing.index',$data);
    }
}
