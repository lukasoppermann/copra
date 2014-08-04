<?php

class FsContentTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('fs_content')->truncate();

		\DB::table('fs_content')->insert(array (
			0 =>
			array (
				'id' => 1,
				'article_id' => 1,
				'menu_label' => 'Home',
				'link' => 'home',
				'status' => 1,
				'language' => 'de',
				'type' => 1,
				'data' => '[
				  {
				      "class": "section-01",
				      "content": [
				          {
				              "type": "image",
				              "column": 12,
				              "src": "banner.png",
				              "description": "Some optional text",
				              "content": "# Kliniken in ganz Deutschland.\\nDurch das Copra PMS wird die Arbeite in vielen Kliniken erleichtert.",
				              "class": "banner"
				          }
				      ]
				  },
				  {
				      "class": "section-02",
				      "link": "Vision",
				      "content": [
				          {
				              "type": "text",
				              "column": 12,
				              "content": "#Unsere Vision\\n>Ein einheitliches System für die gesamte Arbeit auf der Station",
				              "class": "optional-classes"
				          },
									{
											"type": "image",
											"column": 12,
											"src": "feature-teaser.jpg"
									},
									{
											"type": "text",
											"column": 4,
											"content": "##Patientenakte\\nEine elektronische Dokumentation mit COPRA trägt zu einer Standardisierung der Sprache in der Klinik bei, da die  Auswahlmöglichkeiten individuell, aber eindeutig sind.",
											"class": "centered-content"
									},
									{
											"type": "text",
											"column": 4,
											"content": "##Geräteübernahme\\nEine elektronische Dokumentation mit COPRA trägt zu einer Standardisierung der Sprache in der Klinik bei, da die  Auswahlmöglichkeiten individuell, aber eindeutig sind.",
											"class": "centered-content"
									},
									{
											"type": "text",
											"column": 4,
											"content": "##Auswertungen\\nEine elektronische Dokumentation mit COPRA trägt zu einer Standardisierung der Sprache in der Klinik bei, da die  Auswahlmöglichkeiten individuell, aber eindeutig sind.",
											"class": "centered-content"
									}
				      ]
				  },
				  {
				      "class": "section-03",
				      "link": "Anwendungsgebiete",
				      "content": [
				          {
				              "type": "text",
				              "column": 12,
				              "content": "#Anwendungsgebiete\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.",
				              "class": "optional-classes"
				          }
				      ]
				  }
				]',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			1 =>
			array (
				'id' => 2,
				'article_id' => 2,
				'menu_label' => 'Produkt',
				'link' => 'produkt',
				'status' => 1,
				'language' => 'de',
				'type' => 1,
				'data' => '{"1":{"class":"section-01","content":{"1":{"type":"image","column":3,"src":"imagefile.png","description":"Some optional text","class":"optional-classes"},"2":{"type":"text","column":2,"content":"#Headline content is in markdown","class":"optional-classes"},"3":{"type":"text","column":2,"content":"This is real **markdown** copy.","class":"optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			2 =>
			array (
				'id' => 3,
				'article_id' => 3,
				'menu_label' => 'Firmenprofil',
				'link' => 'firmenprofil',
				'status' => 1,
				'language' => 'de',
				'type' => 1,
				'data' => '[{"class":"","resizeitems":".resizable","column":"12","children":[{"editorid":"0"}]},{"content":[{"column":"12","type":"text","editorid":"1","content":"# Yes"}]}]',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '2014-07-28 12:26:06',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			3 =>
			array (
				'id' => 4,
				'article_id' => 4,
				'menu_label' => 'Referenzen',
				'link' => 'referenzen',
				'status' => 1,
				'language' => 'de',
				'type' => 1,
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "text","column": 2,"content": "#Headline content is in markdown\\nAnd a _little_ **Markdown**","class": "optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			4 =>
			array (
				'id' => 6,
				'article_id' => 6,
				'menu_label' => 'Kontakt',
				'link' => 'kontakt',
				'status' => 1,
				'language' => 'de',
				'type' => 1,
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "text","column": 2,"content": "#Headline content is in markdown","class": "optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			5 =>
			array (
				'id' => 7,
				'article_id' => 7,
				'menu_label' => 'Sub',
				'link' => 'home/sub',
				'status' => 1,
				'language' => 'de',
				'type' => 1,
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "text","column": 2,"content": "#Headline content is in markdown","class": "optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
