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

		// --------------------------
		// Content Seeding
		//
		// this seeder truncates DB !
		$this->call('FsContentTableSeeder');
		// additional seeders
		$this->call('ReferencesContentTableSeeder');

		// --------------------------
		// Stream Seeding
		//
		// this seeder truncates DB !
		$this->call('FsStreamTableSeeder');
		// additional seeders only add data
		$this->call('ReferencesStreamTableSeeder');
	}

}
