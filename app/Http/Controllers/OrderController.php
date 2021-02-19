<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function dress(Request $request)
    {
//        dd(auth()->user()->id);
        Order::create(["user_id"=>auth()->user()->id, "dress_id" => $request->dress]);

        dd("done");
    }
}
