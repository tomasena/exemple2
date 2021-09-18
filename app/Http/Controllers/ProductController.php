<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function show($n)
    {
        return view('product-detail')->with('numero', $n);
    }
    public function list()
    {
        return view('product-list');
    }
}
