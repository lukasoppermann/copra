<?php

use Faker\Factory as Faker;

class FsTagsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		$fake = Faker::create();

		foreach(range(1,10) as $index)
		{
			$items[] = [
				'name' => $fake->word()
			];
		}

		\DB::table('fs_tags')->insert($items);
	}

}
