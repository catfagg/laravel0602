<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function getAll($order = 'date', $dir = 'desc')
	{
		$posts = Posts::orderBy($order, $dir)->get();
		return view('post.all', ['posts' => $posts]);
	}

	public function getOne($id)
	{
		$post = Posts::findOrFail($id);
		return view('post.one', ['post' => $post]);
	}

	public function newPost(Request $request)
	{
		$post = new Posts;
		$post->title = $request->title;
		$post->description = $request->description;
		$post->date = $request->date;
		$post->text = $request->text;
		$post->save();
	}
}
