<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Country;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function showProducts () {
        $Authors = Author::all();
        $Countries = Country::all();
        return view('product', compact('Authors'), compact('Countries'));
    }
}
