<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugas_raController extends Controller
{
    function index(){
        //return('Ini adalah controller');
    
        $petugas_ra= \DB::table('t_petugas_ra')->get();
        $data = array('petugasra' => $petugas_ra);
        return view ('petugas/index', $data);
}
}
