<?php

class FsStreamTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{

		\DB::table('fs_stream')->insert(array (
			array (
				'id' => 1,
				'stream' => 'navigation',
				'parent_id' => 0,
				'position' => 1,
				'article_id' => 1,
			),
			array (
				'id' => 2,
				'stream' => 'navigation',
				'parent_id' => 0,
				'position' => 2,
				'article_id' => 2,
			),
			array (
				'id' => 3,
				'stream' => 'navigation',
				'parent_id' => 0,
				'position' => 3,
				'article_id' => 3,
			),
			array (
				'id' => 4,
				'stream' => 'navigation',
				'parent_id' => 0,
				'position' => 4,
				'article_id' => 4,
			),
			array (
				'id' => 5,
				'stream' => 'navigation',
				'parent_id' => 0,
				'position' => 5,
				'article_id' => 5,
			),
			array (
				'id' => 6,
				'stream' => 'footer-navi',
				'parent_id' => 0,
				'position' => 6,
				'article_id' => 6,
			),
			array (
				'id' => 201,
				'stream' => 'footer-navi',
				'parent_id' => 0,
				'position' => 3,
				'article_id' => 201,
			),
			array (
				'id' => 8,
				'stream' => 'news-right',
				'parent_id' => 0,
				'position' => 3,
				'article_id' => 8,
			),
			array (
				'id' => 9,
				'stream' => 'news',
				'parent_id' => 0,
				'position' => 6,
				'article_id' => 9,
			),
			array (
				'id' => 10,
				'stream' => 'news-right',
				'parent_id' => 0,
				'position' => 1,
				'article_id' => 101,
			),
			array (
				'id' => 102,
				'stream' => 'news-right',
				'parent_id' => 0,
				'position' => 2,
				'article_id' => 102,
			)
			,array (
				'id' => 103,
				'stream' => 'news',
				'parent_id' => 0,
				'position' => 3,
				'article_id' => 103,
			)
			,array (
				'id' => 104,
				'stream' => 'news',
				'parent_id' => 0,
				'position' => 2,
				'article_id' => 104,
			)
			,array (
				'id' => 105,
				'stream' => 'news',
				'parent_id' => 0,
				'position' => 1,
				'article_id' => 105,
			)
		));
	}

}
