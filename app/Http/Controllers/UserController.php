<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $users;

    public function __construct(User $users){
    	$this->users = $users;
    }

    public function index(){
    	$users = $this->users->paginate(15);

    	return view('users.index', compact('users'));
    }

    public function posts($id){
    	$user = $this->users->findOrFail($id);

    	return view('users.show', compact('user'));
    }
}
