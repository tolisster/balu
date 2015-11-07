<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use App\User;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder {

	public function run()
	{
		DB::table('users')->delete();

		$user = User::create(array(
			'email' => 'tolisster@gmail.com',
			'first_name' => 'Anatoli',
			'last_name' => 'Lazar'
		));

		$user->save();

	}

}
