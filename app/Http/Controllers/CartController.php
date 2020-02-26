<?php

namespace App\Http\Controllers;

use App\CartItem;

class CartController extends Controller
{
    public function index()
    {
        $items = CartItem::all();
        return view('cart/index', compact('items'));
    }

    public function add($book_id){

        // Select CartItem with provided book_id
        // or null if it does not exist
        $item = CartItem::where('book_id', $book_id)->first();


        if($item === null){
            //if CartItem does not exist create a new one
            $ci = new CartItem;
            $ci->book_id = $book_id;
            $ci->count = 1;
            $ci->save();
        }else{
            //increment count of existing CartItem
            $item->count++;
            $item->save();
        }

        return redirect('/cart');
    }

}
