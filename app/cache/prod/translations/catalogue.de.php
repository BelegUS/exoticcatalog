<?php

use Symfony\Component\Translation\MessageCatalogue;

$catalogue = new MessageCatalogue('de', array (
  'validators' => 
  array (
    'This value should be false.' => 'Dieser Wert sollte false sein.',
    'This value should be true.' => 'Dieser Wert sollte true sein.',
    'This value should be of type {{ type }}.' => 'Dieser Wert sollte vom Typ {{ type }} sein.',
    'This value should be blank.' => 'Dieser Wert sollte leer sein.',
    'The value you selected is not a valid choice.' => 'Sie haben einen ungültigen Wert ausgewählt.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'Sie müssen mindestens {{ limit }} Möglichkeit wählen.|Sie müssen mindestens {{ limit }} Möglichkeiten wählen.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'Sie dürfen höchstens {{ limit }} Möglichkeit wählen.|Sie dürfen höchstens {{ limit }} Möglichkeiten wählen.',
    'One or more of the given values is invalid.' => 'Einer oder mehrere der angegebenen Werte sind ungültig.',
    'The fields {{ fields }} were not expected.' => 'Die Felder {{ fields }} wurden nicht erwartet.',
    'The fields {{ fields }} are missing.' => 'Die erwarteten Felder {{ fields }} fehlen.',
    'This value is not a valid date.' => 'Dieser Wert entspricht keiner gültigen Datumsangabe.',
    'This value is not a valid datetime.' => 'Dieser Wert entspricht keiner gültigen Datums- und Zeitangabe.',
    'This value is not a valid email address.' => 'Dieser Wert ist keine gültige E-Mail-Adresse.',
    'The file could not be found.' => 'Die Datei wurde nicht gefunden.',
    'The file is not readable.' => 'Die Datei ist nicht lesbar.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß ({{ size }} {{ suffix }}). Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'Der Dateityp ist ungültig ({{ type }}). Erlaubte Dateitypen sind {{ types }}.',
    'This value should be {{ limit }} or less.' => 'Dieser Wert sollte kleiner oder gleich {{ limit }} sein.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu lang. Sie sollte höchstens {{ limit }} Zeichen haben.',
    'This value should be {{ limit }} or more.' => 'Dieser Wert sollte größer oder gleich {{ limit }} sein.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.|Diese Zeichenkette ist zu kurz. Sie sollte mindestens {{ limit }} Zeichen haben.',
    'This value should not be blank.' => 'Dieser Wert sollte nicht leer sein.',
    'This value should not be null.' => 'Dieser Wert sollte nicht null sein.',
    'This value should be null.' => 'Dieser Wert sollte null sein.',
    'This value is not valid.' => 'Dieser Wert ist nicht gültig.',
    'This value is not a valid time.' => 'Dieser Wert entspricht keiner gültigen Zeitangabe.',
    'This value is not a valid URL.' => 'Dieser Wert ist keine gültige URL.',
    'The two values should be equal.' => 'Die beiden Werte sollten identisch sein.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'Die Datei ist zu groß. Die maximal zulässige Größe beträgt {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'Die Datei ist zu groß.',
    'The file could not be uploaded.' => 'Die Datei konnte nicht hochgeladen werden.',
    'This value should be a valid number.' => 'Dieser Wert sollte eine gültige Zahl sein.',
    'This file is not a valid image.' => 'Diese Datei ist kein gültiges Bild.',
    'This is not a valid IP address.' => 'Dies ist keine gültige IP-Adresse.',
    'This value is not a valid language.' => 'Dieser Wert entspricht keiner gültigen Sprache.',
    'This value is not a valid locale.' => 'Dieser Wert entspricht keinem gültigen Gebietsschema.',
    'This value is not a valid country.' => 'Dieser Wert entspricht keinem gültigen Land.',
    'This value is already used.' => 'Dieser Wert wird bereits verwendet.',
    'The size of the image could not be detected.' => 'Die Größe des Bildes konnte nicht ermittelt werden.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'Die Bildbreite ist zu groß ({{ width }}px). Die maximal zulässige Breite beträgt {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'Die Bildbreite ist zu gering ({{ width }}px). Die erwartete Mindestbreite beträgt {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'Die Bildhöhe ist zu groß ({{ height }}px). Die maximal zulässige Höhe beträgt {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'Die Bildhöhe ist zu gering ({{ height }}px). Die erwartete Mindesthöhe beträgt {{ min_height }}px.',
    'This value should be the user current password.' => 'Dieser Wert sollte dem aktuellen Benutzerpasswort entsprechen.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'Dieser Wert sollte genau {{ limit }} Zeichen lang sein.|Dieser Wert sollte genau {{ limit }} Zeichen lang sein.',
    'The file was only partially uploaded.' => 'Die Datei wurde nur teilweise hochgeladen.',
    'No file was uploaded.' => 'Es wurde keine Datei hochgeladen.',
    'No temporary folder was configured in php.ini.' => 'Es wurde kein temporärer Ordner in der php.ini konfiguriert.',
    'Cannot write temporary file to disk.' => 'Kann die temporäre Datei nicht speichern.',
    'A PHP extension caused the upload to fail.' => 'Eine PHP-Erweiterung verhinderte den Upload.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder mehr Elemente beinhalten.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.|Diese Sammlung sollte {{ limit }} oder weniger Elemente beinhalten.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'Diese Sammlung sollte genau {{ limit }} Element beinhalten.|Diese Sammlung sollte genau {{ limit }} Elemente beinhalten.',
    'Invalid card number.' => 'Ungültige Kartennummer.',
    'Unsupported card type or invalid card number.' => 'Nicht unterstützer Kartentyp oder ungültige Kartennummer.',
    'This is not a valid International Bank Account Number (IBAN).' => 'Dieser Wert ist keine gültige IBAN-Kontonummer.',
    'This value is not a valid ISBN-10.' => 'Dieser Wert entspricht keiner gültigen ISBN-10.',
    'This value is not a valid ISBN-13.' => 'Dieser Wert entspricht keiner gültigen ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'Dieser Wert ist weder eine gültige ISBN-10 noch eine gültige ISBN-13.',
    'This value is not a valid ISSN.' => 'Dieser Wert ist keine gültige ISSN.',
    'This value is not a valid currency.' => 'Dieser Wert ist keine gültige Währung.',
    'This value should be equal to {{ compared_value }}.' => 'Dieser Wert sollte gleich {{ compared_value }} sein.',
    'This value should be greater than {{ compared_value }}.' => 'Dieser Wert sollte größer als {{ compared_value }} sein.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'Dieser Wert sollte größer oder gleich {{ compared_value }} sein.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'Dieser Wert sollte kleiner als {{ compared_value }} sein.',
    'This value should be less than or equal to {{ compared_value }}.' => 'Dieser Wert sollte kleiner oder gleich {{ compared_value }} sein.',
    'This value should not be equal to {{ compared_value }}.' => 'Dieser Wert sollte nicht {{ compared_value }} sein.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'Dieser Wert sollte nicht identisch sein mit {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu groß ({{ ratio }}). Der erlaubte Maximalwert ist {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'Das Seitenverhältnis des Bildes ist zu klein ({{ ratio }}). Der erwartete Minimalwert ist {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'Das Bild ist quadratisch ({{ width }}x{{ height }}px). Quadratische Bilder sind nicht erlaubt.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'Das Bild ist im Querformat ({{ width }}x{{ height }}px). Bilder im Querformat sind nicht erlaubt.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'Das Bild ist im Hochformat ({{ width }}x{{ height }}px). Bilder im Hochformat sind nicht erlaubt.',
    'This form should not contain extra fields.' => 'Dieses Formular sollte keine zusätzlichen Felder enthalten.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'Die hochgeladene Datei ist zu groß. Versuchen Sie bitte eine kleinere Datei hochzuladen.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'Der CSRF-Token ist ungültig. Versuchen Sie bitte das Formular erneut zu senden.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'Es ist ein Fehler bei der Authentifikation aufgetreten.',
    'Authentication credentials could not be found.' => 'Es konnten keine Zugangsdaten gefunden werden.',
    'Authentication request could not be processed due to a system problem.' => 'Die Authentifikation konnte wegen eines Systemproblems nicht bearbeitet werden.',
    'Invalid credentials.' => 'Fehlerhafte Zugangsdaten.',
    'Cookie has already been used by someone else.' => 'Cookie wurde bereits von jemand anderem verwendet.',
    'Not privileged to request the resource.' => 'Keine Rechte, um die Ressource anzufragen.',
    'Invalid CSRF token.' => 'Ungültiges CSRF-Token.',
    'Digest nonce has expired.' => 'Digest nonce ist abgelaufen.',
    'No authentication provider found to support the authentication token.' => 'Es wurde kein Authentifizierungs-Provider gefunden, der das Authentifizierungs-Token unterstützt.',
    'No session available, it either timed out or cookies are not enabled.' => 'Keine Session verfügbar, entweder ist diese abgelaufen oder Cookies sind nicht aktiviert.',
    'No token could be found.' => 'Es wurde kein Token gefunden.',
    'Username could not be found.' => 'Der Benutzername wurde nicht gefunden.',
    'Account has expired.' => 'Der Account ist abgelaufen.',
    'Credentials have expired.' => 'Die Zugangsdaten sind abgelaufen.',
    'Account is disabled.' => 'Der Account ist deaktiviert.',
    'Account is locked.' => 'Der Account ist gesperrt.',
  ),
  'messages' => 
  array (
    'start' => 'Start',
    'oNas' => 'Über uns',
    'oferta' => 'Angebot',
    'serwis' => 'Service',
    'opancerzenie' => 'Autopanzerung',
    'faq' => 'FAQ',
    'kontakt' => 'Kontakt',
    'jezyk' => 'Sprache',
    'aukcje' => 'Unsere Auktionen',
    'startTekst1' => 'Ein exklusives Auto zu besitzen bedeutet nicht nur, dass man in die Garage gehen kann und eine Fahrt mit einem sportlichen Lamborghini, einem angesehenen Maserati oder ausgefallenen Aston Martin machen kann. Wahre Liebe und Respekt zum Auto basieren auf der Fähigkeit, es gut pflegen zu können und in einem angemessenen technischen Zustand zu erhalten. 

<br><br>Dank uns kannst Du deinem Auto eigens Produkte von renommierten Marken schenken. Hohe Geschwindigkeiten und ein spezifisches Ingenieurwesen, die in exklusiven Autos schlummern, erlauben es nicht, irgendwelche Ersatzteile zu benutzen. Deswegen findest du in unserem Angebot originale Teile mit vorteilhaften Rabatten. 

<br><br>Das Einkaufen bei Exotic Car Parts spart Zeit und Geld und die Zufriedenheit des Einkaufs lässt Dich Dein Auto noch mehr lieben.
',
    'oNasTekst1' => 'Firma m. Kopec, P. Kopec, D. Frankowski GbR, Besitzer der Marke Exotic Car Parts, befindet sich mit seinen Gesellschaften auf dem Markt der Automobile seit 2001. In diesen vielen Jahre bauten wir unsere Macht mit unseren Partnern aus der ganzen Welt aus.

<br><br>Über viele Jahre war die Hauptbeschäftigung unserer Firma die Vermarktung von Personenwagen, sowohl neue als auch gebrauchte. Im Laufe der Jahre nutzten wir das sich wandelnde wirtschaftliche System und die breiten Möglichkeiten, die durch die Öffnungen der Grenzen geschaffen wurden, indem wir jährlich mehrere hundert Autos in den Ost- und Südeuropäischen Markt exportieren.

<br><br>Angesichts des sich verändernden zentral- und westeuropäischen Auto-Marktes und die wachsende Nachfrage nach Luxusgütern, haben wir die Entscheidung getroffen den Verkauf von neuen und gebrauchten Blechteilen, mechanischen, Antriebskomponenten, Suspensionen und Zubehör für Sport- und Luxusautos zu starten. Die gesammelten Erfahrungen und der Kontakte durch den Handel mit Autos, ermöglicht es uns, einer der größten Händler von Teilen für Sportautos in Deutschland zu sein.
',
    'oNasTekst2' => 'Im Augenblick sind wir nicht nur in Deutschland tätig, wir haben die festen Rezipienten in allen Ländern der Europäischen Union, und auch in Russland, Kuwait, ZEA, Thailand, China und USA. 

<br><br>Unser Stab der Facharbeiter und die Lager in den Regionen Deutschland und Polen erlaubt es uns unseren Kunden tausende Standpunkte anzubieten und das dichte Vertriebsnetz bildet eine feste Verkaufskette. Dank der verstreuten Partnern im ganz Europa können wir fast jedes Teil für einen Luxuswagen besorgen, neu oder gebraucht. Außerdem bieten wir geschnittene- und Blech-Elemente an, die nicht mehr in Lagern der Fabrik zu kriegen sind.
',
    'oNasTekst3' => 'Für unsere ganz reichen Kunden bitten wir ein Tuning der Super sportlichen und Luxuswagen an Mansory. 

<br /><br />Mehr auf <a href=\'http://www.mansory.pl\'>www.mansory.pl</a>
',
    'oNasTekst4' => 'Wir laden Sie zur Zusammenarbeit ein.',
    'ofertaTekst1' => 'Die Firma Exotic Car Parts beschäftigt sich mit dem Verkauf der neuen und gebrauchten Blech- sowie mechanischen Teile für Sport- Luxusfahrzeuge. In unserem Angebot finden sie sowohl die Hauptbestandteile des Unterholzes des Fahrzeugaufbaues d.h. Stoßstangen, Kotflügel, Klappen oder Türen, als auch die ebenfalls geschnittenen Elemente also Viertel, Schwellen, Dächer und die gebliebenen Tragelement des Fahrzeugaufbaues, darunter auch die ganzen Karosserien. 

<br><br>Unser Angebot runden die mechanischen Teile ab: Motoren, Gangschaltungen, Elemente des Antriebs und das Motorzubehör sowie die Aufhebungen bei der kompletten Bremsanlage, auch die keramischen. Unsere Lager in Deutschland und Polen enthalten tausende der katalogisierten Teile, wo sich auch die Elemente des Innenraumes wiederfinden, also die Lenkräder, Sessel, Polsterelement und das Zubehör für das Innere für ausgewählte Fahrzeugen. Dank der ausgedehnt Kontakte beschäftigen wir uns mit den ebenfalls Sicherheitssystemen sowie den untypischen Baugruppen. Im Falle mehreren Bestellungen für die neuesten Modelle sind wir im Stande dem Kunden alle brauchbaren Teile anzubieten.
',
    'ofertaTekst2' => 'Unser Angebot komplettieren die neuen Teile. Im Falle einiger Artikel, die schwieriger zur kriegen sind auf dem Sekundärmarkt, können wir neue Teile zu sehr attraktiven Preisen anbieten. Dank unserer Zusammenarbeit mit den Automobilherstellern sind wir imstande Rabatte zu kriegen die für Firmen und individuelle Kunden nicht zu kriegen sind. Die Bestätigung unserer attraktiven Preise ist die Zusammenarbeit mit vielen Werkstätten die sich mit dem Service der Luxuswagen beschäftigen. Wir liefern die Teile für viele europäischen Autoservice und wir suchen weiter neue Kontakte, wodurch unsere Kunden eine größere Auswahl an Produkten zu noch besseren Preise haben.
',
    'ofertaTekst3' => 'Wir sind auch der Empfänger der mechanischen und Blech- Baugruppen von weltmännischen Marken und die für Tuner exklusiven Autos - wir kaufen die den Modifikationen unterzogenen Autos, wodurch es sich um neue oder fast neue Baugruppen handelt. Dank der fruchtbaren Zusammenarbeit findet sich in unseren Lagern Firmen wie Mansory, TechArt, Hamann, Brabus, Luna, AC Schnitzer und viele weitere wieder.<br /><br />Zusätzlich bieten wir auch den Ankauf der neuen, exklusiven Autos der weltmännischen Marken mit bedeutenden Rabatten an, darunter sind auch Demonstrationsautos bei den Händlern zugänglich.

<br><br>Unser Angebot basiert auf neuen und gebrauchten Teilen für Autos wie.
',
    'serwisTekst1' => 'Unsere Firma beschäftigt sich mit professionellem Autoservice exklusiver Marken. Bei individuellen Aufträgen führen wir jegliche Tätigkeiten durch, die einer sicheren Nutzung von Sport- und Luxusautos dienen. 
  
<br><br>Wir bieten Karosserie- und Lackierleistungen an und kümmern uns um den laufenden Service. Machen Sie sich mit unserem Serviceangebot bekannt und schicken Sie uns eine Anfrage.
',
    'opancerzenieTekst1' => 'Unseren Klienten bieten wir auch die Möglichkeit einer Autopanzerung an. Wir spezialisieren uns vor allem in Glas, aber kein Auftrag stellt für uns ein Problem dar. 

<br><br>Wir beschäftigen uns mit der Produktion von gepanzertem Glas von höchster Schutzqualität, in mehreren Klassen von Beschuss- und Explosionswiderstand- von doppelt geklebten Fenstern für Zivilautos, bis zur professionellen Ausstattung von Militärfahrzeugen. 

<br><br>Wir sind auch im Stande Schutzglas für Büros, Geschäfte, Flugzeuge oder Boote zu produzieren. Schicken Sie uns eine Anfrage.
',
    'faqTekst1' => '<h1>1. Welche Rabatte kann man für neue, originale Teile erhalten?</h1>
<br><p>In den meisten Fällen bieten wir unseren individuellen Kunden Rabatte in der Höhe von 15-25%. Abhängig von der Menge der Bestellung und der Marke können höhere Rabatte entstehen. Ausnahmen sind Teile für Automobile der Marke Ferrari, bei der individuelle Kunden keine Rabatte erhalten. Wir stimmen diese individuell ab und sie sind in der Regel sehr attraktiv. Für Werkstätten werden alle Rabatte individuell vereinbart.</p>
<h1>2. Verkaufen wir originale Sicherheitselemente d.h. Gürtel und  Airbags?</h1>
<br><p>Ja. Im Falle der mangelnden Zugänglichkeit zu Airbags für das gegebene Modell, sind wir im Stande eine professionelle Reparatur in einem internationalen Betrieb für Produktion von Airbags zu bieten. Dieser Betrieb verfügt über viele Zertifikate und ist zu Reparaturen und der Regeneration von Ordnungen der Staatssicherheit im Bereich der EU berechtigt worden. Das ist eine sehr attraktive und zu 100% sichere Alternative zu den Sicherheitssystemen unbekannter Herkunft.</p>
<h1>3. Leisten wir Kundendienste wie Blech- und Lackreparaturen?</h1>
<br><p>Im Augenblick bieten wir solche Dienstleistungen noch nicht an, außer in ungewöhnlichen Situationen. Allerdings sind wir derzeit am Bau eines Werkstatt-Handels-Komplexes und wir arbeiten zusammen mit vielen Werkstätten.</p>
<h1>4. Ist ein Individueller Transport möglich?</h1>
<br><p>Vorwiegend werden alle Lieferungen aus Deutschland oder Polen durchgeführt, und zwar durch Kurierunternehmen und Speditionen. Im Falle einer größeren Bestellung kann man sie mit unseren Autos transportieren – je nach den Umständen ist dies, im Rahmen der EU, auszumachen. </p>
<h1>5. Verwirklichen wir den Versand auf andere Kontinente?</h1>
<br><p>Selbstverständlich, die Speditionsfirmen mit denen wir zusammenarbeiten garantieren den Transport der von Ihnen bestellten Ware zu jedem Winkel der Erde.</p>
<h1>6. Kann man die Teile persönlich abholen?</h1>
<br><p>Bitte sehr, jedoch bitten wir Sie wegen der Vielzahl an Lagern, Kontakt mit uns aufzunehmen um zu prüfen, wo sich die Teile befinden.</p>
<h1>7. Reparieren wir beschädigte Teile?</h1>
<br><p>Wir sind nur in Einzelfällen im Stande Reparaturen an der Innenausstattung wie Sitzen, Innenverkleidung und dem Lenkrad vorzunehmen. Wir reparieren keine Blechteile und mechanische Komponenten.</p> 
<h1>8. Sind die neuen Tuning Elemente (z.B. das Gehäuse der Handspiegel, Spoiler, Lenkräder) sowie die Carbon Elemente chinesische Produkte?</h1>
<br><p>ÜBERHAUPT NICHT! Alle von uns angebotenen Baugruppen sind Originale der Produzenten (OEM PARTS) oder Elemente, die eine größere Qualität haben als das Sortiment des Erzeugers. Alles wird in Deutschland von Anfang bis Ende durchgeführt, wodurch die Qualität der Elemente ideal ist. Alle unsere Produkte verfügen über entsprechende Zertifikate (TÜV).</p>
<h1>9. Befinden sich in unserem Angebot auch Ersatzteile?</h1>
<br><p>NEIN, wir verkaufen ausschließlich originale Elemente der Produzenten oder eventuell getunte „Verbesserungen“. Alles ist immer auf unseren Auktionen beschrieben. Wir verwenden keine Nachahmungen, Fälschungen oder Kopien unbekannter Herkunft. Wir bieten auch keine überarbeiteten Lampen vom englischen Markt an. </p>
<h1>10. Haben wir Teile für amerikanische Autos?</h1>
<br><p>Ja, die Ausnahme sind Scheinwerfer, die die europäischen Normen nicht erfüllen.</p>
<h1>11. In welchen Währungen realisieren wir Zahlungen?</h1>
<br><p>Wegen großer Schwankungen des Wechselkurses gelten bei uns die angegebenen Preise in EURO. Die Preise auf den polnischen Auktionen werden am Tag des Verkaufs umgerechnet, weswegen Sie immer den Preis vor einem Ankauf überprüfen sollten, falls Sie nicht auf eine Versteigerung in € vorbereitet sind. Die Zahlungen nehmen wir gerne in Euro an, wobei es in individuellen Fällen auch in PLN möglich ist.</p>
<h1>12. Welche Rabatte kriegt man beim Kauf eines Neuwagens?</h1>
<br><p>Das besprechen wir individuell mit unseren Kunden.</p>
<h1>13. Kaufen wir gebrauchten Teile ab?</h1>
<br><p>Wir sind immer offen für alle Vorschläge einer Zusammenarbeit. Unsere Hauptlieferanten sind Spitzenreiter des europäischen Autoteilmarktes. Abgesehen davon kaufen wir die Teile auch gerne von Privatkunden – selbstverständlich nur wenn sie aus legalen Quellen stammen.</p>
',
    'adres' => 'Adressdaten',
    'telefon' => 'Telefon',
    'czasPracy' => 'Arbeitszeiten',
    'email' => 'Email-Adresse',
    'formularzKontaktowy' => 'Kontaktformular',
    'imie' => 'Name',
    'emailNadawcy' => 'Email',
    'trescWiadomosci' => 'Ihr Brief',
    'wyslij' => 'Senden',
    'marka' => 'Marke',
    'model' => 'Modell',
    'vin' => 'VIN',
    'numerKatalogowy' => 'Teil name / Katalognummer',
    'celKontaktu' => 'Wählen Grund für Kontakt',
    'dostepnoscCzesci' => 'Verfügbarkeit von Teile',
    'inny' => 'Andere',
    'mapaLink' => 'https://www.google.com/maps/embed/v1/place?q=ExoticCarParts%20-%20M.%20Kopec%2C%20P.%20Kopec%2C%20D.%20Frankowski%20GbR%2C%20Pfenningbacher%20Stra%C3%9Fe%2C%20Neuburg%20am%20Inn%2C%20Niemcy&key=AIzaSyCIGnfX1vOmNVIHY5onp2T1ZF_iZmx_ZpE&zoom=10',
    'adresHTML' => '<li>M. Kopec, P. Kopec, D. Frankowski GbR</li>
<li>94127 Neuburg am Inn, Germany</li>
<li>Pfenningbacherstr. 19</li>
<li>Germany</li>
',
    'telefonHTML' => '<li>GSM: (+49) 0151 11 61 75 84</li>
<li>FAX: (+49) 0850 291 59 666</li>',
  ),
));

$catalogueEn = new MessageCatalogue('en', array (
  'validators' => 
  array (
    'This value should be false.' => 'This value should be false.',
    'This value should be true.' => 'This value should be true.',
    'This value should be of type {{ type }}.' => 'This value should be of type {{ type }}.',
    'This value should be blank.' => 'This value should be blank.',
    'The value you selected is not a valid choice.' => 'The value you selected is not a valid choice.',
    'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.' => 'You must select at least {{ limit }} choice.|You must select at least {{ limit }} choices.',
    'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.' => 'You must select at most {{ limit }} choice.|You must select at most {{ limit }} choices.',
    'One or more of the given values is invalid.' => 'One or more of the given values is invalid.',
    'The fields {{ fields }} were not expected.' => 'The fields {{ fields }} were not expected.',
    'The fields {{ fields }} are missing.' => 'The fields {{ fields }} are missing.',
    'This value is not a valid date.' => 'This value is not a valid date.',
    'This value is not a valid datetime.' => 'This value is not a valid datetime.',
    'This value is not a valid email address.' => 'This value is not a valid email address.',
    'The file could not be found.' => 'The file could not be found.',
    'The file is not readable.' => 'The file is not readable.',
    'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large ({{ size }} {{ suffix }}). Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.' => 'The mime type of the file is invalid ({{ type }}). Allowed mime types are {{ types }}.',
    'This value should be {{ limit }} or less.' => 'This value should be {{ limit }} or less.',
    'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.' => 'This value is too long. It should have {{ limit }} character or less.|This value is too long. It should have {{ limit }} characters or less.',
    'This value should be {{ limit }} or more.' => 'This value should be {{ limit }} or more.',
    'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.' => 'This value is too short. It should have {{ limit }} character or more.|This value is too short. It should have {{ limit }} characters or more.',
    'This value should not be blank.' => 'This value should not be blank.',
    'This value should not be null.' => 'This value should not be null.',
    'This value should be null.' => 'This value should be null.',
    'This value is not valid.' => 'This value is not valid.',
    'This value is not a valid time.' => 'This value is not a valid time.',
    'This value is not a valid URL.' => 'This value is not a valid URL.',
    'The two values should be equal.' => 'The two values should be equal.',
    'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.' => 'The file is too large. Allowed maximum size is {{ limit }} {{ suffix }}.',
    'The file is too large.' => 'The file is too large.',
    'The file could not be uploaded.' => 'The file could not be uploaded.',
    'This value should be a valid number.' => 'This value should be a valid number.',
    'This file is not a valid image.' => 'This file is not a valid image.',
    'This is not a valid IP address.' => 'This is not a valid IP address.',
    'This value is not a valid language.' => 'This value is not a valid language.',
    'This value is not a valid locale.' => 'This value is not a valid locale.',
    'This value is not a valid country.' => 'This value is not a valid country.',
    'This value is already used.' => 'This value is already used.',
    'The size of the image could not be detected.' => 'The size of the image could not be detected.',
    'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.' => 'The image width is too big ({{ width }}px). Allowed maximum width is {{ max_width }}px.',
    'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.' => 'The image width is too small ({{ width }}px). Minimum width expected is {{ min_width }}px.',
    'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.' => 'The image height is too big ({{ height }}px). Allowed maximum height is {{ max_height }}px.',
    'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.' => 'The image height is too small ({{ height }}px). Minimum height expected is {{ min_height }}px.',
    'This value should be the user current password.' => 'This value should be the user current password.',
    'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.' => 'This value should have exactly {{ limit }} character.|This value should have exactly {{ limit }} characters.',
    'The file was only partially uploaded.' => 'The file was only partially uploaded.',
    'No file was uploaded.' => 'No file was uploaded.',
    'No temporary folder was configured in php.ini.' => 'No temporary folder was configured in php.ini.',
    'Cannot write temporary file to disk.' => 'Cannot write temporary file to disk.',
    'A PHP extension caused the upload to fail.' => 'A PHP extension caused the upload to fail.',
    'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.' => 'This collection should contain {{ limit }} element or more.|This collection should contain {{ limit }} elements or more.',
    'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.' => 'This collection should contain {{ limit }} element or less.|This collection should contain {{ limit }} elements or less.',
    'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.' => 'This collection should contain exactly {{ limit }} element.|This collection should contain exactly {{ limit }} elements.',
    'Invalid card number.' => 'Invalid card number.',
    'Unsupported card type or invalid card number.' => 'Unsupported card type or invalid card number.',
    'This is not a valid International Bank Account Number (IBAN).' => 'This is not a valid International Bank Account Number (IBAN).',
    'This value is not a valid ISBN-10.' => 'This value is not a valid ISBN-10.',
    'This value is not a valid ISBN-13.' => 'This value is not a valid ISBN-13.',
    'This value is neither a valid ISBN-10 nor a valid ISBN-13.' => 'This value is neither a valid ISBN-10 nor a valid ISBN-13.',
    'This value is not a valid ISSN.' => 'This value is not a valid ISSN.',
    'This value is not a valid currency.' => 'This value is not a valid currency.',
    'This value should be equal to {{ compared_value }}.' => 'This value should be equal to {{ compared_value }}.',
    'This value should be greater than {{ compared_value }}.' => 'This value should be greater than {{ compared_value }}.',
    'This value should be greater than or equal to {{ compared_value }}.' => 'This value should be greater than or equal to {{ compared_value }}.',
    'This value should be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should be identical to {{ compared_value_type }} {{ compared_value }}.',
    'This value should be less than {{ compared_value }}.' => 'This value should be less than {{ compared_value }}.',
    'This value should be less than or equal to {{ compared_value }}.' => 'This value should be less than or equal to {{ compared_value }}.',
    'This value should not be equal to {{ compared_value }}.' => 'This value should not be equal to {{ compared_value }}.',
    'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.' => 'This value should not be identical to {{ compared_value_type }} {{ compared_value }}.',
    'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.' => 'The image ratio is too big ({{ ratio }}). Allowed maximum ratio is {{ max_ratio }}.',
    'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.' => 'The image ratio is too small ({{ ratio }}). Minimum ratio expected is {{ min_ratio }}.',
    'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.' => 'The image is square ({{ width }}x{{ height }}px). Square images are not allowed.',
    'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.' => 'The image is landscape oriented ({{ width }}x{{ height }}px). Landscape oriented images are not allowed.',
    'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.' => 'The image is portrait oriented ({{ width }}x{{ height }}px). Portrait oriented images are not allowed.',
    'This form should not contain extra fields.' => 'This form should not contain extra fields.',
    'The uploaded file was too large. Please try to upload a smaller file.' => 'The uploaded file was too large. Please try to upload a smaller file.',
    'The CSRF token is invalid. Please try to resubmit the form.' => 'The CSRF token is invalid. Please try to resubmit the form.',
  ),
  'security' => 
  array (
    'An authentication exception occurred.' => 'An authentication exception occurred.',
    'Authentication credentials could not be found.' => 'Authentication credentials could not be found.',
    'Authentication request could not be processed due to a system problem.' => 'Authentication request could not be processed due to a system problem.',
    'Invalid credentials.' => 'Invalid credentials.',
    'Cookie has already been used by someone else.' => 'Cookie has already been used by someone else.',
    'Not privileged to request the resource.' => 'Not privileged to request the resource.',
    'Invalid CSRF token.' => 'Invalid CSRF token.',
    'Digest nonce has expired.' => 'Digest nonce has expired.',
    'No authentication provider found to support the authentication token.' => 'No authentication provider found to support the authentication token.',
    'No session available, it either timed out or cookies are not enabled.' => 'No session available, it either timed out or cookies are not enabled.',
    'No token could be found.' => 'No token could be found.',
    'Username could not be found.' => 'Username could not be found.',
    'Account has expired.' => 'Account has expired.',
    'Credentials have expired.' => 'Credentials have expired.',
    'Account is disabled.' => 'Account is disabled.',
    'Account is locked.' => 'Account is locked.',
  ),
  'messages' => 
  array (
    'start' => 'Start',
    'oNas' => 'About us',
    'oferta' => 'Our offer',
    'serwis' => 'Service',
    'opancerzenie' => 'Car armoring',
    'faq' => 'FAQ',
    'kontakt' => 'Contact us',
    'jezyk' => 'Language',
    'aukcje' => 'Our auctions',
    'startTekst1' => 'Owning a world class automobile is not only about providing  the consciousness of the possibility of walking into your garage, getting into a sporty Lamborghini, prestigious Maserati or extravagant Aston Martin and just driving off.  Real love and respect for a vehicle is based on the skill at proper servicing and keeping the car in technical trim. 

<br><br>Owing to us you will present your machine exclusively with products of renowned brands. High speed and specific engineering prevalent on board of the luxury car do not permit to use a substitute, therefore,  in our offer  you can find original parts with beneficial discounts. 

<br><br>Using the service of Exotic Car Parts ensures saving money and time, while the satisfaction of the purchase will make you fall even deeper in love with your car.
',
    'oNasTekst1' => 'Our company is present on the European motorization market since 2001. There were numerous partnerships to help us with the comprehension of its specific, thanks to which we won the dependence of thousands of customers,  offering them the best quality of service. Exotic Car Parts was created by people guided by passion, people who value the adequate level of exploitation and servicing of the prestigious brands.  The loyalty to clients  is not the only matter that distinguishes our company. A great deal of partners put full trust in us, thus currently our offer consists of items which are hard to acquire even in authorized services across Europe.

<br><br>For many years our company has specialized in turnover of motor cars, both new and used ones. Taking the opportunities given by the open borders and partnership openness of our western neighbors,  we began to extend the firms, which nowadays prosper at the highest level, commanding the unceasing regard among purchasers as well as our selected partners.

<br><br>Exotic Car Parts’ offer is focused on the western part of Europe, nevertheless, we incessantly expand the area of activity and at the moment our service is also used by buyers from the most distant places in the Old Continent. The parts, both new and used ones, are a tested assortment, which undergoes a special inspection before being delivered to the customer.

<br><br>The increasing demand for luxury goods revealed all over the world. It mobilized us to propose new and used parts of reputable brands, either in case of tin, mechanical, propulsive and suspension elements or equipment of sporty and luxury vehicles. We are the leader in this industry on the German market and beyond it.
',
    'oNasTekst2' => 'Our company aims to distribute its products not only throughout Germany.  We serve regulars from all countries in the European Union, as well as Russia, Kuwait, UAE, Thailand, China and the USA.

<br><br>Highly qualified staff and up-to-date warehouses located in Germany and Poland allow us to put forward thousands of tenders to our clients, forming top-level quality of service. The partners collected from  the whole European Union provide support, therefore the customer can receive practically every part of the exclusive car a couple days after. As one of a few on the market, we have access to cut and tin elements sold to owners of the automobiles which are not being produced anymore. These parts are becoming harder and harder to gain, even from the factory availability.
',
    'oNasTekst3' => 'For the most exacting customers we tender an entire panoply of alterations, both stylistic and mechanical, branded by the renowned Mansory brand. This German traditional company deals in professional reconstruction of such vehicles as Ferrari, Rolls-Royce or Aston Martin.

<br><br>For the detailed information visit <a href=\'http://www.mansory.pl\'>www.mansory.pl</a>
',
    'oNasTekst4' => 'We invite you to cooperate with us.',
    'ofertaTekst1' => 'The Exotic Car Parts company deals in selling new and used tin and mechanical parts of either luxury or sporty automobiles.  We offer both particular details of the bodywork or trimming the interior, as well as whole cut elements such as roofs or bearer of the bodywork. Our warehouses contain also entire bodies of exclusive vehicles.

<br><br>Minor parts but also full units of transmissions, engines,  along with suspension, propulsive elements or brakes are not a problem at all. Over and above basic subassemblies of these types included in the equipment of the interior, underbody, mechanics and bodywork of the car, in our offer you will find the security systems and atypical elements, available merely in authorized services for exclusive brands.
',
    'ofertaTekst2' => 'An extensive network of contacts and numerous warehouses allow us to meet nearly any order concerning basically any luxury or sporty automobile. Besides the elements from the secondary market or straight from the cars from our base, we also offer brand-new parts. Due to our cooperation with carmakers and professional services, Exotic Car Parts is a place where you obtain units both new and remanufactured, including discounts which the competition can only dream of.
',
    'ofertaTekst3' => 'Aside from basic service and exploitative parts, our company tenders mechanical and tin elements as well as world-class exclusive-car tuners’ details of the interior. We serve access at a bargain price to bodykits and particular parts of brands such as Mansory, Techart, Hamann, Brabus, Luna, AC Schnitzer et al.

<br><br>Furthermore, as an additional activity, we offer the purchase of the new exclusive cars of selected brand at a significant discounts, including demonstrational vehicles available at dealerships.
',
    'serwisTekst1' => 'Our company deals in professional service of cars of exclusive brands. On the individual order we perform any action serving safe operation of sporty and luxury automobiles. 

<br><br>We offer tinner and varnish services and care about current service as well. We encourage you to familiarize yourself with our offer and to submit inquiry.
',
    'opancerzenieTekst1' => 'To our customers we also offer a possibility to armor their vehicles. We specialize mainly in glass, but none of the orders will be a problem. 

<br><br>We work on the production of superior safety armored glass, in a dozen of classes of resistance to shelling and explosion- starting from double windows pasted into civil cars, ending with professional equipment of military vehicles. Moreover, we are able to produce panes protecting offices, shops, planes or boats. 

<br><br>We encourage you to submit inquiry.  
',
    'faqTekst1' => '<h1>1. What discounts can I get for brand-new original parts?</h1>
<br><p>In most cases our individual customers are offered 15-25% discounts on dealership prices. Depending on the brand and the size of the order, the costs may be extra shrunken. The only exception is Ferrari,  for whose parts discounts for individual purchasers are not envisioned, our company agrees on them individually and predominantly they are very attractive. For motor services/workshops discounts are set individually.</p>
<h1>2. Do we sell original safety elements such as airbags or seat belts?</h1>
<br><p>Yes. In case of lack of availability of airbags for a particular model, we are able to guarantee a professional repair in the international workshop producing airbags. This company has lots of certificates and is licensed to repair and regeneration of the safety systems in the European Union. This is a very attractive and 100% secure alternative to used safety systems of unknown origin.</p>
<h1>3. Do we offer car repair service?</h1>
<br><p>At the moment we do not offer this kind of services, except for unique situations. However, we are in progress of building a repair-sale complex and we collaborate with many car workshops/motor services.</p>
<h1>4. Is individual transport possible?</h1>
<br><p>In the main we ship our products out from Germany or Poland by the agency of couriers and forwarding trade. Nevertheless, in case of larger orders, there is a possibility of transport by our cars- after agreeing to conditions, in the EU.</p>
<h1>5. Do we offer intercontinental shipping?</h1>
<br><p>Of course. Shipping companies that we cooperate with can transport units you ordered to any part of the world.</p>
<h1>6. Can you collect the parts in person?</h1>
<br><p>Absolutely. However, in view of numerous warehouses, we ask for a prior contact in order to check the position of the merchandise.</p>
<h1>7. Do we fix damaged parts/components?</h1>
<br><p>We are able to repair the elements of interior, such as driver seats, decorative elements or steering wheel only in individual cases. We do not fix mechanical or bodywork components.</p>
<h1>8. Are the new tuning elements (i.e.  spoilers, mirror casings, steering wheels) and carbon elements Chinese products?</h1>
<br><p>ABSOLUTELY NOT! All the components that we offer are the original products of producers (OEM PARTS) or elements of quality exceeding the producer’s assortment. Everything is made in Germany from start to finish, so the quality, as well as matching of the elements, is perfect. All of our products have proper certificates (TUV).</p>
<h1>9. Do we have substitutes in our offer?</h1>
<br><p>NO, we sell only original products from the producers or tuning ‘upgrades’. Everything is always described on our auctions.  We do not use imitations, knock-offs or copies of an unknown origin. Neither do we offer altered lights from the English market.</p>
<h1>10. Do we have parts for US cars?</h1>
<br><p>Yes, with the exception of front lights that do not fit the EU norms.</p>
<h1>11. In what currencies do we accept payments?</h1>
<br><p>Due to large currency rate fluctuations, our prices are listed in EURO. Prices at polish auctions are converted on the day of their start so it is always worth to check the price before the purchase, as long as it is not given in € at the auction. We accept the payments preferably in Euros, in individual cases also in PLN.</p>
<h1>12. What discounts can one obtain for the brand-new cars?</h1>
<br><p>Those issues are individually discussed with clients.</p>
<h1>13. Do we buy the used parts in?</h1>
<br><p>We are always open to any offer of cooperation. Our main suppliers are the top players in the European car parts market but we also keenly buy parts from our individual clients- provided they come from the legal source.</p>
',
    'adres' => 'Address Details',
    'telefon' => 'Telephone',
    'czasPracy' => 'Working Time',
    'email' => 'Email Address',
    'formularzKontaktowy' => 'Contact Form',
    'imie' => 'Name',
    'emailNadawcy' => 'Email',
    'trescWiadomosci' => 'Your Message',
    'wyslij' => 'Send',
    'marka' => 'Brand',
    'model' => 'Model',
    'vin' => 'VIN',
    'numerKatalogowy' => 'Part name / Catalog number',
    'celKontaktu' => 'Select contact reason',
    'dostepnoscCzesci' => 'Part availability',
    'inny' => 'Other',
    'mapaLink' => 'https://www.google.com/maps/embed/v1/place?q=ExoticCarParts%20-%20M.%20Kopec%2C%20P.%20Kopec%2C%20D.%20Frankowski%20GbR%2C%20Pfenningbacher%20Stra%C3%9Fe%2C%20Neuburg%20am%20Inn%2C%20Niemcy&key=AIzaSyCIGnfX1vOmNVIHY5onp2T1ZF_iZmx_ZpE&zoom=10',
    'adresHTML' => '<li>M. Kopec, P. Kopec, D. Frankowski GbR</li>
<li>94127 Neuburg am Inn, Germany</li>
<li>Pfenningbacherstr. 19</li>
<li>Germany</li>
',
    'telefonHTML' => '<li>GSM: (+49) 0151 11 61 75 84</li>
<li>FAX: (+49) 0850 291 59 666</li>',
  ),
));
$catalogue->addFallbackCatalogue($catalogueEn);


return $catalogue;
