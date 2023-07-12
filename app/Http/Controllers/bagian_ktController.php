<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bagian_ktController extends Controller
{
    function index(){
    //return('Ini adalah controller');

    $bagian_kt= \DB::table('t_bagian_kt')->get();
    $data = array('bagian_kt' => $bagian_kt);
    return view ('bagian/index', $data);
}

}
