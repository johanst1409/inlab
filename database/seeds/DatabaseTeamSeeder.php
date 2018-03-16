<?php
/**
 * Created by PhpStorm.
 * User: valenciohoffman
 * Date: 10-03-18
 * Time: 23:21
 */

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseTeamSeeder extends Seeder
{
	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		// $this->call(UsersTableSeeder::class);
		DB::table('teams')->insert([
			'name' => 'inlab collaboration'
		]);
		DB::table('teams')->insert([
			'name' => 'programmers team'
		]);
		DB::table('user_team')->insert([
			'user_id' => 2,
			'owner_id' => 1,
			'team_id' => 1
		]);
		DB::table('user_team')->insert([
			'user_id' => 1,
			'owner_id' => 2,
			'team_id' => 2
		]);
		DB::table('user_team')->insert([
			'user_id' => 1,
			'owner_id' => 1,
			'team_id' => 1
		]);
		DB::table('user_team')->insert([
			'user_id' => 2,
			'owner_id' => 2,
			'team_id' => 2
		]);

	}
}
