<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShopListController extends Controller
{
    public function index() {
        $shops = \App\Models\Shop::get();
        return view('shops',['shops'=>$shops]);
    }
}
