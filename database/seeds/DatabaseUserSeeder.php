<?php
/**
 * Created by PhpStorm.
 * User: valenciohoffman
 * Date: 11-03-18
 * Time: 15:02
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseUserSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		DB::table('users')->insert([
			'username' => 'administrator',
			'email' => str_random(10).'@gmail.com',
			'password' => bcrypt('demo1234'),
		]);
		DB::table('users')->insert([
			'username' => 'programmer',
			'email' => str_random(10).'@gmail.com',
			'password' => bcrypt('anotherdemo1234'),
		]);
		DatabaseTeamSeeder::class;
	}
}
