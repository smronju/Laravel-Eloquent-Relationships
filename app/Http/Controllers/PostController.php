<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    protected $posts;

    public function __construct(Post $posts){
    	$this->posts = $posts;
    }

    public function index(){
    	$posts = $this->posts->paginate(15);

    	return view('posts.index', compact('posts'));
    }

    public function user($id){
    	$post = $this->posts->findOrFail($id);

    	return view('posts.show', compact('post'));
    }
}
