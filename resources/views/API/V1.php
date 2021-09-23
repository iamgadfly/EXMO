<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class V1 extends Controller
{
    public function index(){

        $Request = new Card;
        
        $data = $Request -> all();

        dd($data);
        return($data);
    }
}
