<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Controller;

class ItemController extends Controller
{
    public function toHome(){
        App::setlocale(session('locale'));

        return view('home.home',[
            'items' => Item::paginate(10),
            'page' => 'Home',
        ]);
    }

    public function toDetail($id){
        App::setlocale(session('locale'));

        return view('home.detail',[
            'item' => Item::where('id', $id)->first(),
            'page' => 'Home',
        ]);
    }
}
