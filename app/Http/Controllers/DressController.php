<?php

namespace App\Http\Controllers;

use App\Order;
use Illuminate\Http\Request;

class DressController extends Controller
{
    public function index()
    {
        return view("dressorder");
    }

    public function dressOrders()
    {
//        dd(Order::where("user_id", auth()->user()->id)->where("dress_id" ,"!=", null)->get());
//        dd(Order::where("user_id", auth()->user()->id)->where("hall_id" ,"!=", null)->get());
//        dd(Order::where("user_id", auth()->user()->id)->get());
//        dd(auth()->user()->orders);
//        dd(auth()->user()->orders()->where("hall_id" ,"!=", null)->get());
//        dd(auth()->user()->orders()->with('dress')->first());
//        dd(auth()->user()->orders()->first()->dress);
    }
}
