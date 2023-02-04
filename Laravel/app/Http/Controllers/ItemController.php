<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function toHome(){
        return view('home.home',[
            'items' => Item::paginate(10),
            'page' => 'Home',
        ]);
    }

    public function toDetail($id){
        return view('home.detail',[
            'item' => Item::where('id', $id)->first(),
            'page' => 'Home',
        ]);
    }
}
