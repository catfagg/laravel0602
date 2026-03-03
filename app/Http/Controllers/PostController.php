<?php

namespace App\Http\Controllers;

class PostController extends Controller
{
	public function show()
	{
		return view('post.show', [
			'title' => 'page title',
			'text' => 'page content',
			'name' => 'иван',
			'surname' => 'иванов',
			'age' => 21,
			'salary' => 100,
			'class' => 'class',
			'var1' => '',
			'var2' => '',
			'var3' => '',
			'style' => 'color: red',
			'google_href' => 'https://google.com',
			'google_text' => 'google.com',
			'leha' => ['name2' => 'лёха', 'age2' => 24, 'salary' => 200],
			'arrcount' => 0,
			'city' => ['Калининград'],
			'location' => ['country' => 'Швеция', 'city' => 'Стокгольм'],
			'year' => '',
			'month' => '6',
			'day' => '14',
			'str' => '<b>text</b>',
			'userAge' => '24',
			'numbers' => [4, 6, 10, 2, 0, 32, 3, 7],
			'sum' => 0,
			'dmassive' => [
				[1, 2, 3, 4],
				[1, 2, 3, 4]
			],
			'employees' => [
				[
					'name' => 'user1',
					'surname' => 'surname1',
					'salary' => 1000,
				],
				[
					'name' => 'user2',
					'surname' => 'surname2',
					'salary' => 2000,
				],
				[
					'name' => 'user3',
					'surname' => 'surname3',
					'salary' => 3000,
				],
			],
			'strings' => ['a', 'b', 'c'],
			'data' => [2, 4, 6],
		]);
	}
}
