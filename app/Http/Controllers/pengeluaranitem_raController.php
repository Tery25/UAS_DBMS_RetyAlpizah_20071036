<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pengeluaranitem_raController extends Controller
{
    function index(){
        //return('Ini adalah controller');

        $pengeluaranitem_ra= \DB::table('t_pengeluaranitem_ra')->get();
        $data = array('pengeluaranitem_ra' => $pengeluaranitem_ra);
        return view ('pengeluaranitem/index', $data);
    }
}

