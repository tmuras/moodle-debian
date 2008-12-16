<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['admindirerror'] = 'De admin-map die je opgeeft is niet juist';
$string['admindirname'] = 'Admin-map';
$string['admindirsettinghead'] = 'Admin-map instellen..';
$string['admindirsettingsub'] = 'Enkele webhosts gebruiken /admin als een speciale url om een controle paneel of iets dergelijks te openen. Dat kan jammer genoeg conflict geven met de standaardlocatie van de Moodle admin pagina\'s. Je kunt dit in orde brengen door de adminmap van Moodle hier te hernoemen en die nieuwe naam hier te zetten, bijvoorbeeld <br /><br /><b>moodleadmin</b><br /><br  />Dit zal de links naar de adminmap in Moodle herstellen.';
$string['bypassed'] = 'Omzeild';
$string['cannotcreatelangdir'] = 'Kan lang map niet maken';
$string['cannotcreatetempdir'] = 'Kan tijdelijke map niet maken.';
$string['cannotdownloadcomponents'] = 'Kan componenten niet downloaden.';
$string['cannotdownloadzipfile'] = 'Kan ZIP-bestand niet downloaden.';
$string['cannotfindcomponent'] = 'Kan component niet vinden.';
$string['cannotsavemd5file'] = 'Kan md5-bestand niet bewaren.';
$string['cannotsavezipfile'] = 'Kan ZIP-bestand niet bewaren.';
$string['cannotunzipfile'] = 'Kon bestand niet unzippen';
$string['caution'] = 'Opgelet';
$string['check'] = 'Controleer';
$string['chooselanguagehead'] = 'Kies een taal';
$string['chooselanguagesub'] = 'De taalinstelling die je hier kiest is enkel voor het installatieproces. In één van de volgende schermen zul je de standaardtaal voor de site kunnen kiezen. Bebruikers kunnen als je dat wil, zelf bepalen met welke taal ze werken.';
$string['closewindow'] = 'Sluit dit venster';
$string['compatibilitysettingshead'] = 'Bezig met je PHP-instellingen te controleren ...';
$string['compatibilitysettingssub'] = 'Om Moodle goed te laten werken, moet je server slagen voor al deze testen.';
$string['componentisuptodate'] = 'Component niet up-to-date';
$string['configfilenotwritten'] = 'Het installatiescript kon het bestand config.php met jouw gekozen instellingen niet automatisch aanmaken.  Kopieer de volgende code in een bestand dat je config.php noemt en plaats dat in de rootmap van Moodle.';
$string['configfilewritten'] = 'Het maken van config.php is gelukt';
$string['configurationcompletehead'] = 'Configuratie klaar';
$string['configurationcompletesub'] = 'Moodle probeerde je configuratie te bewaren in een bestand in de root van je installatie.';
$string['continue'] = 'Ga door';
$string['ctyperecommended'] = 'Het installeren van de optionele ctype PHP extentie is aanbevolen om de performantie van de site te verhogen, vooral als op je site niet-latijnse talen gebruikt worden.';
$string['ctyperequired'] = 'De ctype PHP-extentie is nu vereist in Moodle om de performantie te verhogen en om multi-talencompatibiliteit mogelijk te maken.';
$string['curlrecommended'] = 'Het installeren van de optionele Curl bibliotheek wordt ten zeerste aangeraden om de netwerkmogelijkheden van Moodle in te schakelen';
$string['curlrequired'] = 'De cURL PHP-extentie is nu vereist in Moodle om te kunnen communiceren met Moodle bewaarplaats';
$string['customcheck'] = 'Andere controles';
$string['database'] = 'Databank';
$string['databasecreationsettingshead'] = 'Nu moet je de databankinstellingen configureren. In deze databank zullen de meeste gegevens van Moodle opgeslagen worden. De databank zal automatisch gemaakt worden door het installatiescript met volgende instellingen.';
$string['databasecreationsettingssub'] = '<b>Type:</b> \"mysql\" gekozen door het installatiescript<br />
<b>Host:</b> \"localhost\" gekozen door het installatiescript<br />
<b>Naam:</b> database naam, bv moodle<br />
<b>Gebruiker:</b> \"root\" gekozen door het installatiescript<br />
<b>Wachtwoord:</b> het wachtwoord van jouw databank<br />
<b>Tabelvoorvoegsel:</b> een voorvoegsel dat je wil gebruiken voor alle tabelnamen.';
$string['databasesettingshead'] = 'Nu moet je de databank waarin Moodle geïnstalleerd zal worden, configureren. Deze databank moet al aangemaakt zijn en je hebt een gebruikersnaam en wachtwoord ervan nodig om Moodle toegang te geven.';
$string['databasesettingssub'] = '<b>Type:</b> mysql of postgres7<br />
<b>Host:</b> vb localhost of db.isp.com<br />
<b>Naam:</b> database naam, vb moodle<br />
<b>Gebruiker:</b> de gebruikersnaam voor jouw database<br />
<b>Wachtwoord:</b> het wachtwoord voor je databank<br />
<b>Tabelvoorvoegsel:</b> een voorvoegsel dat je wil gebruiken voor alle tabelnamen';
$string['databasesettingssub_mssql'] = '<b>Type:</b> SQL*Server (geen UTF-8)<b><font color=\"red\">Experimenteel! (niet voor gebruik op productiemachine)</font></b><br />
<b>Host:</b> vb localhost of db.isp.com<br />
<b>Naam:</b> database naam, vb moodle<br />
<b>Gebruiker:</b> de gebruikersnaam voor jouw database<br />
<b>Wachtwoord:</b> het wachtwoord voor je databank<br />
<b>Tabelvoorvoegsel:</b>voorvoegsel voor alle tabelnamen (verplicht)';
$string['databasesettingssub_mssql_n'] = '<b>Type:</b> SQL*Server (UTF-8 ingeschakeld)<br />
<b>Host:</b> vb localhost of db.isp.com<br />
<b>Naam:</b> database naam, vb moodle<br />
<b>Gebruiker:</b> de gebruikersnaam voor jouw database<br />
<b>Wachtwoord:</b> het wachtwoord voor je databank<br />
<b>Tabelvoorvoegsel:</b>voorvoegsel voor alle tabelnamen (verplicht)';
$string['databasesettingssub_mysql'] = '<b>Type:</b> MYSQL<br />
<b>Host:</b> vb localhost of db.isp.com<br />
<b>Naam:</b> database naam, vb moodle<br />
<b>Gebruiker:</b> de gebruikersnaam voor jouw database<br />
<b>Wachtwoord:</b> het wachtwoord voor je databank<br />
<b>Tabelvoorvoegsel:</b>een voorvoegsel dat je wil gebruiken voor alle tabelnamen (optioneel)';
$string['databasesettingssub_mysqli'] = '<b>Type:</b> Improved MySQL<br />
<b>Host:</b> vb localhost of db.isp.com<br />
<b>Naam:</b> databank naam, vb moodle<br />
<b>Gebruiker:</b> Gebruikersnaam van jouw databank<br />
<b>Wachtwoord:</b> Wachtwoord voor jouw databank<br />
<b>Tabelvoorvoegsel:</b> voorvoegsel voor alle tabelnamen (optioneel)';
$string['databasesettingssub_oci8po'] = '<b>Type:</b> Oracle<br />
<b>Host:</b>niet gebruikt - moet leeggelaten worden<br />
<b>Naam:</b> database naam of de tnsnames.ora connection<br />
<b>Gebruiker:</b> de gebruikersnaam voor jouw database<br />
<b>Wachtwoord:</b> het wachtwoord voor je databank<br />
<b>Tabelvoorvoegsel:</b>voorvoegsel voor alle tabelnamen (verplicht, 2 tekens maximum)';
$string['databasesettingssub_odbc_mssql'] = '<b>Type:</b> SQL*Server (over ODBC)<br />
<b><font color=\"red\">Experimental! (not for use in production)</font></b><br />
<b>Host:</b>De naam van de DSN die je geeft in het ODBC controlescherm<br />
<b>Naam:</b> database naam vb Moodle<br />
<b>Gebruiker:</b> de gebruikersnaam voor jouw database<br />
<b>Wachtwoord:</b> het wachtwoord voor je databank<br />
<b>Tabelvoorvoegsel:</b>voorvoegsel voor alle tabelnamen (verplicht)';
$string['databasesettingssub_postgres7'] = '<b>Type:</b> PostgreSQL<br />
<b>Host:</b> vb localhost of db.isp.com<br />
<b>Naam:</b> database naam vb Moodle<br />
<b>Gebruiker:</b> de gebruikersnaam voor jouw database<br />
<b>Wachtwoord:</b> het wachtwoord voor je databank<br />
<b>Tabelvoorvoegsel:</b>voorvoegsel voor alle tabelnamen (verplicht)';
$string['databasesettingswillbecreated'] = '<b>Opmerking:</b> het installatieprogramma zal proberen een databank te maken als die nog niet bestaat.';
$string['dataroot'] = 'Gegevens';
$string['datarooterror'] = 'De \'data-map\' die je opgaf kon niet gevonden of gemaakt worden. Verbeter ofwel het pad of maak die map manueel.';
$string['dbconnectionerror'] = 'We konden geen verbinding maken met de databank die je opgegeven hebt. Controleer je databankinstellingen';
$string['dbcreationerror'] = 'Probleem met het opbouwen van de databank. De databanknaam kon niet aangemaakt worden met de gegevens die je opgegeven hebt';
$string['dbhost'] = 'Hostserver';
$string['dbprefix'] = 'Tabelvoorvoegsel';
$string['dbtype'] = 'Type';
$string['dbwrongencoding'] = 'De gekozen databank loopt niet onder Unicode (UTF8), maar onder een ongeschikte encodering ($a). Je kunt beter een Unicode (UTF8) databank gebruiken. Als je wil, kun je deze test overslaan door hieronder op \"Negeer DB-encodingtest\" te klikken, maar je zou hierdoor wel problemen kunnen krijgen.';
$string['dbwronghostserver'] = 'Je moet de \"Host\" regels volgen zoals hierboven uitgelegd';
$string['dbwrongnlslang'] = 'De NLS_LANG omgevingsvariable van je webserver moet de AL32UTF8 tekenset gebruiken. Zie ook je PHP documentatie over hoe OCI8 correct te configureren.';
$string['dbwrongprefix'] = 'Je moet de \"Tabel voorvoegselregels\" volgen zoals hierboven beschreven';
$string['directorysettingshead'] = 'Bevestig de locaties voor dese Moodle-installatie';
$string['directorysettingssub'] = '<b>Webadres:</b>
Geef hier het volledig webadres (URL) langswaar moodle zall bekeken worden. Als je website via verschillende URL\'s toegankelijk is, kies dan diegene die je leerlingen normaal zullen gebruiken. Opgelet, geen schuine streep achteraan.
<br />
<br />
<b>Moodle installatiemap:</b>
Geef het volledige pad naar deze installatie. Zorg er voor dat je hoofdletters/kleine letters respecteert.
<br />
<br />
<b>Datamap:</b>
Je hebt een plaats nodig waar Moodle bestanden kan opslaat. Deze map moet leesbaar EN BESCHRIJFBAAR zijn door de webserver (meestal gebruikersnaam nobody, apache of www-data), maar mag niet rechtstreeks toegankelijk zijn via het web.';
$string['dirroot'] = 'Moodle-map';
$string['dirrooterror'] = 'De instelling voor \'Moodle-map\' was niet juist - we kunnen daar geen Moodle-installatie vinden. Onderstaande waarde is gereset.';
$string['download'] = 'Download';
$string['downloadedfilecheckfailed'] = 'Controle van het gedownloade bestand mislukt';
$string['downloadlanguagebutton'] = 'Download het \"$a\" taalpakket';
$string['downloadlanguagehead'] = 'Download taalpakket';
$string['downloadlanguagenotneeded'] = 'Je kunt het installatieproces verder laten lopen met het standaard taalpakket, \"$a\".';
$string['downloadlanguagesub'] = 'Je kun nu een taalpakket downloaden en de installatie in die taal verder zetten.<br /><br />Als je dit taalpakket niet kunt downloaden, dan zal de installatie in het Engels verder gaan. (Als de installatie is afgewerkt, krijg je terug de mogelijkheid om nieuwe taalpakketten te downloaden en te installeren)';
$string['environmenterrortodo'] = 'Je moet all de problemen over de installatie-omgeving die hierboven gevonden zijn, oplossen. Ga pas dan verder met het installeren van deze Moodleversie.';
$string['environmenthead'] = 'Omgeving controleren ...';
$string['environmentrecommendcustomcheck'] = 'Als deze test faalt, dan wijst dat op een mogelijk probleem';
$string['environmentrecommendinstall'] = 'wordt aangeraden om te installeren of in te schakelen';
$string['environmentrecommendversion'] = 'je kunt betere versie $a->needed gebruiken en je gebruikt nu versie $a->current';
$string['environmentrequirecustomcheck'] = 'Deze test moet OK zijn';
$string['environmentrequireinstall'] = 'moet geïnstalleerd/ingeschakeld zijn';
$string['environmentrequireversion'] = 'versie $a->needed is vereist en je gebruikt nu versie $a->current';
$string['environmentsub'] = 'We controleren nu of de versies van verschillende componenten van je server voldoen aan de systeemvereisten van Moodle';
$string['environmentxmlerror'] = 'Fout bij het lezen van de omgevingsdata ($&->error_code)';
$string['error'] = 'Fout';
$string['fail'] = 'Mislukt';
$string['fileuploads'] = 'Bestanden uploaden';
$string['fileuploadserror'] = 'Dit moet ingeschakeld zijn';
$string['fileuploadshelp'] = '<p>Het lijkt er op dat het uploaden van bestanden uitgeschakeld is op jouw server.</p>
<p>Moodle kan verder geïnstalleerd worden, maar zonder deze mogelijkheid zul je geen cursusmateriaal of afbeeldingen voor de profielen van je gebruikers kunnen uploaden.</p>
<p>Om het uploaden van bestanden in te schakelen moet je (of je systeembeheerder) php.ini op je systeem bewerken en volgende instelling wijzigen:
<b>file_uploads</b> op \'1\' zetten.</p>';
$string['gdversion'] = 'GD-versie';
$string['gdversionerror'] = 'De GD-bibliotheek moet geïnstalleerd zijn om afbeeldingen te kunnen maken en verwerken';
$string['gdversionhelp'] = '<p>Blijkbaar is GD niet geïnstalleerd op je server.</p>
<p>PHP heeft de GD-bibliotheek nodig om afbeeldingen te kunnen maken (zoals de grafieken van de logbestanden) en te verwerken (zoals de profielbestanden van de gebruikers). Moodle zal werken zonder GD - alleen deze mogelijkheden zullen het niet doen.</p>
<p>Om GD toe te voegen aan PHP op een Unixmachine moet je PHP compileren met de --with-gd parameter.</p>
<p>Onder Windows kun je gewoonlijk php.ini bewerken en de commentaartekens voor de lijn met php_gd2.dll verwijderen.</p>';
$string['globalsquotes'] = 'Inveilige behandeling van globals';
$string['globalsquoteserror'] = 'Zet je PHP instellingen juist: schakel register_globals uit en/of schakel magic_quotes_gpc in';
$string['globalsquoteshelp'] = '<p>De combinatie van uitgeschakelde Magic Quotes GPC en ingeschakelde Register Globals tegelijk wordt sterk afgeraden.</p>

