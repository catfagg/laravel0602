<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('posts')->insert([
				[
					'title' => 'title 1',
					'slug'  => 'post-1',
					'text'  => 'text text text 1',
				],
				[
					'title' => 'title 2',
					'slug'  => 'post-2',
					'text'  => 'text text text 2',
				],
				[
					'title' => 'title 3',
					'slug'  => 'post-3',
					'text'  => 'text text text 3',
                ],
                [
                    'title' => Str::random(10),
				    'slug'  => Str::random(10),
				    'text'  => Str::random(50),

				],
			]);

        DB::table('domains')->insert([
				'name' => Str::random(10) . '.com',
			]);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
    }
}
