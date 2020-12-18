<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        //create a record
//        Product::create([
//            "name" => "product #6",
//            "desc" => "product desc #6"
//        ]);

        // get all records from database
//        $x = Product::all();

        // get 1 record from database
//        $x = Product::where("id", 2)->get()->first();
//        $x = Product::find(2);

        // update a record(s)
//        Product::where("id", 2)->update([
//            "name"=> "deyaa",
//            "desc" => "desc"
//        ]);

        // delete a record
//        Product::where("name", "deyaa")->delete();
//        Product::destroy(1);
//        $products = Product::all();

//        return Product::find($id);


//        return view("test", [
//            "prods" => $products
//        ]);
    }
}
