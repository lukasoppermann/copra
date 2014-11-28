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
				'published' => 1,
				'language' => 'de',
				'data' => '[
						{
							"class": "section-01",
							"content": [
								{
									"type": "block",
									"column": 12,
									"media": [
										{
											"src": "banner.jpg",
											"description": "Seit mehr als 20 Jahren am Markt"
										}
									],
									"content": "# Seit mehr als 20 Jahren am Markt\nIm medizinischen Bereich entwickelt und in konstanter kundennaher Weiterentwicklung ist COPRA das PDMS der Wahl.",
									"class": "banner js-banner"
								}
								]
							},
							{
								"class": "",
								"content": [
									{
										"type": "block",
										"column": 12,
										"content": "COPRA stellt auf der DIVI14 aus. Treffen Sie uns in Hamburg vom 03. - 05.12.2014 [Alle Informationen zur Messe](#neuigkeiten)",
										"class": "prominent-teaser prominent-teaser--turquoise"
									}
								]
							},
							{
								"class": "space-bottom-wide",
								"link": "Vision",
								"content": [
									{
										"type": "block",
										"column": 12,
										"content": "#Vision\n>Das Logbuch für jeden Patientenaufenthalt und ein neuer Helfer im behandelnden Team.",
										"class": "space-bottom-wide"
									},
									{
										"type": "block",
										"column": 4,
										"media":[
											{"src": "icon-connected.svg"}
										],
										"content": "##Vernetzt\nCOPRA ist durch flexible Schnittstelle optimal in die Infrastruktur der Klinik eingebunden.",
										"class": "centered-content padded-column"
									},
									{
										"type": "block",
										"column": 4,
										"media":[
											{"src": "icon-verfuegbarkeit.svg"}
										],
										"content": "##99,8% verfügbar\nOb unterbrochenes Netzwerk, kaputter Server oder das Gerät ohne Netzverbindung transportiert wird - für die Dokumentation steht COPRA jederzeit bereit.",
										"class": "centered-content padded-column"
									},
									{
										"type": "block",
										"column": 4,
										"media":[
										{"src": "icon-customize.svg"}
										],
										"content": "##Anpassbar\nPerfekte Integration in Ihre Prozesse und individuelle Anpassung auf die Vorzüge eines Hauses.",
										"class": "centered-content padded-column"
									}
									]
								},
								{
									"class": "red-section",
									"link": "Anwendungsgebiete",
									"content": [
									{
										"type": "block",
										"column": 3,
										"media": [
										{"src": "icon-doctor.svg"}
										],
										"content": "##Ärzte\n- Übersicht aller relevanten Daten\n- Befunde des Patienten\n- Ärztliche Anordnungen\n- Informationen zu früheren Aufenthalten\n\n[Produktdetails](/produkt)",
										"class": "user-features"
									},
									{
										"type": "block",
										"column": 3,
										"media": [
										{"src": "icon-nurse.svg"}
										],
										"content": "##Pflege\n- Ärztliche Anweisungen\n- Jederzeit verfügbar\n- Automatische Datenübernahme\n- Pflegerische Leistungen\n\n[Produktdetails](http://http://www/copra/public/produkt)",
										"class": "user-features"
									},
									{
										"type": "block",
										"column": 3,
										"media": [
										{"src": "icon-controlling.svg"}
										],
										"content": "##Controlling\n- Ausleitung von erlösrelevanten Therapieverfahren und Maßnahmen\n- Controllingbericht\n- Vollständigkeitsprüfungen\n- Freigabe der Dokumentation\n\n[Produktdetails](http://http://www/copra/public/produkt)",
										"class": "user-features"
									},
									{
										"type": "block",
										"column": 3,
										"media": [
										{"src": "icon-it.svg"}
										],
										"content": "##IT\n- Skalierbar\n- Komplett virtualisierbar\n- Jederzeit verfügbar\n- Microsoft SQL, .NET\n\n[Produktdetails](http://http://www/copra/public/produkt)",
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
											"type": "block",
											"media": [
											{"src": "copra-divi14.jpg"}
											],
											"content": "##COPRA auf der Divi14\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.",
											"class": "teaser-card teaser-card--image-right"
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
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),

			),
			1 =>
			array (
				'id' => 2,
				'article_id' => 2,
				'menu_label' => 'Produkt',
				'link' => 'produkt',
				'published' => 1,
				'language' => 'de',
				'data' => '[
					{
						"class": "section-01",
						"content": [
							{
								"type": "block",
								"column": 12,
								"media": [
									{
										"src": "banner.jpg",
										"description": "Das PDMS aus Deutschland"
									}
								],
								"content": "#Das PDMS aus Deutschland\\nIn Zusammenarbeit mit Universitätskliniken und Kunden agil entwickelt",
								"class": "banner js-banner"
							}
						]
					},
					{
						"class": "section-02",
						"content": [
							{
								"type": "block",
								"column": 4,
								"media": [
									{
										"src": "icon-doctor.svg",
										"description": "Das PDMS aus Deutschland"
									}
								],
								"content": "### Weitere Themen\\n- Prämedikation\\n- (Vollständigkeit/Plausibiltät)\\n- Statistiken, Recherchemöglichkeiten, Patientenübergreifende Recherche\\n- Offlineverfügbar\\n- Dokumentation von Medikamentengaben im OP mit zwei Klicks\\n- Standardisierte Therapiepläne (Templates)\\n- Fluidmanagement/Bilanzen",
								"class": "circle-icon rounded-block rounded-block--red"
							},
							{
								"type": "block",
								"column": 7,
								"content": "##Ärzte\\nÄrzte erhalten durch die elektronische Patientenakte im COPRA eine Übersicht aller relevanten Daten der Behandlung eines Patienten innerhalb eines Programms. Damit werden Kontextwechsel und wiederholte Anmeldungen an verschiedenen Systemen auf ein Minimum reduziert.\\n\\nAls integrierter Bestandteil der Softwarelandschaft in einem Klinikum können alle Befunde des Patienten im COPRA eingesehen werden. So können Laborwerte kurz nach Feststellung der Ergebnisse bereits im COPRA eingesehen und mit anderen Werten der Behandlung in Kontext gesetzt werden. Eine Beauftragung von Befunden ist auch möglich. Alle Befunde, die zu einem Stationsaufenthalt im COPRA dokumentiert werden, sind zum Abschluss des Falls mit der COPRA-Akte archiviert.\\n\\nNeben dem lesenden Zugriff auf alle relevanten Daten zu einer Behandlung werden über COPRA auch ärztliche Anordnungen, wie zum Beispiel Medikamentenverordnungen eingetragen und kommuniziert. Durch die für die Pflege getrennte Ansicht werden Anordnungen erst ab einem bestimmten Status sichtbar. Somit kann ein Therapieplan mit mehreren Medikamenten geplant und anschließend mit einem Klick für die Pflege sichtbar gemacht werden.\\n\\nDurch die “Lebensakte” des Patienten im COPRA sind alle Eingriffe des Patienten rückwirkend einzusehen. Auch über einen Zeitraum von 10 Jahren. Beginnend mit den Informationen des letzten Stationsaufenthalts, bis hin zu einem Fall vor mehreren Jahren.\\n\\n(Themen, die nicht genannt wurden: Prämedikation (Vollständigkeit/Plausibiltät), Statistiken, Recherchemöglichkeiten, Patientenübergreifende Recherche, Offlineverfügbar, Dokumentation von Medikamentengaben im OP mit zwei Klicks, Standardisierte Therapiepläne (Templates), Fluidmanagement/Bilanzen)",
								"class": "prepend-1 prominent-headline prominent-headline--red"
							},
							{
								"type": "block",
								"column": 8,
								"content": "##Pflege\\nAlle ärztlichen Anweisung zur Behandlung eines Patienten werden an zentraler Stelle aufgeführt. Somit ist im COPRA zu jeder Zeit erkennbar, welche Maßnahmen am Patienten noch offen und welche bereits erledigt wurden (Arbeitslisten). Aktivitäten, die auf Zuruf durchgeführt wurden und einer Anordnung des Arztes bedürfen werden zum Zeitpunkt der Dokumentation dem Arzt zur Nachverordnung angezeigt.\\n\\nDie bettseitige elektronische Patientenakte ist unabhängig vom Kliniknetzwerk jederzeit für die Dokumentation verfügbar. Somit können alle Aktivitäten ohne Unterbrechung durch externe Einflüsse direkt am Bettplatz oder auf dem mobilen Visitenwagen dokumentiert werden.\\n\\nDie automatische Übernahme von Gerätewerten aller am Patienten angeschlossenen Geräte erspart das manuelle Dokumentieren der Medikamentengaben durch Perfusoren oder die Aufzeichnung der Vitalparameterkurven. Die Werte müssen einmal durch das Personal geprüft und mit einem Klick validiert werden.\\n\\nAlle pflegerischen Leistungen können im COPRA dokumentiert und zur Abrechnung exportiert werden. Somit werden keine abrechnungsrelevanten Leistungen mehr übersehen.",
								"class": ""
							},
							{
								"type": "block",
								"column": 4,
								"media": [
									{
										"src": "icon-nurse.svg",
										"description": "Das PDMS aus Deutschland"
									}
								],
								"class": "circle-icon"
							}
						]
					}
				]',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),
			),
			2 =>
			array (
				'id' => 3,
				'article_id' => 3,
				'menu_label' => 'Firmenprofil',
				'link' => 'firmenprofil',
				'published' => 1,
				'language' => 'de',
				'data' => '{
				"1":{
							"class": "section-01",
							"content": [
									{
											"type": "block",
											"column": 12,
											"media": [
													{
															"src": "banner.jpg",
															"description": "Some optional text"
													}
											],
											"content": "#Wir arbeiten an der Zukunft\\nCOPRA entwickelt das PDMS von morgen",
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
									"type": "block",
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
										"type": "block",
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
										"type": "block",
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
							"type": "block",
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
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => '2014-07-28 12:26:06',

			),
			3 =>
			array (
				'id' => 4,
				'article_id' => 4,
				'menu_label' => 'Referenzen',
				'link' => 'referenzen',
				'published' => 1,
				'language' => 'de',

				'data' => '{
					"1":{
						"class": "section-01",
						"content": [
							{
								"type": "block",
								"column": 12,
								"media": [
									{
										"src": "banner.jpg",
										"description": "Some optional text"
									}
								],
								"content": "#Unsere Kunden",
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
								"variables": {
									"itemCount": "true",
									"search": "true",
									"emptyState": "Mit ihren Kriterien konnte keine Referenz gefunden werden."
								},
								"mode": "card",
								"class": "grid js-searchable"
							}
						]
					}
				}',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),

			),
			4 =>
			array (
				'id' => 5,
				'article_id' => 5,
				'menu_label' => 'Kontakt',
				'link' => 'kontakt',
				'published' => 1,
				'language' => 'de',
				'data' => '{
					"1":{
								"content": [
										{
												"type": "block",
												"column": 12,
												"media": [
														{
																"src": "banner.jpg",
																"description": "Kontakt"
														}
												],
												"content": "#Kontakt",
												"class": "banner js-banner"
										}
								]
						},
					"2":{
						"class": "spacing-bottom",
						"content":[{
							"type": "block",
							"column": 12,
							"content": "##So erreichen Sie uns",
							"class": "align-left"
							},{
								"type": "block",
								"column": 8,
								"content": "Haben Sie Interesse an mehr Informationen oder möchten Sie einen Präsentationstermin mit uns vereinbaren, um die Bedienung und die Möglichkeiten unseres Patienten-Daten-Management-Systems COPRA kennenzulernen, so rufen Sie uns bitte an oder senden Sie uns eine Email.",
								"class": "append-2"
							},{
									"type": "block",
									"column": 4,
									"content": "####COPRA System GmbH  \\n<span class=\"label\">Tel.:</span> +49 30 80 20 20 335  \\n<span class=\"label\">Fax:</span> +49 30 80 20 20 333  \\n<span class=\"label\">Email:</span> <mailto:vertrieb@copra-system.de>   \\n  \\n<span class=\"label\">Adresse:</span>  \\nBerliner Straße 112a  \\n13189 Berlin",
									"class": "contact-box"
							}
						]
					}
				}',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),

			),
			5 =>
			array (
				'id' => 6,
				'article_id' => 6,
				'menu_label' => 'impressum',
				'link' => 'impressum',
				'published' => 1,
				'language' => 'de',
				'data' => '{
					"1": {
						"class": "section-01",
						"content": {
							"0": {
								"type": "block",
								"column": 12,
								"content": "#Impressum",
								"class": "page-title"
							},
							"1": {
								"type": "block",
								"column": 7,
								"content": "<h3>COPRA System GmbH</h3> <p>Berlin Berliner Straße 112a<br /> 13189 Berlin<br /> Tel.: +49 30 80 20 2033–0<br /> E-Mail: <a href=\"mailto: info@copra-system.de\">info@copra-system.de</a><br /> </p> <p>Geschäftsführer: Martin Jekov</p>  <p>Amtsgericht Charlottenburg HRB 151375 B</p>  <h3>Verlinkte Seiten</h3> <p>Das Landgericht Hamburg hat mit seinem Urteil vom 12. Mai 1998 - 312 O 85/98 - “Haftung für Links” entschieden, dass die Betreiber einer Webseite durch die Anbringung eines Links die Inhalte der gelinkten Seite ggf. mit zu verantworten haben. Dies kann nur dadurch verhindert werden, dass sie sich ausdrücklich von diesen Inhalten distanzieren. Deshalb diese Erklärung: Hiermit distanzieren sich die o.g. Betreiber der Webseite der COPRA System GmbH ausdrücklich von allen Inhalten aller gelinkten Seiten auf dieser Webseite und machen sich diese Inhalte nicht zu eigen. Diese Erklärung gilt für alle auf dieser Webseite angebrachten Links. Für die Inhalte der mit dieser Homepage verlinkten Webseiten übernehmen die Betreiber keinerlei Verantwortung. Für den Inhalt sind ausschließlich die betreffenden Betreiber bzw. Autoren verantwortlich. Rechtswidrige Inhalte sind nicht bekannt. Falls Sie einen solchen Link finden, bitten wir um eine kurze Benachrichtigung, damit die Verlinkung entfernt werden kann. Wir übernehmen keine Haftung für die Erfüllung von Urheberrechtsbestimmungen auf einer von uns verlinkten Seite und auch keinerlei Verantwortung für weitere dort gesetzte Links. Alle in den Texten genannten oder abgebildeten Warenzeichen sind Warenzeichen der jeweiligen Inhaber und sind gesetzlich geschützt!</p>",
								"class": "space-bottom-wide full-width-copy append-1"
							}
						}
					}
				}',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),

			),
			6 =>
			array (
				'id' => 7,
				'article_id' => 7,
				'menu_label' => 'Datenschutzrichtlinien',
				'link' => 'datenschutzrichtlinien',
				'published' => 1,
				'language' => 'de',
				'data' => '{
					"1": {
						"class": "section-01",
						"content": [
							{
								"type": "block",
								"column": 12,
								"content": "#Datenschutzrichtlinien",
								"class": "page-title"
							},
							{
								"type": "block",
								"column": 8,
								"content": "###Datenschutz\\nDie Nutzung unserer Webseite ist in der Regel ohne Angabe personenbezogener Daten möglich. Soweit auf unseren Seiten personenbezogene Daten (beispielsweise Name, Anschrift oder eMail-Adressen) erhoben werden, erfolgt dies, soweit möglich, stets auf freiwilliger Basis. Diese Daten werden ohne Ihre ausdrückliche Zustimmung nicht an Dritte weitergegeben.\\n\\nWir weisen darauf hin, dass die Datenübertragung im Internet (z.B. bei der Kommunikation per E-Mail) Sicherheitslücken aufweisen kann. Ein lückenloser Schutz der Daten vor dem Zugriff durch Dritte ist nicht möglich.\\n\\nDer Nutzung von im Rahmen der Impressumspflicht veröffentlichten Kontaktdaten durch Dritte zur Übersendung von nicht ausdrücklich angeforderter Werbung und Informationsmaterialien wird hiermit ausdrücklich widersprochen. Die Betreiber der Seiten behalten sich ausdrücklich rechtliche Schritte im Falle der unverlangten Zusendung von Werbeinformationen, etwa durch Spam-Mails, vor.\\n###Datenschutzerklärung für die Nutzung von Google Analytics\\nDiese Website benutzt Google Analytics, einen Webanalysedienst der Google Inc. (“Google”). Google Analytics verwendet sog. “Cookies”, Textdateien, die auf Ihrem Computer gespeichert werden und die eine Analyse der Benutzung der Website durch Sie ermöglichen. Die durch den Cookie erzeugten Informationen über Ihre Benutzung dieser Website werden in der Regel an einen Server von Google in den USA übertragen und dort gespeichert. Im Falle der Aktivierung der IP-Anonymisierung auf dieser Webseite wird Ihre IP-Adresse von Google jedoch innerhalb von Mitgliedstaaten der Europäischen Union oder in anderen Vertragsstaaten des Abkommens über den Europäischen Wirtschaftsraum zuvor gekürzt.\\n\\nNur in Ausnahmefällen wird die volle IP-Adresse an einen Server von Google in den USA übertragen und dort gekürzt. Im Auftrag des Betreibers dieser Website wird Google diese Informationen benutzen, um Ihre Nutzung der Website auszuwerten, um Reports über die Websiteaktivitäten zusammenzustellen und um weitere mit der Websitenutzung und der Internetnutzung verbundene Dienstleistungen gegenüber dem Websitebetreiber zu erbringen. Die im Rahmen von Google Analytics von Ihrem Browser übermittelte IP-Adresse wird nicht mit anderen Daten von Google zusammengeführt.\\n\\nSie können die Speicherung der Cookies durch eine entsprechende Einstellung Ihrer Browser-Software verhindern; wir weisen Sie jedoch darauf hin, dass Sie in diesem Fall gegebenenfalls nicht sämtliche Funktionen dieser Website vollumfänglich werden nutzen können. Sie können darüber hinaus die Erfassung der durch das Cookie erzeugten und auf Ihre Nutzung der Website bezogenen Daten (inkl. Ihrer IP-Adresse) an Google sowie die Verarbeitung dieser Daten durch Google verhindern, indem sie das unter dem folgenden Link verfügbare Browser-Plugin herunterladen und installieren: [http://tools.google.com/dlpage/gaoptout?hl=de](http://tools.google.com/dlpage/gaoptout?hl=de).",
								"class": "append-2 space-bottom-wide"
							},{
								"type": "block",
								"column": 4,
								"content": "####COPRA System GmbH  \\n<span class=\"label\">Tel.:</span> +49 30 80 20 20 335  \\n<span class=\"label\">Fax:</span> +49 30 80 20 20 333  \\n<span class=\"label\">Email:</span> <mailto:vertrieb@copra-system.de>   \\n  \\n<span class=\"label\">Adresse:</span>  \\nBerliner Straße 112a  \\n13189 Berlin",
								"class": "contact-box"
							}
						]
					}
				}',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),

			),
			7 =>
			array (
				'id' => 9,
				'article_id' => 9,
				'menu_label' => '',
				'link' => '',
				'published' => 1,
				'language' => 'de',
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "block","column": 2,"content": "#Newseintrag zwei\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.","class": "optional-classes"}}}}',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),

			),
			8 =>
			array (
				'id' => 10,
				'article_id' => 10,
				'menu_label' => '',
				'link' => '',
				'published' => 1,
				'language' => 'de',
				'data' => '{"1":{"class":"section-01","content":{"0":{"type": "image","column": 3,"src": "imagefile.png","description": "Some optional text","class": "optional-classes"},"2":{"type": "block","column": 2,"content": "#Newseintrag zwei\\nLorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.","class": "optional-classes"}}}}',
				'created_at' => date("Y-m-d h:i:s"),
				'updated_at' => date("Y-m-d h:i:s"),

			)
		));
	}

}
