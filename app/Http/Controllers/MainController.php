<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Country;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function Products() {
        $Authors = Author::all();
        $Countries = Country::all();
        return view('product', compact('Authors'), compact('Countries'));
    }
}
