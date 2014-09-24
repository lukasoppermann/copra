<?php

class ReferencesContentTableSeeder extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{

		\DB::table('fs_content')->insert(array (
			11 =>
			array (
				'id' => 11,
				'article_id' => 11,
				'menu_label' => '',
				'link' => '',
				'status' => 1,
				'language' => 'de',
				'data' => '[
					{
						"class":"card-frontside",
						"content":[
							{
								"type": "default",
								"content": "###Charité - Universitätsmedizin Berlin\\nInbetriebnahme 2Q 2001",
								"class": "card-header",
								"media": [
									{
										"src": "hospital.png"
									}
								]
							},
							{
								"type": "default",
								"content": "####Fachbereiche\\nIntensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"Charité - Universitätsmedizin Berlin",
									"Umfang":"504 Arbeitsplätze",
									"Inbetriebnahme":"2. Quartal 2001",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring":"Hewlett Packard-CMS, GE",
									"Beatmung":"Puritan Bennett, Dräger Evita, Siemens Servo i",
									"Labor":"Anbindung des Zentrallabors via HL7-Protokoll",
									"KIS":"i.s.h.med für SAP, Medvision"
								}
							}
						]
					}
				]',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),
			),
			12 =>
			array (
				'id' => 12,
				'article_id' => 12,
				'menu_label' => '',
				'link' => '',
				'status' => 1,
				'language' => 'de',
				'data' => '[{
					"class":"card-frontside",
					"content":[
						{
							"type": "default",
							"content": "###Friedrich-Schiller-Universitätsklinikum Jena\\nInbetriebnahme 2Q 1998",
							"class": "card-header",
							"media": [
								{
									"src": "hospital.png"
								}
							]
						},
						{
							"type": "default",
							"content": "####Fachbereiche\\nAnästhesie, Intensivstation, Aufwachraum, Kinder-Intensivstation, Zentrale Arbeitsplätze, Normalstation"
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
								"Headline":"Friedrich-Schiller-Universitätsklinikum Jena",
								"Umfang":"500 Arbeitsplätze",
								"Inbetriebnahme":"2. Quartal 1998",
								"Fachbereiche":"Anästhesie, Intensivstation, Aufwachraum, Kinder-Intensivstation, Zentrale Arbeitsplätze, Normalstation",
								"Monitoring":"Philips, Hewlett Packard-CMS",
								"Beatmung":"Dräger, Siemens",
								"Labor":"LDS - LaborDataSystem",
								"Infusion":"B|Braun Melsungen",
								"KIS":"i.s.h.med für SAP"
							}
						}
					]
				}]',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),
			),
				13 =>
				array (
					'id' => 13,
					'article_id' => 13,
					'menu_label' => '',
					'link' => '',
					'status' => 1,
					'language' => 'de',
					'data' => '[{
						"class":"card-frontside",
						"content":[
							{
								"type": "default",
								"content": "###Klinikum Stuttgart\\nInbetriebnahme 4Q 2001",
								"class": "card-header",
								"media": [
									{
										"src": "hospital.png"
									}
								]
							},
							{
								"type": "default",
								"content": "####Fachbereiche\\nIntensivstation, Zentrale Arbeitsplätze, IMC"
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
									"Headline":"Klinikum Stuttgart",
									"Umfang":"430 Arbeitsplätze",
									"Inbetriebnahme":"4. Quartal 2001",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze, IMC",
									"Monitoring":"Philips, Datex-Ohmeda",
									"Beatmung":"MAQUET: Servo i, Bennett 840, Dräger Evita 2, Dräger Evita 4",
									"Infusion":"B|Braun Melsungen",
									"KIS":"i.s.h.med für SAP",
									"Weiteres":"Standorte: Bad Cannstadt, Katharinenhospital, Olgahospital, Bürgerhospital"
								}
							}
						]
					}]',
					'created_at' => date("Y-m-d h:i:s"),
					'updated_at' => date("Y-m-d h:i:s"),
				),
				14 =>
				array (
					'id' => 14,
					'article_id' => 14,
					'menu_label' => '',
					'link' => '',
					'status' => 1,
					'language' => 'de',
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
										"Headline":"Universitätsklinikum Würzburg",
										"Umfang":"320 Arbeitsplätze",
										"Inbetriebnahme":"4. Quartal 2011",
										"Fachbereiche":"Anästhesie, Intensivstation, Zentrale Arbeitsplätze",
										"Monitoring":"Philips",
										"Beatmung":"Dräger, Bennett, Maquet",
										"Labor":"Frey SwisslabII, Lauris",
										"Infusion":"B|Braun Melsungen",
										"Narkose":"Dräger",
										"KIS":"i.s.h.med für SAP",
										"Weiteres":"Radiometer ABL"
									}
								}
							]
						}
					]',
					'created_at' => date("Y-m-d h:i:s"),
					'updated_at' => date("Y-m-d h:i:s"),
				),
				15 =>
				array (
					'id' => 15,
					'article_id' => 15,
					'menu_label' => '',
					'link' => '',
					'status' => 1,
					'language' => 'de',
					'data' => '[{
						"class":"card-frontside",
						"content":[
							{
								"type": "default",
								"content": "###Universitätsklinikum Leipzig\\nInbetriebnahme 1Q 1994",
								"class": "card-header",
								"media": [
									{
										"src": "hospital.png"
									}
								]
							},
							{
								"type": "default",
								"content": "####Fachbereiche\\nAnästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze"
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
									"Headline":"Universitätsklinikum Leipzig",
									"Umfang":"307 Arbeitsplätze",
									"Inbetriebnahme":"1. Quartal 1994",
									"Fachbereiche":"Anästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze",
									"Monitoring":"Hewlett Packard-CMS, Siemens Sirecust, Datex Capnomac, Marquette Hellige",
									"Beatmung":"MAQUET: Datex, KION, Dräger Evita",
									"Labor":"Anbindung des Zentrallabors via HL7-Protokoll",
									"Infusion":"B|Braun Melsungen, Alaris",
									"KIS":"i.s.h.med für SAP",
									"Weiteres":"Export von Leistungsdaten an SAP, Radiometer ABL"
								}
							}
						]
					}]',
					'created_at' => date("Y-m-d h:i:s"),
					'updated_at' => date("Y-m-d h:i:s"),
				),
					16 =>
					array (
						'id' => 16,
						'article_id' => 16,
						'menu_label' => '',
						'link' => '',
						'status' => 1,
						'language' => 'de',
						'data' => '[{
							"class":"card-frontside",
							"content":[
								{
									"type": "default",
									"content": "###Universitätsklinikum Freiburg\\nInbetriebnahme 2Q 2008",
									"class": "card-header",
									"media": [
										{
											"src": "hospital.png"
										}
									]
								},
								{
									"type": "default",
									"content": "####Fachbereiche\\nIntensivstation, Zentrale Arbeitsplätze"
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
										"Headline":"Universitätsklinikum Freiburg",
										"Umfang":"231 Arbeitsplätze",
										"Inbetriebnahme":"2. Quartal 2008",
										"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze",
										"Monitoring":"Siemens, Dräger",
										"Beatmung":"Dräger, Hamilton",
										"Infusion":"B|Braun Melsungen",
										"KIS":"KIS Freiburg",
										"Weiteres":"Einsatz des in eingebetteten COPRA-Viewers auf 2.000 - 3.000 KIS-Arbeitsplätzen für den lesenden Akten-Zugriff"
									}
								}
							]
						}]',
						'created_at' => date("Y-m-d h:i:s"),
						'updated_at' => date("Y-m-d h:i:s"),
					),







		));
	}

}
