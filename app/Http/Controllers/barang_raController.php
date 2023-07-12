<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barang_raController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $barangra= \DB::table('t_barang_ra')->get();
        $data = array('barangra' => $barangra);
        return view ('barang/index', $data);
    }
}
