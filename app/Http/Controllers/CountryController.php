<?php

namespace App\Http\Controllers;

use App\Country;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function posts($id){
    	$country = Country::findOrFail($id);

    	return view('country.posts', compact('country'));
    }
}
