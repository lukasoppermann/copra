<?php

class ReferencesStreamTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		$start = 11;
		$amount = 40;

		for( $i = 0; $i < $amount; $i++ )
		{
			$array[$start+$i] = array (
				'id' => $start+$i,
				'stream' => 'references',
				'parent_id' => 0,
				'position' => $i+1,
				'article_id' => $start+$i,
			);
		}
		\DB::table('fs_stream')->insert($array);
		// \DB::table('fs_stream')->insert(array (
		// 	10 =>
		// 	array (
		// 		'id' => 11,
		// 		'stream' => 'references',
		// 		'parent_id' => 0,
		// 		'position' => 1,
		// 		'article_id' => 11,
		// 	),
		// 	11 =>
		// 	array (
		// 		'id' => 12,
		// 		'stream' => 'references',
		// 		'parent_id' => 0,
		// 		'position' => 2,
		// 		'article_id' => 12,
		// 	),
		// 	13 =>
		// 	array (
		// 		'id' => 13,
		// 		'stream' => 'references',
		// 		'parent_id' => 0,
		// 		'position' => 3,
		// 		'article_id' => 13,
		// 	),
		//
		// ));
	}

}
