<?php

class FsJobs extends Seeder {

	/**
	 * Auto generated seed file
	 *
	 * @return void
	 */
	public function run()
	{
		\DB::table('fs_content')->whereIn('article_id', [300,301,302,303,304] )->delete();
		\DB::table('fs_content')->insert(
      array(
  			array (
  				'article_id' => 300,
  				'menu_label' => '',
  				'link' => '',
  				'published' => 1,
  				'language' => 'de',
  				'data' => '[
  					{
  						"content":[
  							{
  								"type": "block",
  								"column": 2,
  								"media": [
  								],
  								"content": "#Frontend-Entwickler/-in C&num; in Berlin\\n##Deine Herausforderungen:\\n- Du arbeitest an der Weiterentwicklung und Optimierung unseres Dokumentationssystems COPRA\\n- Gemeinsam mit dem Produktmanagement entwickelst du intuitive Oberflächenkonzepte für die komplexe medizinische Dokumentation\\n- Deine Oberflächen kommen in verschiedenen Bereichen des klinischen Umfelds zum Einsatz beispielsweise Operationssäle, Bettplätze und mobile Arbeitsstationen mit und ohne Touchscreen\\n##Deine Stärken:\\n- Du bist überzeugt von agilen Methoden und testgetriebener Programmierung in der Softwareentwicklung\\n- Du hast praktische Erfahrungen im Bereich Frontend-Entwicklung mit dem .Net Framework 4.0/4.5\\n- Deine Fähigkeiten gehen über die Standardverwendung von WPF & Xaml hinaus\\n- Entwicklungskonzepte wie MVVM oder Dependency Injection sind dir bekannt\\n- Idealerweise hast du schon mit Tools wie Resharper, Teamcity und Git gearbeitet\\n- Du hast höchste Ansprüche an die Qualität deiner Arbeit und verlierst auch in hektischen Zeiten weder deinen Kopf noch deinen Humor\\n##Deine Perspektiven:\\n- Wir bieten dir eine hochwertige und aktuelle Entwicklungsinfrastruktur mit Continuous Integration und automatisierten Tests\\n- Du arbeitest in einem jungen und hoch motiviertem SCRUM Team mit flachen Hierarchien und kurzen Entscheidungswegen\\n- Wir unterstützen deine eigenständige und kontinuierliche Weiterbildung beispielsweise die Teilnahme an Fachvorträgen, Community Events und Schulungen\\n- Wir bieten eine unbefristete Anstellung, ein attraktives Gehalt und viel Raum für individuelle Entwicklung\\n##Kontakt\\nHaben wir dein Interesse geweckt? Dann sende uns deine aussagekräftige, digitale Bewerbung an <a href=\"mailto:karriere@copra-system.de\">karriere@copra-system.de</a>."
  							}
  						]
  					}
  				]',
  				'created_at' => date("Y-m-d h:i:s"),
  				'updated_at' => date("Y-m-d h:i:s"),
  			),
  			array (
  				'article_id' => 301,
  				'menu_label' => '',
  				'link' => '',
  				'published' => 1,
  				'language' => 'de',
  				'data' => '[
  					{
  						"content":[
  							{
  								"type": "block",
  								"column": 2,
  								"media": [
  								],
  								"content": "#Produktmanager in Berlin\\n##Deine Herausforderungen:\\n- Du arbeitest an der Weiterentwicklung unserer elektronischen Patientenakte COPRA\\n- Ein regelmäßiger Austausch mit Ärzten, Pflegern und anderem Fachpersonal aus der Medizin wird dir Input für Ideen geben, wie deren Arbeit durch COPRA erleichtert werden kann\\n- Gemeinsam mit einem UI/UX-Designer und einem Team an Fachberatern und Programmierern entwickelst du intuitive Konzepte für die vielfältige medizinische Dokumentation\\n- Anhand den von dir erstellten Spezifikationen (Stories) werden Schätzungen gemacht, die du für die Erstellung und Kommunikation einer Produktroadmap nutzt\\n- Du bist der fachliche Ansprechpartner für das Entwicklerteam und versorgst dieses mit Aufgaben\\n- Die von dir konzipierten Funktionen kommen in verschiedenen Bereichen des klinischen Umfelds zum Einsatz. COPRA ist vom OP über die Intensivstation bis in den Normalbereich verbreitet und bekannt\\n##Deine Stärken:\\n- Du bringst Berufserfahrungen aus dem klinischen Bereich mit oder warst bereits als Produktmanager in einem agilen Entwicklungsumfeld tätig\\n- Du hast eine Affinität zur digitalen Welt und warst bereits zuvor in der Entwicklung eines Softwaresystems oder einer App beteiligt\\n- Du bist hungrig darauf, die Wünsche und Probleme unserer Anwender zu hören, Lösungsmöglichkeiten zu diskutieren und diese in technische Konzepte zu überführen\\n- Analytische Fähigkeiten erlauben dir, eine Grundstruktur zu einem Problem zu entwickeln, die sich in anderen Lösungsansätzen wieder findet\\n- Du integrierst dich gut in ein neues Team, arbeitest strukturiert und selbstständig\\n- Du bist ein geduldiger und kreativer Diskussionspartner\\n- Ein Plus: Du hast bereits mit Techniken wie Event Storming und User Story Mapping gearbeitet\\n- Du hast höchste Ansprüche an die Qualität deiner Arbeit und verlierst auch in hektischen Zeiten weder deinen Kopf noch deinen Humor\\n##Deine Perspektiven:\\n- Wir bieten dir ein angenehmes und modernes Arbeitsumfeld in 15 Minuten Entfernung von Berlins Mitte\\n- Du arbeitest in einem jungen und hoch motiviertem SCRUM Team mit flachen Hierarchien und kurzen Entscheidungswegen\\n- Wir unterstützen deine eigenständige und kontinuierliche Weiterbildung, beispielsweise durch die Teilnahme an Community Events und Schulungen\\n- Wir bieten eine unbefristete Anstellung, ein attraktives Gehalt und viel Raum für individuelle Entwicklung\\n##Kontakt\\nHaben wir dein Interesse geweckt? Dann sende uns deine aussagekräftige, digitale Bewerbung an <a href=\"mailto:karriere@copra-system.de\">karriere@copra-system.de</a>."
  							}
  						]
  					}
  				]',
  				'created_at' => date("Y-m-d h:i:s"),
  				'updated_at' => date("Y-m-d h:i:s"),
  			),
  			array (
  				'article_id' => 302,
  				'menu_label' => '',
  				'link' => '',
  				'published' => 1,
  				'language' => 'de',
  				'data' => '[
  					{
  						"content":[
  							{
  								"type": "block",
  								"column": 2,
  								"media": [
  								],
  								"content": "#Schnittstellen-Entwickler/-in C&num; in Berlin\\n##Deine Herausforderungen:\\n- Du arbeitest an der Weiterentwicklung und Optimierung unseres Dokumentationssystems COPRA\\n- Du entwickelst Kommunikationsschnittstellen zwischen COPRA und medizinischen Geräten sowie anderen Krankenhausinformationssystemen\\n- Du setzt dich mit den technischen Anforderungen der externen Schnittstellen auseinander und entwickelst passgenaue Lösungen für COPRA\\n##Deine Stärken:\\n- Du bist überzeugt von agilen Methoden und testgetriebener Programmierung in der Softwareentwicklung\\n- Du hast praktische Erfahrung in der Entwicklung von verteilten Anwendungen mit dem .Net Framework 4.0/4.5\\n- Du hast bereits serielle Schnittstellen implementiert\\n- Du bist sicher in der Implementierung asynchroner Prozesse und gängige Entwicklungsmuster wie Inversion Of Control sind dir bekannt\\n- Du verfügst über SQL-Kenntnisse und hast bereits Erfahrungen mit relationalen Datenbanken gesammelt\\n- Hilfreich für deine Arbeit sind Einblicke in den Umgang mit REST-Schnittstellen, XML, JSON und HL7\\n- Idealerweise kennst du dich mit Tools wie Resharper, Teamcity und Git aus\\n- Du hast höchste Ansprüche an die Qualität deiner Arbeit und verlierst auch in hektischen Zeiten weder deinen Kopf noch deinen Humor\\n##Deine Perspektiven:\\n- Wir bieten dir eine hochwertige und aktuelle Entwicklungsinfrastruktur mit Continuous Integration und automatisierten Tests\\n- Du arbeitest in einem jungen und hoch motiviertem SCRUM Team mit flachen Hierarchien und kurzen Entscheidungswegen\\n- Wir unterstützen deine eigenständige und kontinuierliche Weiterbildung beispielsweise die Teilnahme an Fachvorträgen, Community Events und Schulungen\\n- Wir bieten eine unbefristete Anstellung, ein attraktives Gehalt und viel Raum für individuelle Entwicklung\\n-  \\n##Kontakt\\nHaben wir dein Interesse geweckt? Dann sende uns deine aussagekräftige, digitale Bewerbung an <a href=\"mailto:karriere@copra-system.de\">karriere@copra-system.de</a>."
  							}
  						]
  					}
  				]',
  				'created_at' => date("Y-m-d h:i:s"),
  				'updated_at' => date("Y-m-d h:i:s"),
  			),
			array (
  				'article_id' => 303,
  				'menu_label' => '',
  				'link' => '',
  				'published' => 1,
  				'language' => 'de',
  				'data' => '[
  					{
  						"content":[
  							{
  								"type": "block",
  								"column": 2,
  								"media": [
  								],
  								"content": "#Teamleiter/-in Softwareentwicklung C&num; in Berlin\\n##Deine Herausforderungen:\\n- Gemeinsam mit dem Produktmanagement gestaltest du die technische und strategische Entwicklung unseres Dokumentationssystems COPRA\\n- Als Ansprechpartner auf Augenhöhe bist du dafür verantwortlich, die Mitglieder deines interdisziplinären Teams, bestehend aus Softwareentwicklung, Qualitätssicherung und technischer Redaktion zu fördern und ein angenehmes und produktives Arbeitsumfeld sicherzustellen\\n- Als Prozessverantwortlicher steuerst du Ablauf und Einhaltung eines ISO 13485 konformen Softwareentwicklungsprozesses\\n##Deine Stärken:\\n- Du hast ein abgeschlossenes Studium im Fachbereich Informatik oder eine vergleichbare Qualifikation\\n- Du kannst Erfahrungen in der fachlichen und disziplinarischen Leitung von Entwicklungsteams vorweisen\\n- Du verfügst über mehrjährige Berufspraxis in der Entwicklung von verteilten Applikationen mit dem .Net Framework\\n- Du bist aufgeschlossen und verstehst es zu überzeugen und zielgruppenorientiert zu kommunizieren\\n- Du bist überzeugt von agilen Methoden und testgetriebener Programmierung\\n- Eine Zertifizierung zum SCRUM-Master rundet dein Profil ab\\n##Deine Perspektiven:\\n- Dich erwartet ein sympathisches und hochmotiviertes Team, welches einen respekt- und vertrauensvollen Umgang pflegt\\n- Wir laden dich dazu ein das Arbeitsumfeld für dich und deine Mitarbeiter deinen Vorstellungen entsprechend mitzugestalten\\n- Wir unterstützen deine eigenständige und kontinuierliche Weiterbildung beispielsweise die Teilnahme an Fachvorträgen, Community Events und Schulungen\\n- Wir bieten eine unbefristete Anstellung, ein attraktives Gehalt und viel Raum für individuelle Entwicklung\\n##Kontakt\\nHaben wir dein Interesse geweckt? Dann sende uns deine aussagekräftige, digitale Bewerbung an <a href=\"mailto:karriere@copra-system.de\">karriere@copra-system.de</a>."
  							}
  						]
  					}
  				]',
  				'created_at' => date("Y-m-d h:i:s"),
  				'updated_at' => date("Y-m-d h:i:s"),
  			),
		)
    );

		/*
		* Insert into stream
		 */
		\DB::table('fs_stream')->where('stream', 'jobs' )->delete();
		\DB::table('fs_stream')->insert(array (
			array (
				'stream' => 'jobs',
				'parent_id' => 0,
				'position' => 2,
				'article_id' => 302,
			),
			array (
				'stream' => 'jobs',
				'parent_id' => 0,
				'position' => 3,
				'article_id' => 300,
			),
			array (
				'stream' => 'jobs',
				'parent_id' => 0,
				'position' => 1,
				'article_id' => 301,
			),
			array (
				'stream' => 'jobs',
				'parent_id' => 0,
				'position' => 4,
				'article_id' => 303,
			),
			array (
				'stream' => 'jobs',
				'parent_id' => 0,
				'position' => 5,
				'article_id' => 304,
			),
		));
  }
}