<p>De aanbevolen instelling is<b>magic_quotes_gpc = On</b> en <b>register_globals = Off</b> in je php.ini</p>

<p>Als je geen toegang hebt tot php.ini, dan kun je misschien volgende lijn toevoegen in het bestand .htaccess in je Moodlemap:
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['globalswarning'] = '<p><strong>Veiligheidswaarschuwing</strong>:om Moodle goed te laten werken, is het nodig <br />dat je enkele wijzigingen maakt in je huidige PHP-instellingen.</p><p>Je <em>moet</em> <code>register_globals=off</code> instellen.</p><p>Deze instelling kan aangepast worden door je <code>php.ini</code>, Apache/IIS <br /> configuratie aan te passen of door een <code>.htaccess</code>-bestand te gebruiken.';
$string['help'] = 'Help';
$string['iconvrecommended'] = 'Als je site andere talen dan die uit de Latin1 tekenset gebruikt, dan is het installeren van de optionele ICONV library ten zeerste aangeraden om de performantie van de site te verhogen.';
$string['info'] = 'Informatie';
$string['installation'] = 'Installatie';
$string['invalidmd5'] = 'Ongeldig md5';
$string['langdownloaderror'] = 'De taal \"$a\" is jammer genoeg niet geïnstalleerd. Het installatieproces gaat verder in het Engels.';
$string['langdownloadok'] = 'De taal \"$a\" is met succes geïnstalleerd. Het installatieproces zal in deze taal verder gaan.';
$string['language'] = 'Taal';
$string['magicquotesruntime'] = 'Magic Quotes runtime';
$string['magicquotesruntimeerror'] = 'Dit moet uitgeschakeld zijn';
$string['magicquotesruntimehelp'] = '<p>Magic Quotes runtime moet uitgeschakeld zijn om Moodle goed te laten functioneren.</p>
<p>Normaal staat het af als standaardinstelling ... zie de instelling <b>magic_quotes_runtime</b> in je php.ini-bestand.</p>
<p>Als je geen toegang hebt tot php.ini, dan kun je proberen om onderstaande lijn in een bestand te zetten dat je .htaccess noemt en dat dan in je Moodle-map plaatsen: <blockquote>php_value magic_quotes_runtime Off</blockquote></p>';
$string['mbstringrecommended'] = 'Als je site andere talen dan die uit de Latin1 tekenset gebruikt, dan is het installeren van de optionele MBSTRING library ten zeerste aangeraden om de performantie van de site te verhogen.';
$string['memorylimit'] = 'Geheugenlimiet';
$string['memorylimiterror'] = 'De PHP-geheugenlimiet staat eerder laag ingesteld ...  je zou hierdoor later problemen kunnen krijgen.';
$string['memorylimithelp'] = '<p>De PHP-geheugenlimiet van je server is ingesteld op $a.</p>
<p>Hierdoor kan Moodle geheugenproblemen krijgen, vooral als je veel modules installeert en/of veel gebruikers hebt.</p>

