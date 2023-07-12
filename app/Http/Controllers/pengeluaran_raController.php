<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengeluaran_raController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranra= \DB::table('t_pengeluaran_ra')->get();
        $data = array('pengeluaran_ra' => $pengeluaranra);
        return view ('pengeluaran/index', $data);
    }
}

