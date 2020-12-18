<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class testController extends Controller
{
    public function index()
    {
        $x = ["mohmmad", "deyaa", "khaled"];
        return view("test", compact("x"));
//        return view("test",[
//            "var" => $var
//        ]);
    }

    public function deyaa()
    {
        return "product";
    }
}
