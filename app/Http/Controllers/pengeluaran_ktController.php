<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengeluaran_ktController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluarankt= \DB::table('t_pengeluaran_kt')->get();
        $data = array('pengeluaran_kt' => $pengeluarankt);
        return view ('pengeluaran/index', $data);
    }
}

