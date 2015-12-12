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
		// truncate
		\DB::table('fs_content')->truncate();
		// main
		$this->call('FsContentTableSeeder');
		$this->call('FsNews');
		$this->call('FsKarriere');
		// additional seeders
		$this->call('ReferencesContentTableSeeder');

		// --------------------------
		// Stream Seeding
		//
		// truncate
		\DB::table('fs_stream')->truncate();
		// main
		$this->call('FsStreamTableSeeder');
		// additional seeders only add data
		$this->call('ReferencesStreamTableSeeder');

		// --------------------------
		// Tags Seeding
		//
		// truncate
		\DB::table('fs_tags')->truncate();
		// main
		$this->call('FsTagsTableSeeder');
		// additional seeders only add data
		$this->call('FsContentTagsTableSeeder');
		// --------------------------
		// Jobs Seeding
		//
		// truncate
		$this->call('FsJobs');
	}

}
