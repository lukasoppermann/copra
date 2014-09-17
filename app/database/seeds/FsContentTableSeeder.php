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
				      "class": "space-bottom-wide",
				      "link": "Vision",
				      "content": [
				          {
				              "type": "default",
				              "column": 12,
				              "content": "#Vision\\n>Das Logbuch für jeden Patientenaufenthalt und ein neuer Helfer im behandelnden Team.",
				              "class": "space-bottom-wide"
				          },
				          {
				              "type": "default",
				              "column": 4,
				              "media":[
												{"src": "icon-connected.svg"}
											],
											"content": "##Vernetzt\\nCopra ermöglicht eine leichte Anbindung an viele Drittsysteme, Geräte, Exportschnittstellen und Apps.",
				              "class": "centered-content padded-column"
				          },
				          {
				              "type": "default",
				              "column": 4,
											"media":[
												{"src": "icon-verfuegbarkeit.svg"}
											],
				              "content": "##99% verfügbar\\nEgal ob unterbrochenes Netzwerk, kaputter Server oder das Gerät ohne Netzverbindung transportiert wird - für die Dokumentation steht COPRA jederzeit bereit.",
				              "class": "centered-content padded-column"
				          },
				          {
				              "type": "default",
				              "column": 4,
											"media":[
												{"src": "icon-customize.svg"}
											],
				              "content": "##Customizable\\nPerfekte Integration in Ihre Prozesse und individuelle Anpassung auf die Vorzüge eines Hauses.",
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
												{"src": "icon-doctor.svg"}
											],
				              "content": "##Ärzte\\n- Fachbezogene Unterstützung des Verodnungsworkflows\\n- Integrierte Interaktionschecks\\n- Plausibilitätsprüfung\\n- Flexibles Berichtswesen\\n- Offlineverfügbarkeit des Systems\\n\\n[Produktdetails](http://http://www/copra/public/produkt)",
				              "class": "user-features"
				          },
				          {
				              "type": "default",
				              "column": 3,
				              "media": [
												{"src": "icon-nurse.svg"}
											],
				              "content": "##Pflege\\n- Fachbezogene Unterstützung des Verodnungsworkflows\\n- Integrierte Interaktionschecks\\n- Plausibilitätsprüfung\\n- Flexibles Berichtswesen\\n- Offlineverfügbarkeit des Systems\\n\\n[Produktdetails](http://http://www/copra/public/produkt)",
				              "class": "user-features"
				          },
				          {
				              "type": "default",
				              "column": 3,
				              "media": [
												{"src": "icon-management.svg"}
											],
				              "content": "##Management\\n- Fachbezogene Unterstützung des Verodnungsworkflows\\n- Integrierte Interaktionschecks\\n- Plausibilitätsprüfung\\n- Flexibles Berichtswesen\\n- Offlineverfügbarkeit des Systems\\n\\n[Produktdetails](http://http://www/copra/public/produkt)",
				              "class": "user-features"
				          },
				          {
				              "type": "default",
				              "column": 3,
											"media": [
												{"src": "icon-it.svg"}
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
				                      "type": "stream",
				                      "class": "news",
															"stream": "news",
															"mode": "preview"
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
				'status' => 2,
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
											"content": "# Wir arbeiten an der Zukunft\\nCopra entwickelt das PDMS von morgen, mit innovative Ideen und neuen Ansätzen.",
											"class": "banner js-banner"
									}
							]
					},
				"2":{
					"link": "Firmenwerte",
					"class": "spacing-bottom inner-section-padding-bottom inner-section-shadow teaser-box-section",
					"content": [
						{
							"type": "subsection",
							"column": 4,
							"class":"padded-column-small",
							"content": [
								{
									"type": "default",
									"media":[
										{
											"src": "icon-listen.svg",
											"class": "media--noResize"
										}
									],
									"content": "##Starke Kundenorientierung\\nFeatures werden in sehr enger Zusammenarbeit mit dem Kunden abgestimmt.\\n\\nDurch jährliche Anwendertreffen ist eine aktive COPRA-Community entstanden, die sich über die verschiedenen Lösungsansätze im stark individualisierbarem COPRA austauschen.",
									"class": "padded-column padding-top-small teaser-card teaser-card--image-top teaser-card--quiet teaser-card--fadeBottom"
								}
							]
						},
						{
							"type": "subsection",
							"column": 4,
							"class":"padded-column-small",
							"content": [
								{
										"type": "default",
										"media":[
											{
												"src": "icon-innovation.svg",
												"class": "media--noResize"
												}
										],
										"content": "##Innovation\\nEin Großteil unserer Kunden sind Universitätskliniken, die am Puls der Zeit mit großem Forschungsinteresse neue Ideen entwickeln und ausprobieren wollen.\\n\\nWir holen uns Experten für die Bereiche, die eine intensive und kontinuierliche Entwicklung erleben oder stark spezialisiert sind. Z.B. Softwarearchitektur-Pattern, UI/UX Design, Fachmodule (Neonatologie)",
										"class": "padded-column padding-top-small teaser-card teaser-card--image-top teaser-card--quiet teaser-card--fadeBottom"
								}
							]
						},
						{
							"type": "subsection",
							"column": 4,
							"class":"padded-column-small",
							"content": [
								{
										"type": "default",
										"media":[
											{
												"src": "icon-hospital.svg",
												"class": "media--noResize"
											}
										],
										"content": "##Spezialisierte Software für einen spezialisierten Bereich\\n**Offlineverfügbarkeit** – Weil das System in kritischen Situationen immer verfügbar sein muss.\\n\\n**Kompatibel** – Ein großes Arsenal an Treibern und hoch integrierte Anbindungen von Drittsystemen bedeutet, COPRA spricht die Sprache des Einsatzbereichs.",
										"class": "padded-column padding-top-small teaser-card teaser-card--image-top teaser-card--quiet teaser-card--fadeBottom"
								}
							]
						}
				]},
				"3":{
					"class": "section section--white-to-gray padding-bottom-wide",
					"link": "Firmengeschichte",
					"content": [{
							"type": "default",
							"column": 12,
							"content": "#Firmengeschichte"
						},
						{
						"type": "array",
						"column": 12,
						"class": "timeline",
						"content": [
							"####Stand heute  \nWir investieren viel in Innovationen.",
							"####Headline  \nEntwicklung des Produkts in enger Zusammenarbeit mit den Anwendern",
							"####COPRA5-Meilensteine  \nEntwicklung des Produkts in enger Zusammenarbeit mit den Anwendern",
							"####Gegründet in 1993  \nEntwicklung des Produkts in enger Zusammenarbeit mit den Anwendern"
						]
					}]
				},
				"4":{
					"link": "Über die Firma",
					"class": "section--gray",
					"content": [
						{
							"type":"default",
							"class":"teaser-card teaser-card--halfed prepend-1",
							"column": 11,
							"media":[
								{
									"src": "copra-features-teaser.jpg"
								}
							],
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
								"content": "#Unsere Referenzkliniken",
								"class": "banner js-banner"
							}
						]
					},
					"2":{
						"class":"section-02",
						"content":[
							{
								"type": "stream",
								"column": 12,
								"stream": "references",
								"mode": "card",
								"class": "grid js-searchable"
							}
						]
					}
				}',
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
				'data' => '{
					"1":{
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
												"content": "#Wir arbeiten an der Zukunft\\nCopra entwickelt das PDMS von morgen, mit innovative Ideen und neuen Ansätzen.",
												"class": "banner js-banner"
										}
								]
						},
					"2":{
						"class": "spacing-bottom",
						"content":[{
							"type": "default",
							"column": 12,
							"content": "##Kontaktieren Sie uns",
							"class": "align-left"
							},{
								"type": "default",
								"column": 8,
								"content": "Haben Sie Interesse an mehr Informationen oder möchten Sie einen Präsentationstermin mit uns vereinbaren, um die Bedienung und die Möglichkeiten unseres Patienten-Daten-Management-Systems COPRA kennenzulernen, so rufen Sie uns bitte an oder senden Sie uns eine Email.",
								"class": "append-2"
							},{
									"type": "default",
									"column": 4,
									"content": "####Copra System GmbH  \\n<span class=\"label\">Tel.:</span> +49 30 80 20 20 335  \\n<span class=\"label\">Fax:</span> +49 30 80 20 20 333  \\n<span class=\"label\">Email:</span> <mailto:vertrieb@copra-system.de>   \\n  \\n<span class=\"label\">Adresse:</span>  \\nBerliner Straße 112a  \\n13189 Berlin",
									"class": "contact-box"
							}
						]
					}
				}',
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
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "default","column": 2,"content": "#Headline content is in markdown","class": "optional-classes"}}}}',
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
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "default","column": 2,"content": "#Newseintrag eins\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.","class": "optional-classes"}}}}',
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
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "default","column": 2,"content": "#Newseintrag zwei\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.","class": "optional-classes"}}}}',
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
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "default","column": 2,"content": "#Newseintrag zwei\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.","class": "optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			9 =>
			array (
				'id' => 11,
				'article_id' => 11,
				'menu_label' => '',
				'link' => '',
				'status' => 1,
				'language' => 'de',
				'type' => 2,
				'data' => '[
					{
						"class":"card-frontside",
						"content":[
							{
								"type": "default",
								"content": "###Universitätsklinikum Würzburg\\nInbetriebnahme 4Q 2011",
								"class": "card-header",
								"media": [
									{
										"src": "hospital.png"
									}
								]
							},
							{
								"type": "default",
								"content": "####Fachbereiche\\nAnästhesie, Intensivstation, Zentrale Arbeitsplätze"
							}
						]
					},
					{
						"class":"card-backside",
						"content":[
							{
								"type": "array",
								"mode": "default",
								"content": {
									"Headline": "Universitätsklinikum Würzburg",
									"Umfang": "320 Arbeitsplätze",
									"Inbetriebnahme": "4Q 2011",
									"Fachbereiche": "Anästhesie, Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring": "Philips",
									"Beatmung": "Dräger, Bennett, Maquet",
									"Labor": "Frey SwisslabII, Lauris",
									"Infusion": "B|Braun Melsungen",
									"Narkose": "Dräger",
									"KIS": "i.s.h.med für SAP",
									"Weiteres": "Radiometer ABL"
								}
							}
						]
					}
				]',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			10 =>
			array (
				'id' => 12,
				'article_id' => 12,
				'menu_label' => '',
				'link' => '',
				'status' => 1,
				'language' => 'de',
				'type' => 2,
				'data' => '[{
					"class":"card-frontside",
					"content":[
						{
							"type": "default",
							"content": "###Universitätsklinikum Jena\\nInbetriebnahme 4Q 2013",
							"class": "card-header",
							"media": [
								{
									"src": "hospital.png"
								}
							]
						},
						{
							"type": "default",
							"content": "####Fachbereiche\\nAnästhesie, Neonatologie, Zentrale Arbeitsplätze"
						}
					]
				},
				{
					"class":"card-backside",
					"content":[
						{
							"type": "array",
							"mode": "default",
							"content": {
								"Headline": "Universitätsklinikum Jena",
								"Umfang": "130 Arbeitsplätze",
								"Inbetriebnahme": "4Q 2013",
								"Fachbereiche": "Anästhesie, Neonatologie, Zentrale Arbeitsplätze",
								"Monitoring": "Siemens",
								"Beatmung": "Dräger, Bennett, Maquet",
								"Labor": "Frey SwisslabII, Lauris",
								"Infusion": "B|Braun Melsungen",
								"Narkose": "Dräger",
								"KIS": "i.s.h.med für SAP",
								"Weiteres": "Radiometer ABL"
							}
						}
					]
				}]',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
			11 =>
			array (
				'id' => 13,
				'article_id' => 13,
				'menu_label' => '',
				'link' => '',
				'status' => 1,
				'language' => 'de',
				'type' => 2,
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "default","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "default","column": 2,"content": "###Krankenhaus Hamburg\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.","class": "optional-classes"}}}}',
				'created_at' => '0000-00-00 00:00:00',
				'updated_at' => '0000-00-00 00:00:00',
				'deleted_at' => '0000-00-00 00:00:00',
			),
		));
	}

}
