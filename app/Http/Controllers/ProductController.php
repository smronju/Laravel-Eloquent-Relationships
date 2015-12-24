<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    	$products = Product::paginate(15);

    	return view('products.index', compact('products'));
    }

    public function show($id){
    	$product = Product::findOrFail($id);

    	return view('products.show', compact('product'));
    }
}
