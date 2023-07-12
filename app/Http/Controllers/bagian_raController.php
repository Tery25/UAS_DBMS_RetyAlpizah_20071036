<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagian_raController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $bagian_ra= \DB::table('t_bagian_ra')->get();
    $data = array('bagian_ra' => $bagian_ra);
    return view ('bagian/index', $data);
}

}
