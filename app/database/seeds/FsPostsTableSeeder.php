<?php

class FsPostsTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('fs_posts')->truncate();

		\DB::table('fs_posts')->insert(array (
			0 =>
			array (
				'id' => 1,
				'stream' => 'news',
				'position' => 1,
				'article_id' => 8,
			),
			1 =>
			array (
				'id' => 2,
				'stream' => 'news',
				'position' => 2,
				'article_id' => 9,
			),
			2 =>
			array (
				'id' => 3,
				'stream' => 'news',
				'position' => 3,
				'article_id' => 10,
			)
		));
	}

}