<p>We raden je aan PHP met een hogere geheugenlimiet te configureren indien mogelijk, bijvoorbeeld 40Mb. Er zijn verschillende mogelijkheden om dat te doen. Je kunt proberen:
<ol>
<li>Indien je kunt PHP hercompileren met <i>--enable-memory-limit</i>.
Hierdoor kan Moodle zelf zijn geheugenlimiet instellen.
<li>Als je toegang hebt tot het php.ini-bestand, kun je de <b>memory_limit</b>-instelling veranderen naar bv 40Mb. Als je geen toegang hebt kun je je systeembeheerder vragen dit voor je te wijzigen.</li>
<li>Op sommige PHP-servers kun je een .htaccess-bestand maken in de Moodle-map met volgende lijn: <p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Opgelet: op sommige servers zal dit verhinderen dat <b>alle</b> PHP-bestanden uitgevoerd worden. (je zult foutmeldingen zien wanneer je naar php-pagina\'s kijkt) Je zult dan het .htaccess-bestand moeten verwijderen.</li>
</ol>';
$string['missingrequiredfield'] = 'Vereist veld ontbreekt';
$string['moodledocslink'] = 'Hulp uit Moodle Docs voor deze pagina';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server met UTF-8 ingeschakeld (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP is niet juist geconfigureerd met de MSSQL-extentie en kan niet communiceren met SQL*Server. Controleer je php.ini-bestand of hercompileer PHP';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = 'Als je site echter UITSLUITEND iso-8859-1 (latin) talen gebruikt, dan kun je MySQL 4.1.12 (of hoger) blijven gebruiken.';
$string['mysql416required'] = 'MySQL 4.1.16 is de minimum versie die nodig is voor Moodle 1.6 om te kunnen garanderen dat alle gegevens naar UTF-8 geconverteerd zullen worden.';
$string['mysqlextensionisnotpresentinphp'] = 'PHP is niet goed geconfigureerd met de MySQL-extentie om met MySQL te communiceren. Controleer je php.ini-bestand of hercompileer PHP.';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP is niet goed geconfigureerd - het kan niet communiceren met MySQL. Controleer je php.ini bestand of hercompileer PHP. De MySQLi-extentie is niet beschikbaar voor PHP 4.';
$string['name'] = 'Naam';
$string['next'] = 'Volgende';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP is niet juist geconfigureerd met de OCI8-extentie en kan niet communiceren met Oracle. Controleer je php.ini-bestand of hercompileer PHP.';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP is niet juist geïnstalleerd met de ODBC-extentie en kan niet communiceren met SQL*Server. Controleer je php.ini-bestand of hercompileer PHP.';
$string['ok'] = 'OK';
$string['opensslrecommended'] = 'Het installeren van de OpenSSL bibliotheek is sterk aangeraden -- het maakt Moodle Networking mogelijk.';
$string['pass'] = 'OK';
$string['password'] = 'Wachtwoord';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP is niet juist geïnstalleerd met de PGSQL-extentie en kan niet communiceren met PostgreSQL. Controleer je php.ini-bestand of hercompileer PHP.';
$string['php50restricted'] = 'PHP 5.0.x heeft een heel aantal bekende problemen. Upgrade naar 5.1.x of downgrade naar 4.3.x of 4.4.x';
$string['phpversion'] = 'PHP-versie';
$string['phpversionerror'] = 'PHP-versie moet minstens 4.1.0 zijn'; // ORPHANED
$string['phpversionhelp'] = '<p>Moodle heeft minstens PHP-versie 4.1.0 nodig.</p> <p>De huidige versie op je server is $a</p>
<p>Je moet PHP upgraden of verhuizen naar een host met een nieuwere versie van PHP!</p>';
$string['postgres7'] = 'PostgreSQL (postgres 7)';
$string['previous'] = 'Vorige';
$string['qtyperqpwillberemoved'] = 'Tijdens de upgrade zal het RQP vraagtype verwijderd worden. Je gebruikte deze vraag niet, dus je zult hier geen problemen mee krijgen.';
$string['qtyperqpwillberemovedanyway'] = 'Tijdens de upgrade zal het RQP vraagtype verwijderd worden. Er zijn vragen van dit type in je database. Die zullen stoppen met werken, tenzij je de code herinstalleert van  http://moodle.org/mod/data/view.php?d=13&amp;rid=797 voor je verder gaat met de upgrade.';
$string['remotedownloaderror'] = 'De download van de component naar jouw server is mislukt, controleer je proxy-instellingen, de PHP cURL-extentie wordt ten zeerste aanbevolen te installeren.<br /><br />Je moet je <a href=\"$a->url\">$a->url</a> bestand manueel downloaden , kopiëren naar de map \"$a->dest\" op je server en het daar unzippen.';
$string['remotedownloadnotallowed'] = 'Het downloaden van componenten naar je server is niet toegelaten (allow_url_fopen is uitgeschakeld)<br /><br />Je moet het <a href=\"$a->url\">$a->url</a>bestand manueel downloaden en het kopiëren naar \"$a->dest\" op je server en het daar unzippen.';
$string['report'] = 'Rapport';
$string['restricted'] = 'Beperkt';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Moodle kan bestanden niet juist behandelen met safe mode ingeschakeld';
$string['safemodehelp'] = '<p>Moodle zal heel wat problemen vertonen met safe mode ingeschakeld, waaronder bijvoorbeeld het niet kunnen aanmaken van nieuwe bestanden.</p>
<p>Safe mode is gewoonlijk alleen maar ingeschakeld bij paranoïde webhosts, je zult dus best op zoek gaan naar een nieuwe webhost voor je Moodlesite.</p>
<p>Je kunt proberen verder te gaan met de installatie als je dat wil, maar verwacht je wat verder door aan heel wat problemen.</p>';
$string['serverchecks'] = 'Servercontroles';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'Dit moet uitgeschakeld zijn';
$string['sessionautostarthelp'] = '<p>Moodle heeft session support nodig en zal zonder niet werken.</p>
<p>Sessies kunnen ingeschakeld worden in het php.ini-bestand ... zoek naar de session.auto_start parameter.</p>';
$string['skipdbencodingtest'] = 'Negeer DB-encodingtest';
$string['status'] = 'Status';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = 'Nederlands';
$string['unicoderecommended'] = 'Aanbevolen wordt om al je data als Unicode (UTF-8) te bewaren. Nieuwe installaties zouden moeten geïnstalleerd worden met Unicode als standaard tekenset voor de databank. Als je upgrade, moet je het UTF-8 migratieproces laten lopen (zie pagina Beheer).';
$string['unicoderequired'] = 'Je moet al je data als Unicode (UTF-8) bewaren. Nieuwe installaties moeten geïnstalleerd worden met Unicode als standaard tekenset voor de databank. Als je upgrade, moet je het UTF-8 migratieproces laten lopen (zie pagina Beheer).';
$string['user'] = 'Gebruiker';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Je krijgt deze pagina te zien omdat je met succes het <strong>$a->packname $a->packversion</strong> packet op je computer gezet en gestart hebt. Proficiat!';
$string['welcomep30'] = 'Deze uitgave van <strong>$a->installername</strong> bevat de software die nodig is om een omgeving te creëren waarin <strong>Moodle</strong> zal werken, namelijk:';
$string['welcomep40'] = 'Dit pakket bevat ook <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Het gebruik van alle programma\'s in dit pakket wordt geregeld door hun respectievelijke licenties. Het complete <strong>$a->installername</strong> pakket is
<a href=\"http://www.opensource.org/docs/definition_plain.html\">open source</a> en wordt verdeeld onder de <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> licentie.';
$string['welcomep60'] = 'De volgende pagina\'s leiden je door een aantal makkelijk te volgen stappen om <strong>Moodle</strong> te installeren op je computer. Je kunt de standaardinstellingen overnemen of, optionneel, ze aanpassen aan je noden.';
$string['welcomep70'] = 'Klik op de \"volgende\"-knop om verder te gaan met de installatie van <strong>Moodle</strong>';
$string['wrongdestpath'] = 'Fout pad voor bestemming';
$string['wrongsourcebase'] = 'Foute URL voor de bron';
$string['wrongzipfilename'] = 'Foute ZIP-bestandsnaam';
$string['wwwroot'] = 'Web adres';
$string['wwwrooterror'] = 'Het webadres lijkt niet geldig te zijn - deze Moodle-installatie is blijkbaar niet op die plaats.';
$string['xmlrpcrecommended'] = 'Het installeren van de optionele XMLRPC-extentie is nuttig voor de werking van Moodle Netwerk';
$string['ziprequired'] = 'De ZIP-PHP-extentie is nu vereist voor Moodle. Info-ZIP en PclZip worden niet meer gebruikt.';
?>
