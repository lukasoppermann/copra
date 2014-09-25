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
        17 =>
         array (
         	'id' => 17,
         	'article_id' => 17,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Universitätsmedizin Mainz\nInbetriebnahme 4Q 2007",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze, IMC"
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
									"Headline":"Universitätsmedizin Mainz",
	                "Umfang":"183 Arbeitsplätze",
	                "Inbetriebnahme":"4. Quartal 2007",
	                "Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze, IMC",
	                "Monitoring":"Philips, Dräger, Siemens, GE",
	                "Beatmung":"Dräger, Hamilton, Maquet",
	                "Labor":"Frey SwisslabII, Lauris",
	                "Infusion":"B|Braun Melsungen, Fresenius, Alaris",
	                "KIS":"i.s.h.med für SAP",
	                "Weiteres":"Fresenius Multifiltrate, Radiometer ABL, iSoft RadCenter, SHA – Soarian Health Archive, ConVis DICOM Viewer, Frey SwisslabII, Lauris, Dorner M/Lab, IFSM PathoPro"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        18 =>
         array (
         	'id' => 18,
         	'article_id' => 18,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Herz- und Diabeteszentrum NRW - Bad Oeynhausen\nInbetriebnahme 2Q 1999",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nAnästhesie, Intensivstation, Zentrale Arbeitsplätze"
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
                  "Headline":"Herz- und Diabeteszentrum NRW - Bad Oeynhausen",
									"Umfang":"179 Arbeitsplätze",
									"Inbetriebnahme":"2. Quartal 1999",
									"Fachbereiche":"Anästhesie, Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring":"Siemens Sirecust 1280, Hewlett Packard-CMS, Philips",
									"Beatmung":"Dräger Cato, Siemens Servo Ventilator 300/900, Dräger Evita",
									"Labor":"Lauris",
									"Infusion":"B|Braun Melsungen",
									"KIS":"AGFA ORBIS"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        19 =>
         array (
         	'id' => 19,
         	'article_id' => 19,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Universitätsmedizin Rostock\nInbetriebnahme 2Q 2008",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Kinder-Intensivstation, Zentrale Arbeitsplätze, Notfallstation"
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
                  "Headline":"Universitätsmedizin Rostock",
                  "Umfang":"92 Arbeitsplätze",
                  "Inbetriebnahme":"2. Quartal 2008",
                  "Fachbereiche":"Intensivstation, Kinder-Intensivstation, Zentrale Arbeitsplätze, Notfallstation",
                  "Monitoring":"Philips",
                  "Beatmung":"Dräger, Maquet",
                  "Labor":"Frey Swisslab II",
                  "Infusion":"B|Braun Melsungen",
                  "KIS":"i.s.h.med für SAP",
                  "Weiteres":"Radiometer ABL"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        20 =>
         array (
         	'id' => 20,
         	'article_id' => 20,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###SRH Wald-Klinikum Gera gGmbH\nInbetriebnahme 2Q 2001",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"SRH Wald-Klinikum Gera gGmbH",
									"Umfang":"81 Arbeitsplätze",
									"Inbetriebnahme":"2. Quartal 2001",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring":"Dräger Infinity Delta, Siemens Sirecust 960, Siemens Sirecust 1280, Siemens SC9000",
									"Beatmung":"MAQUET: Servo Ventilator 300, Dräger Evita 4",
									"KIS":"Lorenzo SolutionCentre von iSOFT"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        21 =>
         array (
         	'id' => 21,
         	'article_id' => 21,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Städtisches Klinikum Karlsruhe\nInbetriebnahme 1Q 1999",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"Städtisches Klinikum Karlsruhe",
									"Umfang":"74 Arbeitsplätze",
									"Inbetriebnahme":"1. Quartal 1999",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring":"Philips, Datex-Ohmeda S/5",
									"Beatmung":"Siemens Servo i, Puritan Bennett, Dräger Evita",
									"KIS":"gap it! [drg] FA: iSOFT Deutschland"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        22 =>
         array (
         	'id' => 22,
         	'article_id' => 22,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###AUVA UKH Linz\nInbetriebnahme 3Q 2005",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nAnästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze, IMC, Verbrennungsstation"
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
									"Headline":"AUVA UKH Linz",
									"Umfang":"67 Arbeitsplätze",
									"Inbetriebnahme":"3. Quartal 2005",
									"Fachbereiche":"Anästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze, IMC, Verbrennungsstation",
									"Monitoring":"Philips",
									"Beatmung":"Dräger Evita, Dräger Primus",
									"KIS":"ASTRA"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        23 =>
         array (
         	'id' => 23,
         	'article_id' => 23,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Ruhr-Universität Bochum - Knappschaftskrankenhaus Langendreer\nInbetriebnahme 1Q 2007",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"Ruhr-Universität Bochum - Knappschaftskrankenhaus Langendreer",
									"Umfang":"58 Arbeitsplätze",
									"Inbetriebnahme":"1. Quartal 2007",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring":"Philips, Hewlett Packard-CMS",
									"Beatmung":"Dräger Evita",
									"Infusion":"Fresenius",
									"KIS":"iMedOne von TietoEnator",
									"Weiteres":"Radiometer ABL"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        24 =>
         array (
         	'id' => 24,
         	'article_id' => 24,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Kantonsspital Aarau\nInbetriebnahme 2Q 1997",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze, Notfallstation"
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
									"Headline":"Kantonsspital Aarau",
									"Umfang":"57 Arbeitsplätze",
									"Inbetriebnahme":"2. Quartal 1997",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze, Notfallstation",
									"Monitoring":"Schiller Argus Pro",
									"Beatmung":"Dräger Evita",
									"KIS":"APACO"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        25 =>
         array (
         	'id' => 25,
         	'article_id' => 25,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Diakonissen-Krankenhaus Schladming\nInbetriebnahme 4Q 2006",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nAnästhesie,Intensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"Diakonissen-Krankenhaus Schladming",
									"Umfang":"49 Arbeitsplätze",
									"Inbetriebnahme":"4. Quartal 2006",
									"Fachbereiche":"Anästhesie, Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring":"Philips",
									"Beatmung":"Dräger Evita, Dräger Primus",
									"KIS":"KIS von Fa. K.I.S. GmbH"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        26 =>
         array (
         	'id' => 26,
         	'article_id' => 26,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###AUVA UKH Graz\nInbetriebnahme 4Q 2012",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nAnästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze"
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
									"Headline":"AUVA UKH Graz",
									"Umfang":"45 Arbeitsplätze",
									"Inbetriebnahme":"4. Quartal 2012",
									"Fachbereiche":"Anästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze",
									"Monitoring":"Philips",
									"Beatmung":"Dräger Evita",
									"KIS":"ASTRA"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        27 =>
         array (
         	'id' => 27,
         	'article_id' => 27,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###AUVA UKH Wien Meidling\nInbetriebnahme 4Q 2011",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nAnästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze, IMC"
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
									"Headline":"AUVA UKH Wien Meidling",
									"Umfang":"45 Arbeitsplätze",
									"Inbetriebnahme":"4. Quartal 2011",
									"Fachbereiche":"Anästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze, IMC",
									"Monitoring":"Dräger Infinity",
									"Beatmung":"Dräger Evita",
									"KIS":"ASTRA"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        28 =>
         array (
         	'id' => 28,
         	'article_id' => 28,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Universitätsklinikum des Saarlandes Homburg\nInbetriebnahme 2Q 2007",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"Universitätsklinikum des Saarlandes Homburg",
									"Umfang":"44 Arbeitsplätze",
									"Inbetriebnahme":"2. Quartal 2007",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring":"Philips",
									"Beatmung":"Dräger Evita, Siemens Servo i, Puritan Bennett",
									"KIS":"i.s.h.med für SAP"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        29 =>
         array (
         	'id' => 29,
         	'article_id' => 29,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Evangelisches Krankenhaus Königin Elisabeth Herzberge gGmbH Berlin\nInbetriebnahme 2Q 2008",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"Evangelisches Krankenhaus Königin Elisabeth Herzberge gGmbH Berlin",
									"Umfang":"44 Arbeitsplätze",
									"Inbetriebnahme":"2. Quartal 2008",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze",
									"Monitoring":"Siemens SC9000, Dräger Infinity Delta",
									"Beatmung":"MAQUET: Servo Ventilator i, MAQUET: Servo Ventilator 300, Puritan Bennett",
									"Labor":"Anbindung des Zentrallabors via HL7-Protokoll",
									"Infusion":"B|Braun Melsungen",
									"KIS":"NEXUS"

         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        30 =>
         array (
         	'id' => 30,
         	'article_id' => 30,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###AUVA UKH Salzburg\nInbetriebnahme 4Q 2012",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nAnästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze, IMC"
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
									"Headline":"AUVA UKH Salzburg",
									"Umfang":"44 Arbeitsplätze",
									"Inbetriebnahme":"4. Quartal 2012",
									"Fachbereiche":"Anästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze, IMC",
									"Monitoring":"Philips",
									"Beatmung":"Dräger Evita",
									"KIS":"ASTRA"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        31 =>
         array (
         	'id' => 31,
         	'article_id' => 31,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Städtisches Klinikum Braunschweig\nInbetriebnahme 1Q 2010",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze, IMC"
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
									"Headline":"Städtisches Klinikum Braunschweig",
									"Umfang":"44 Arbeitsplätze",
									"Inbetriebnahme":"1. Quartal 2010",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze, IMC",
									"Monitoring":"Philips, Siemens",
									"Beatmung":"Dräger Evita, Siemens Servo",
									"Labor":"via HL7",
									"Infusion":"CareFusion Alaris",
									"Narkose":"Dräger, Datex",
									"KIS":"i.s.h.med für SAP",
									"Weiteres":"HYDmedia, Radiometer ABL"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        32 =>
         array (
         	'id' => 32,
         	'article_id' => 32,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Diakoniekrankenhaus Rotenburg (Wümme) gGmbH\nInbetriebnahme 3Q 2006",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze, IMC"
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
									"Headline":"Diakoniekrankenhaus Rotenburg (Wümme) gGmbH",
									"Umfang":"43 Arbeitsplätze",
									"Inbetriebnahme":"3. Quartal 2006",
									"Fachbereiche":"Intensivstation, Zentrale Arbeitsplätze, IMC",
									"Monitoring":"GE Solar 8000i",
									"Beatmung":"Dräger Evita",
									"Infusion":"Alaris",
									"KIS":"iMedOne von Tieto",
									"Weiteres":"Radiometer ABL"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        33 =>
         array (
         	'id' => 33,
         	'article_id' => 33,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Mathias Spitalverbund Rheine\nInbetriebnahme 1Q 2010",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nAnästhesie, Intensivstation, Aufwachraum"
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
									"Headline":"Mathias Spitalverbund Rheine",
									"Umfang":"41 Arbeitsplätze",
									"Inbetriebnahme":"1. Quartal 2010",
									"Fachbereiche":"Anästhesie, Intensivstation, Aufwachraum",
									"Monitoring":"GE",
									"Beatmung":"Servo, Dräger",
									"Labor":"Anbindung des Zentrallabors via HL7-Protokoll",
									"Infusion":"B|Braun Melsungen",
									"Narkose":"Dräger",
									"KIS":"AGFA ORBIS",
									"Weiteres":"PICCO, BGA Radiometer ABL"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        34 =>
         array (
         	'id' => 34,
         	'article_id' => 34,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###INCCI Luxemburg\nInbetriebnahme 4Q 2002",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"INCCI Luxemburg",
									"Umfang":"38 Arbeitsplätze",
									"Inbetriebnahme":"4. Quartal 2002",
									"Fachbereiche":"Anästhesie, Intensivstation, Zentrale Arbeitsplätze, IMC, Normalstation",
									"Monitoring":"Siemens",
									"Beatmung":"KION, Siemens, Dräger Evita",
									"Infusion":"B|Braun Melsungen",
									"Narkose":"Maquet",
									"KIS":"i.s.h.med für SAP",
									"Weiteres":"Leistungserfassung PRN"
         				}
         			}
         		]
         	}]',
         	'created_at' => date("Y-m-d h:i:s"),
         	'updated_at' => date("Y-m-d h:i:s"),
         ),
        35 =>
         array (
         	'id' => 35,
         	'article_id' => 35,
         	'menu_label' => '',
         	'link' => '',
         	'status' => 1,
         	'language' => 'de',
         	'data' => '[{
         		"class":"card-frontside",
         		"content":[
         			{
         				"type": "default",
         				"content": "###Pleißentalklinik Werdau\nInbetriebnahme 1Q 2000",
         				"class": "card-header",
         				"media": [
         					{
         						"src": "hospital.png"
         					}
         				]
         			},
         			{
         				"type": "default",
         				"content": "####Fachbereiche\nIntensivstation, Zentrale Arbeitsplätze"
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
									"Headline":"Pleißentalklinik Werdau",
									"Umfang":"36 Arbeitsplätze",
									"Inbetriebnahme":"1. Quartal 2000",
									"Fachbereiche":"Anästhesie, Intensivstation, Aufwachraum, Zentrale Arbeitsplätze",
									"Monitoring":"Schiller Argus Pro",
									"Beatmung":"Dräger Evita",
									"Infusion":"Fresenius",
									"KIS":"medico//S von Siemens"
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
