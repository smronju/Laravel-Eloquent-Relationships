<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Staff;
use Illuminate\Http\Request;

class StaffController extends Controller
{
    public function index(){
    	$staff = Staff::paginate(15);

    	return view('staff.index', compact('staff'));
    }

    public function show($id){
    	$staff = Staff::findOrFail($id);

    	return view('staff.show', compact('staff'));
    }
}
