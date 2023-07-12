<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugas_ktController extends Controller
{
    function index(){
        //return('Ini adalah controller');
    
        $petugas_kt= \DB::table('t_petugas_kt')->get();
        $data = array('petugaskt' => $petugas_kt);
        return view ('petugas/index', $data);
}
}
