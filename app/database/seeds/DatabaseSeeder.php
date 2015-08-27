<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		DB::table('permissions')->delete();

		DB::table('roles')->delete();

		DB::table('posts')->delete();

		DB::table('users')->delete();

		$this->call('UsersTableSeeder');

		$this->call('PostsTableSeeder');

		$this->call('EntrustSeeder');
	}

}
