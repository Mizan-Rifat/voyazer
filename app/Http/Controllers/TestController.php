<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
        return Product::with('category','attributes','ingredients')->find(1);
    }
}
