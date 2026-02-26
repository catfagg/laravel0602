<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
	public function show()
	{
		return view('post.show', [
			'title' => 'page title',
			'text'  => 'page content',
			'name' => 'иван',
			'surname' => 'иванов',
			'age' => 21,
			'salary' => 100,
			'class' => 'class',
			'var1' => '',
			'var2' => '',
			'var3' => '',
			'style' => 'color: red',
			'gogl' => 'google.com',
			'leha' => ['name2' => 'лёха', 'age2' => 24, 'salary' => 200],
			'arrcount' => 0,
			'city' => ['Калининград'],
			'location' => ['country' => 'Швеция', 'city' => 'Стокгольм'],
			'year' => '',
			'month' => '6',
			'day' => '14',
			'str' => '<b>text</b>',
		]);
	}
}