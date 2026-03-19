<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
	public function show()
	{
		{	
			DB::table('users')->get();

			DB::table('users')->select('name', 'email')->get();

			DB::table('posts')->where('id', '!=', 3)->get();

			DB::table('users')->where('age', '=', 30)->get();

			DB::table('users')->where('age', '!=', 30)->get();

			DB::table('users')->where('age', '>', 30)->get();

			DB::table('users')->where('age', '<', 30)->get();

			DB::table('users')->where('age', '<=', 30)->get();

			DB::table('users')->where('age', '>', 20)->where('age', '<', 30)->get();

			DB::table('users')->where('age', '=', 30)->orWhere('id', '>', 4)->get();

			DB::table('users')->where('age', '=', 30)->orWhere('salary', '=', 500)->orWhere('id', '>', 4)->get();

			DB::table('users')->where('salary', '=', 500)->orWhere('age', '>', 20)->where('age', '<', 30)->get();

			DB::table('users')->where('age', '>', 20)->where('age', '<', 30)->orWhere('salary', '>', 400)->where('salary', '<', 800)->get();

			DB::table('users')->where('id', '=', 3)->get();

			DB::table('users')->where('id', '=', 3)->first()->get();

			DB::table('users')->where('id', '=', 3)->value('email')->get();

			DB::table('users')->pluck('name')->get();

			DB::table('users')->whereBetween('age', [30, 40])->get();

			DB::table('users')->whereNotBetween('age', [30, 40])->get();

			DB::table('users')->whereIn('id', [1, 2, 3, 5])->get();

        	DB::table('users')->whereNotIn('id', [1, 2, 3, 5])->get();

			DB::table('users')->where('name', '=', 'john')->get();

			DB::table('users')->where('email', '=', 'john@mail.com')->get();

			DB::table('users')->where('id', '=', 3)->where('age', '=', 20)->get();

			DB::table('users')->where('id', '=', 3)->orWhere('age', '=', 20)->get();

			DB::table('users')->orderBy('age', 'asc')->get();

			DB::table('users')->orderBy('salary', 'desc')->get();

			DB::table('users')->orderBy('created_at', 'asc')->get();

			DB::table('users')->orderBy('created_at', 'desc')->get();

			DB::table('users')->where('age', '>', 30)->orderBy('created_at', 'asc')->get();

			DB::table('users')->inRandomOrder()->get();

			DB::table('users')->take(3)->get();

			DB::table('users')->skip(5)->take(10)->get();

			DB::table('users')->where('age', '=', 30)->take(3)->get();
			
			DB::table('users')->insert('name' => 'leha');

			DB::table('users')->insertGetId([
				'name' => 'johnny',
			]);

			DB::table('users')->insert([
			[
				'name' => 'john',
			],
			[
				'name' => 'jane',
			],
			[
				'name' => 'joe',
			]
			]);

			DB::table('users')->where('id', '=', 5)->update(['salary' => 10]);

			DB::table('users')->where('age', '=', 30)->update(['salary' => 500]);

			DB::table('users')->where('id', '=' 34)->increment('age');

			DB::table('users')->where('age', '=' 30)->increment('salary', 100);

			DB::table('users')->where('id', '=', 5)->delete();

			DB::table('users')->delete();
		}
	}
}