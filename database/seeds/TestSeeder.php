<?php

use Illuminate\Database\Seeder;

class TestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::table('users')->insert([
        	[
        		'username' => 'johan',
        		'email' => 'johanst1409@gmail.com',
        		'password' => bcrypt('wachtwoord1'),
        	],
        	[
        		'username' => 'vamidi',
        		'email' => 'vamidi@gmail.com',
        		'password' => bcrypt('wachtwoord1'),
        	]
        ]);

        DB::table('profiles')->insert([
        	[
        		'user_id' => 1,
        	],
        	[
        		'user_id' => 2,
        	]
        ]);

        DB::table('teams')->insert(
        	[
        		'name' => 'VaMiDi Games',
        		'url_name' => 'vamidi-games',
        	]
        );
    }
}
