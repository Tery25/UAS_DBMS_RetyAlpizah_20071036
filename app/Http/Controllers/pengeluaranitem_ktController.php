<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengeluaranitem_ktController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranitem_kt= \DB::table('t_pengeluaran_kt')->get();
        $data = array('pengeluaranitem_kt' => $pengeluaranitem_kt);
        return view ('pengeluaranitem/index', $data);
    }
}

