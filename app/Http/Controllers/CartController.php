<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Items;


class CartController extends Controller
{
    public function index(){
        return view(cart.index);
    }


    public function add($id){
        //dd($id);
        $item = Items::find($id);
        \Cart::session(auth()->id())->add(array(
            'id' => $id,
            'name' => $item->name,
            'price' => $item->price,
            'quantity' => 1,
            'attributes' => array(),
            'associatedModel' => $Items

        ));
        return back();
    }
}
