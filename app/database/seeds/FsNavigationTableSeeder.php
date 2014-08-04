<?php

class FsNavigationTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('fs_navigation')->truncate();
        
		\DB::table('fs_navigation')->insert(array (
			0 => 
			array (
				'id' => 1,
				'parent_id' => 0,
				'position' => 1,
				'article_id' => 1,
			),
			1 => 
			array (
				'id' => 2,
				'parent_id' => 0,
				'position' => 2,
				'article_id' => 2,
			),
			2 => 
			array (
				'id' => 3,
				'parent_id' => 0,
				'position' => 3,
				'article_id' => 3,
			),
			3 => 
			array (
				'id' => 4,
				'parent_id' => 0,
				'position' => 4,
				'article_id' => 4,
			),
			4 => 
			array (
				'id' => 5,
				'parent_id' => 0,
				'position' => 5,
				'article_id' => 5,
			),
			5 => 
			array (
				'id' => 6,
				'parent_id' => 0,
				'position' => 6,
				'article_id' => 6,
			),
			6 => 
			array (
				'id' => 7,
				'parent_id' => 1,
				'position' => 3,
				'article_id' => 7,
			),
		));
	}

}
