<?php

namespace App\Http\Controllers;
use App\Models\Pizza;
use App\Models\Dessert;
use App\Models\Hotsip;
use App\Models\Cart;
use App\Models\Sandwich;
use App\Models\Munchie;
use App\Models\Juice;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
  function pizza() {

    $data=Pizza::all();
        return view('pizza',['pizzas'=>$data]);
    
    }
    function dessert() {
    $data=Dessert::all();
        return view('desset',['desserts'=>$data]);
    
    }
    function hotsip() {
    $data=Hotsip::all();
        return view('hotsips',['hotsips'=>$data]);
    }
    function hotsiphome() {
    $data=Hotsip::all();
        return view('/',['hotsipshome'=>$data]);
    }
    function sandwich() {
    $data=Sandwich::all();
        return view('sandwich',['sandwichs'=>$data]);
    
    }
    function munchie() {
    $data=Munchie::all();
        return view('munchie',['munchies'=>$data]);
    
    }
    function juice() {
    $data=Juice::all();
        return view('juice',['juices'=>$data]);
    
    }


    public function productList()
    {
        $products = Product::all();

        return view('pizza', compact('products'));
    }
}
