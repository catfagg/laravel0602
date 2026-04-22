<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;

class PostController extends Controller
{
	public function getAll($order = 'date')
  	{
		$posts = Posts::orderBy($order, 'desc')->get();
    	return view('post.all', ['posts' => $posts]);
  	}

	public function getOne($id)
  	{
    	$post = Posts::findOrFail($id);
    	return view('post.one', ['post' => $post]);
  	}
}
