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
				              "type": "default",
				              "column": 12,
				              "media": [
				                  {
				                      "src": "banner.jpg",
				                      "description": "Some optional text"
				                  }
				              ],
				              "content": "# Kliniken in ganz Deutschland.\\nDurch das Copra PMS wird die Arbeite in vielen Kliniken erleichtert.",
				              "class": "banner js-banner"
				          }
				      ]
				  },
				  {
				      "class": "section-02",
				      "link": "Vision",
				      "content": [
				          {
				              "type": "default",
				              "column": 12,
				              "content": "#Unsere Vision\\n>Ein einheitliches System für die gesamte Arbeit auf der Station",
				              "class": "space-bottom-wide"
				          },
				          {
				              "type": "default",
				              "column": 4,
				              "media":[
												{"src": "icon.png"}
											],
											"content": "##Patientenakte\\nEine elektronische Dokumentation mit COPRA trägt zu einer Standardisierung der Sprache in der Klinik bei, da die  Auswahlmöglichkeiten individuell, aber eindeutig sind.",
				              "class": "centered-content padded-column"
				          },
				          {
				              "type": "default",
				              "column": 4,
											"media":[
												{"src": "icon.png"}
											],
				              "content": "##Geräteübernahme\\nEine elektronische Dokumentation mit COPRA trägt zu einer Standardisierung der Sprache in der Klinik bei, da die  Auswahlmöglichkeiten individuell, aber eindeutig sind.",
				              "class": "centered-content padded-column"
				          },
				          {
				              "type": "default",
				              "column": 4,
											"media":[
												{"src": "icon.png"}
											],
				              "content": "##Auswertungen\\nEine elektronische Dokumentation mit COPRA trägt zu einer Standardisierung der Sprache in der Klinik bei, da die  Auswahlmöglichkeiten individuell, aber eindeutig sind.",
				              "class": "centered-content padded-column"
				          }
				      ]
				  },
				  {
				      "class": "red-section",
				      "link": "Anwendungsgebiete",
				      "content": [
				          {
				              "type": "default",
				              "column": 3,
											"media": [
												{"src": "doctor.png"}
											],
				              "content": "##Ärzte\\n- Fachbezogene Unterstützung des Verodnungsworkflows\\n- Integrierte Interaktionschecks\\n- Plausibilitätsprüfung\\n- Flexibles Berichtswesen\\n- Offlineverfügbarkeit des Systems\\n\\n[Produktdetails](http://http://www/copra/public/produkt)",
				              "class": "user-features"
				          },
				          {
				              "type": "default",
				              "column": 3,
				              "media": [
												{"src": "doctor.png"}
											],
				              "content": "##Pflege\\n- Fachbezogene Unterstützung des Verodnungsworkflows\\n- Integrierte Interaktionschecks\\n- Plausibilitätsprüfung\\n- Flexibles Berichtswesen\\n- Offlineverfügbarkeit des Systems\\n\\n[Produktdetails](http://http://www/copra/public/produkt)",
				              "class": "user-features"
				          },
				          {
				              "type": "default",
				              "column": 3,
				              "media": [
												{"src": "doctor.png"}
											],
				              "content": "##Management\\n- Fachbezogene Unterstützung des Verodnungsworkflows\\n- Integrierte Interaktionschecks\\n- Plausibilitätsprüfung\\n- Flexibles Berichtswesen\\n- Offlineverfügbarkeit des Systems\\n\\n[Produktdetails](http://http://www/copra/public/produkt)",
				              "class": "user-features"
				          },
				          {
				              "type": "default",
				              "column": 3,
											"media": [
												{"src": "doctor.png"}
											],
				              "content": "##IT\\n- Fachbezogene Unterstützung des Verodnungsworkflows\\n- Integrierte Interaktionschecks\\n- Plausibilitätsprüfung\\n- Flexibles Berichtswesen\\n- Offlineverfügbarkeit des Systems\\n\\n[Produktdetails](http://http://www/copra/public/produkt)",
				              "class": "user-features"
				          }
				      ]
				  },
				  {
				      "class": "section-04 section--gray",
				      "link": "Neuigkeiten",
				      "content": [
				          {
				              "type": "subsection",
				              "column": 7,
				              "content": [
				                  {
				                      "type": "default",
															"media": [
				                      	{"src": "copra-features-teaser.jpg"}
															],
				                      "content": "##Vorteile des Copra Systems\\nDer große Vorteil einer computergestützten Dokumentation besteht darin, dass Funktionen genutzt werden, die in einer handschriftlichen Dokumentation zu viel Aufwand bedeuten oder schlicht unmöglich wären.",
				                      "class": "teaser-card teaser-card--image-right"
				                  },
				                  {
				                      "type": "default",
				                      "media": [
																{"src": "copra-features-teaser.jpg"}
															],
				                      "content": "##Integrationsprozess\\nDer große Vorteil einer computergestützten Dokumentation besteht darin, dass Funktionen genutzt werden, die in einer handschriftlichen Dokumentation zu viel Aufwand bedeuten oder schlicht unmöglich wären.",
				                      "class": "teaser-card"
				                  }
				              ]
				          },
				          {
				              "type": "subsection",
				              "column": 5,
				              "content": [
				                  {
				                      "type": "posts",
				                      "class": "news",
															"stream": "news"
				                  }
				              ]
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
				'data' => '{
				"1":{
							"class": "section-01",
							"content": [
									{
											"type": "default",
											"column": 12,
											"media": [
													{
															"src": "banner.jpg",
															"description": "Some optional text"
													}
											],
											"content": "# Wir arbeiten an der Zukunft\\nCopra entickelt das PMS von morgen, mit innovative Ideen und neuen Ansätzen.",
											"class": "banner js-banner"
									}
							]
					},
				"2":{
					"link": "Firmenwerte",
					"content": [
						{
								"type": "default",
								"column": 4,
								"media":[
									{"src": "icon.png"}
								],
								"content": "##Stark individualisierbar\\nJeder Kunde baut sein eigenes COPRA wenn er will",
								"class": "centered-content padded-column"
						},
						{
								"type": "default",
								"column": 4,
								"media":[
									{"src": "icon.png"}
								],
								"content": "##Customer driven\\nStandardfunktionen werden mit dem Kunden entwickelt, Kooperation mit Unikliniken, agile Entwicklung, heißt interaktive Entwicklung der Funktionen nah am Kunden",
								"class": "centered-content padded-column"
						},
						{
								"type": "default",
								"column": 4,
								"media":[
									{"src": "icon.png"}
								],
								"content": "##Connect any device\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
								"class": "centered-content padded-column"
						},
						{
								"type": "default",
								"column": 4,
								"media":[
									{"src": "icon.png"}
								],
								"content": "##Offenlegung vieler Daten\\nSkripting-Schnittstellen",
								"class": "centered-content padded-column"
						},
						{
								"type": "default",
								"column": 4,
								"media":[
									{"src": "icon.png"}
								],
								"content": "##Geförderter Kundenaustausch\\nAnwendertage",
								"class": "centered-content padded-column"
						},
						{
								"type": "default",
								"column": 4,
								"media":[
									{"src": "icon.png"}
								],
								"content": "##Ständige Unterstützung des behandelnden Teams\\nOffline-Verfügbarkeit",
								"class": "centered-content padded-column"
						}
				]},
				"3":{
					"class": "section--gray",
					"link": "Firmengeschichte",
					"content": [{
						"type": "default",
						"column": 12,
						"media":[
							{"src": "icon.png"}
						],
						"content": "##Zeitstrahl\\ngegründet in 1993 • Entwicklung des Produkts in enger Zusammenarbeit mit den Anwendern • (COPRA5-Meilensteine) • Umstellung auf .NET und C# • (Kunde XYZ rollt COPRA aus) • Stand heute",
						"class": "centered-content padded-column"
					}]
				},
				"4":{
					"link": "Über die Firma",
					"content": [{
						"type": "default",
						"column": 6,
						"media":[
							{"src": "copra-features-teaser.jpg"}
						]
					},
					{
						"type":"default",
						"column": 6,
						"content": "##So arbeiten wir\\nArbeit nach Scrum und Kanban, Nutzung kreativer Methoden wie Design Thinking. Beteiligung an lokalen und nationalen User-Groups im Bereich der Softwareentwicklung. Get expert knowledge where we don\'t have it (oder Firmenwert?) -> regelmäßige Schulungen, Beratung durch Firmen wie GrossWeber, Datenbankspezialisten, UI/UX Designer"
					}
					]
				}
				}',
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
			6 =>
			array (
				'id' => 8,
				'article_id' => 8,
				'menu_label' => '',
				'link' => '',
				'status' => 1,
				'language' => 'de',
				'type' => 2,
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "text","column": 2,"content": "#Headline content is in markdown","class": "optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			7 =>
			array (
				'id' => 9,
				'article_id' => 9,
				'menu_label' => '',
				'link' => '',
				'status' => 1,
				'language' => 'de',
				'type' => 2,
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "text","column": 2,"content": "#Headline content is in markdown","class": "optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			8 =>
			array (
				'id' => 10,
				'article_id' => 10,
				'menu_label' => '',
				'link' => '',
				'status' => 1,
				'language' => 'de',
				'type' => 2,
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "text","column": 2,"content": "#Headline content is in markdown","class": "optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
