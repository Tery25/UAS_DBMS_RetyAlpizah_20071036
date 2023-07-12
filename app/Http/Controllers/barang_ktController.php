<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class barang_ktController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $barangkt= \DB::table('t_barang_kt')->get();
        $data = array('barangkt' => $barangkt);
        return view ('barang/index', $data);
    }
}
