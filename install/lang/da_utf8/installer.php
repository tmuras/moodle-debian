<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in installer_strings (same dir)

$string['admindirerror'] = 'Det angivne adminbibliotek er forkert';
$string['admindirname'] = 'Adminbibliotek';
$string['admindirsettinghead'] = 'Sætter admin-biblioteket...';
$string['admindirsettingsub'] = 'Nogle får webhoteller bruger /admin adresse til kontrolpanelet el.lign. Desværre konflikter dette med standardplaceringen af Moodles administrationssider. Du kan i så tilfælde omdøbe admin-biblioteket i din installation og skrive navnet her. Eksempel:<br /> <br /><b>moodleadmin</b><br /> <br />
Dette vil sikre admin-links i Moodle.';
$string['bypassed'] = 'Forbigået';
$string['cannotcreatelangdir'] = 'Kan ikke oprette sprogmappe';
$string['cannotcreatetempdir'] = 'Kan ikke oprette temp-mappe';
$string['cannotdownloadcomponents'] = 'Kan ikke downloade komponenter';
$string['cannotdownloadzipfile'] = 'Kan ikke downloade zip-fil';
$string['cannotfindcomponent'] = 'Kan ikke finde komponent';
$string['cannotsavemd5file'] = 'Kan ikke gemme md5-fil';
$string['cannotsavezipfile'] = 'Kan ikke gemme zip-fil';
$string['cannotunzipfile'] = 'Kan ikke unzippe filen';
$string['caution'] = 'Pas på';
$string['check'] = 'Kontroller';
$string['chooselanguagehead'] = 'Vælg et sprog';
$string['chooselanguagesub'] = 'Vælg et sprog til brug under installationen. Senere vil du kunne vælge hvilke sprog Moodle skal kunne bruge.';
$string['closewindow'] = 'Luk dette vindue';
$string['compatibilitysettingshead'] = 'Kontrollerer dine PHP-indstillinger...';
$string['compatibilitysettingssub'] = 'For at Moodle kan køre uden problemer skal din server \"bestå\" alle disse test.';
$string['componentisuptodate'] = 'Komponenten er up to date';
$string['configfilenotwritten'] = 'Installationsscriptet var ikke i stand til at oprette config.php-filen, der indeholder de valgte indstillinger, sandsynligvis fordi  Moodlebiblioteket er skrivebeskyttet. Du kan manuelt kopiere den følgende kode ind i en fil med navnet \"config.php\" i roden af Moodle-biblioteket.';
$string['configfilewritten'] = 'config.php er blevet oprettet';
$string['configurationcompletehead'] = 'Konfigurationen er færdig.';
$string['configurationcompletesub'] = 'Moodle har forsøgt at gemme din konfiguration i en fil i roden af Moodle-installationen';
$string['continue'] = 'Fortsæt';
$string['database'] = 'Database';
$string['databasecreationsettingshead'] = 'Nu skal du konfigurere databaseindstillingerne for hvor de fleste Moodle-data skal gemmes. Denne database vil automatisk blive oprettet af installationsprogrammet med indstillingerne herunder.';
$string['databasecreationsettingssub'] = '<b>Type:</b> fikseret til \"mysql\" af installationsprogrammet<br />
<b>Host:</b> fikseret til \"localhost\" af installationsprogrammet<br />
<b>Name:</b> database-navn, f.eks. Moodle<br />
<b>User:</b> fikseret til \"root\" af installationsprogrammet<br />
<b>Password:</b> adgangskoden til din database<br />
<b>Tables Prefix:</b> valgfrit fornavn (prefix) til alle tabelnavne';
$string['databasesettingshead'] = 'Du skal nu konfigurere databasen hvor det meste af Moodle\'s data vil blive gemt. Databaseserveren skal allerede være oprettet og du skal bruge brugernavn og adgangskode til en brugerkonto der har adgang til den.';
$string['databasesettingssub'] = '<b>Type:</b> mysql eller postgres7<br />
<b>Vært:</b> f.eks. localhost eller db.isp.com<br />
<b>Database:</b> database-navn, f.eks. Moodle<br />
<b>Bruger:</b> Brugernavnet til databasen<br />
<b>Password:</b> Password til databasebrugeren<br />
<b>Tabel Præfix:</b> Valgfrit fornavn (prefix) der bliver sat foran alle tabelnavne (kan anbefales hvis der er flere systemer der skal bruge samme database).';
$string['databasesettingssub_mssql'] = '<b>Type:</b> SQL*Server (non UTF-8) <b><font color=\"red\">Experimentiel! (ikke til brug i et produktionsmiljø)</font></b><br />
<b>Vært:</b> f.eks. localhost eller db.isp.com<br />
<b>Navn:</b> databasenavn, f.eks. Moodle<br />
<b>Bruger:</b> brugernavnet til din database<br />
<b>Password:</b> din databases adgangskode<br />
<b>Tabelprefix:</b> prefix for alle tabelnavne (mandatory)';
$string['databasesettingssub_mssql_n'] = '<b>Type:</b> SQL*Server (non UTF-8 aktiveret) <b><font color=\"red\">Experimentiel! (ikke til brug i et produktionsmiljø)</font></b><br />
<b>Vært:</b> f.eks. localhost eller db.isp.com<br />
<b>Navn:</b> databasenavn, f.eks. Moodle<br />
<b>Bruger:</b> brugernavnet til din database<br />
<b>Password:</b> din databases adgangskode<br />
<b>Tabelprefix:</b> prefix for alle tabelnavne (mandatory)';
$string['databasesettingssub_mysql'] = '<b>Type:</b> MySQL<br />
<b>Vært:</b> f.eks. localhost eller db.isp.com<br />
<b>Navn:</b> databasenavn, f.eks. Moodle<br />
<b>Bruger:</b> brugernavnet til din database<br />
<b>Password:</b> din databases adgangskode<br />
<b>Tabelprefix:</b> prefix for alle tabelnavne (mandatory)';
$string['databasesettingssub_oci8po'] = '<b>Type:</b> Oracle<br />
<b>Vært:</b> ikke brugt, skal være blank<br />
<b>Navn:</b> navnet på forbindelsen fra tnsnames.ora <br />
<b>Bruger:</b> dit database brugernavn<br />
<b>Password:</b> brugerens password<br />
<b>Tabel Præfix:</b> præfix til alle tabellerne (nødvendigt,højst 2 karaktere)';
$string['databasesettingssub_odbc_mssql'] = '<b>Type:</b> SQL*Server (over ODBC) <b><font color=\"red\">Eksperimentielt! (ikke beregnet til brug i produktionsmiljø)</font></b><br />
<b>Vært:</b> navnet på DSN forbindelsen i ODBC kontrolpanelet<br />
<b>Navn:</b> databasenavnet , f.eks. moodle<br />
<b>Bruger:</b> dit databasebrugernavn<br />
<b>Password:</b> dit database password<br />
<b>Tabel Præfix:</b> præfix der bruges til alle tabelnavnene (nødvendigt)';
$string['databasesettingssub_postgres7'] = '<b>Type:</b> PostgreSQL<br />
<b>Vært:</b> f.eks. localhost eller db.isp.com<br />
<b>Navn:</b> databasenavn, f.eks. moodle<br />
<b>Bruger:</b> dit databasebrugernavn<br />
<b>Password:</b> dit database password<br />
<b>Tables Præfix:</b> præfix der bruges foran alle tabelnavnene (nødvendigt)';
$string['dataroot'] = 'Databibliotek';
$string['datarooterror'] = 'Data-biblioteket du specificerede kan ikke findes eller oprettes. Ret stien til biblioteket eller opret det manuelt.';
$string['dbconnectionerror'] = 'Den angive database kunne ikke kontaktes. Kontroller eller ret venligst databaseinformationerne.';
$string['dbcreationerror'] = 'Fejl ved oprettelse af databasen. Kan ikke oprette den givne database med de angivne indstillinger.';
$string['dbhost'] = 'Værtsserver';
$string['dbprefix'] = 'Præfix for tabeller';
$string['dbtype'] = 'Type';
$string['dbwrongencoding'] = 'Den valgte database kører under en ikke anbefalet encoding ($a). Det vil være bedre at benytte en Unicode (UTF-8) encoded database i stedet. 
Du kan alligevel springe denne test over ved at vælge \"Skip DB Encoding Test\" tjek herunder, men det kan give problemer fremover.';
$string['dbwronghostserver'] = 'Du skal følge \"Værtsreglerne\" som forklaret ovenfor.';
$string['dbwrongnlslang'] = 'Environment variablen NLS_LANG  på din webserver skal bruge AL32UTF8 tegnsættet. Se PHP documentationen for hvordan man konfigurere OCI8 korrekt.';
$string['dbwrongprefix'] = 'Du skal følge Tabel-prefix-reglerne som forklaret ovenfor.';
$string['directorysettingshead'] = 'Bekræft hvor Moodle skal installeres';
$string['directorysettingssub'] = '<b>Web-adresse:</b>
Angiv den fulde adresse til Moodle. Hvis der skal være adgang til siden fra flere URL\'er så vælg den naturligste, den deltagerne vil bruge. Adressen må ikke slutte med en skråstreg (slash).
<br />
<br />
<b>Moodle-bibliotek:</b>
Angiv den fulde sti til installationen. Vær påpasselig med små og store bogstaver, adressen er casesensitiv.
<br />
<br />
<b>Data-bibliotek:</b>
Det sted, hvor Moodle placerer uploadede filer. Dette bibliotek skal være læse- OG SKRIVBART for web-server-brugeren (typisk \'nobody\' eller \'apache\'), men der må ikke være direkte adgang fra internettet.';
$string['dirroot'] = 'Moodle-bibliotek';
$string['dirrooterror'] = 'Det angivne Moodle-bibliotek lader ikke til at være rigtigt - der kan ikke findes en Moodle-installation. Den nedenstående værdi er blevet fjernet.';
$string['download'] = 'Download';
$string['downloadedfilecheckfailed'] = '\"Downloadet fil-tjek fejlede';
$string['downloadlanguagebutton'] = 'Download \"$a\"-sprogpakken';
$string['downloadlanguagehead'] = 'Download sprogpakke';
$string['downloadlanguagenotneeded'] = 'Du kan fortsætte installationen med standard-sprogpakken,\"$a\".';
$string['downloadlanguagesub'] = 'Du har nu mulighed for at downloade en sprogpakke og fortsætte installationsprocessen i dette sprog.<br /><br />
Kan du ikke downloade sprogpakken vil installationen fortsætte på engelsk.
(Når installationsprocessen er færdig kan du downloade og installere flere sprogpakker.)';
$string['environmenterrortodo'] = 'Du bliver nødt til at løse de ovenstående problemer (fejl) der er ved serveropsætningen før du kan installere denne version af Moodle';
$string['environmenthead'] = 'Kontrollere din serveropsætning...';
$string['environmentrecommendinstall'] = 'det anbefales installeret/aktiveret';
$string['environmentrecommendversion'] = 'version $a->needed er anbefalet og du kører $a->current';
$string['environmentrequireinstall'] = 'det er nødvendigt at installere/aktivere';
$string['environmentrequireversion'] = 'version $a->needed er nødvendigt og du kører $a->current';
$string['environmentsub'] = 'Vi tjekker om de forskellige komponenter i dit system lever op til de Moodles krav.';
$string['environmentxmlerror'] = 'Fejl ved læsning af serveropsætningens data ($a->error_code)';
$string['error'] = 'Fejl';
$string['fail'] = 'Mislykkedes';
$string['fileuploads'] = 'Fil uploads';
$string['fileuploadserror'] = 'Denne skulle være aktiveret';
$string['gdversion'] = 'GD version';
$string['gdversionerror'] = 'GD library skal være tilgængelig for PHP for at der billeder kan manipuleres og oprettes.';
$string['gdversionhelp'] = '<p>Det lader til at din server ikke har GD installeret.</p>

<p>GD er et bibliotek som PHP bruger til at behandle billeder (såsom brugerprofil-billeder) og til at oprette nye billeder såsom loggrafer. Moodle kan stadig fungere uden GD - men disse funktioner vil så ikke være til rådighed.</p>

<p>For at tilføje GD på unix skal PHP kompileres med \'--with-gd\" parameteret.</p>

<p>Under windows er det normalt nok at udkommentere den linje i php.ini der refererer til libgd.dll </p>';
$string['globalsquotes'] = 'Usikker håndtering af Globale variabler';
$string['globalsquoteserror'] = 'Fix dine PHP-indstillinger: aktiver register_globals and/or slå magic_quotes_gpc til';
$string['help'] = 'Hjælp';
$string['iconvrecommended'] = 'Det anbefales at installere/aktivere ICONV udvidelsen for at forbedre sitets hastighed, især hvis dit site understøtter sprog med ikke-latinske tegn.';
$string['info'] = 'Information';
$string['installation'] = 'Installation';
$string['invalidmd5'] = 'Ugyldig md5';
$string['langdownloaderror'] = 'Sproget \"$a\" blev desværre ikke installeret. Installationen vil fortsætte på engelsk.';
$string['langdownloadok'] = 'Sproget \"$a\" blev installeret. Installationen vil fortsætte på dette sprog.';
$string['language'] = 'Sprog';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Denne skulle være deaktiveret';
$string['mbstringrecommended'] = 'Det anbefales at installere/aktivere MBSTRING udvidelsen for at forbedre sitets ydeevne, især hvis sitet understøtter ikke-latinske sprog og tegn.';
$string['memorylimit'] = 'Hukommelsesbegrænsning';
$string['memorylimiterror'] = 'Den tilgængelige hukommelse til PHP er ret lav... Det kan være at der opstår problemer senere.';
$string['memorylimithelp'] = '<p>Mængden af hukommelse som PHP kan bruge er sat til $a.</p>

<p>Dette kan forårsage at der opstår problemer senere, især hvis du har mange moduler installeret eller mange brugere.</p>

<p>Vi anbefaler at du konfigurerer PHP til at kunne bruge mere hukommelse, f.eks. 40Mb. 
Der er flere måder hvorpå du kan rette det.</p>
<ol>
<li>Hvis du har mulighed for det kan du rekompilere PHP med <i>--enable-memory-limit</i>. 
Dette vil tillade at Moodle selv kan definere hvor meget hukommelse der er brug for.</li>
<li>Hvis du har adgang til php.ini filen kan du ændre <b>memory_limit</b>-
indstillingen så der er minimum 40Mb til rådighed. Hvis du ikke har direkte adgang til den kan du spørge systemadministratoren om han han vil gøre det for dig.</li>
<li>På nogle servere kan du oprette en \'.htaccess\' fil, gemme den i Moodle-biblioteket med linjen <p><blockquote>php_value memory_limit 40M</blockquote></p>
<p>Det kan dog på nogle servere forårsage en fejl på <b>alle</b> PHP-siderne. I så fald kan du blive nødt til at fjerne \'.htaccess\' filen igen.</p></li>
</ol>';
$string['missingrequiredfield'] = 'Der mangler nogle obligatoriske felter';
$string['moodledocslink'] = 'Moodle Doks for denne side';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server med UTF-8 support (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP er ikke konfigureret ordentligt med MSSQL-extensionen så den kan kommunikere med SQL*Serveren. Vær venlig at tjekke din php.ini-fil eller genkompiler PHP.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = 'Hvis sitet kun benytter iso-8859-1 (latin-1) sprog/tegnsæt, kan du fortsætte med at benytte den nuværende version 4.1.12 af MySQL (eller nyere)';
$string['mysql416required'] = 'Moodle 1.6 skal som minimum bruge MySql version 4.1.16 for at garantere at data kan konverteres til UTF-8 fremover.';
$string['mysqlextensionisnotpresentinphp'] = 'PHP er ikke blevet ordentligt konfigureret med MySQL  udvidelsen så den kan kommunikere med MySQL. Det kan skyldes at MySQL extension/dll ikke er loadet. Kontroller venlist phpinfo() og php.ini filen eller rekompiler PHP.';
$string['name'] = 'Navn';
$string['next'] = 'Næste';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP er ikke konfigureret ordentligt med OCI8-extensionen så den kan kommunikere med Oracle. Vær venlig at tjekke din php.ini-fil eller genkompiler PHP.';
$string['odbc_mssql'] = 'SQL*Server over ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP er ikke blevet korrekt konfigureret med PHP\'s ODBC modul så den kan kommunikere med SQL*Serveren. Kontroller venligst php.ini filen eller rekompiler PHP.';
$string['ok'] = 'OK';
$string['pass'] = 'OK';
$string['password'] = 'Adgangskode';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP er ikke blevet korrekt konfigureret med PHP\'s PGSQL modul så den kan kommunikere med PostgreSQL. Kontroller venligst php.ini filen eller rekompiler PHP.';
$string['php50restricted'] = 'PHP 5.0.x har nogle kendte fejl og problemer. Opgrader venligst til 5.1.x eller nedgradér til 4.3.x eller 4.4.x';
$string['phpversion'] = 'PHP version';
$string['phpversionerror'] = 'PHP versionen skal være nyere end 4.1.0';
$string['phpversionhelp'] = '<p>Moodle kræver en PHP version der er nyere end 4.1.0.</p>
<p>Webserveren bruger i øjeblikket version $a</p>
<p>Du bliver nødt til at opdatere PHP eller flytte systemet over på en anden webserver der har en nyere version af PHP!</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['previous'] = 'Forrige';
$string['remotedownloadnotallowed'] = 'Download af komponenter til din server er ikke tilladt (\"allow_url_fopen\" er deaktiveret).<br /><br />Du må downloade 
<a href=\"$a->url\">$a->url</a>-filen manuelt, kopiere den til \"$a->dest\" til din server og unzippe den der.';
$string['report'] = 'Rapport';
$string['restricted'] = 'Afvist';
$string['safemode'] = 'Safe mode';
$string['safemodeerror'] = 'Moodle kan have problemer med \"Safe mode : on\"';
$string['sessionautostart'] = 'Session autostart';
$string['sessionautostarterror'] = 'Denne skulle være deaktiveret';
$string['skipdbencodingtest'] = 'Spring DB tegnsæts testen over';
$string['status'] = 'Status';
$string['thischarset'] = 'UTF-8';
$string['thislanguage'] = 'Dansk';
$string['unicoderecommended'] = 'Alle data skal helst gemmes i Unicode (UTF-8). Nye installationer skal helst installeres i databaser der har UTF-8 som standard karaktersæt. Hvis du opgradere fra en tidligere installation bør du migrere eksisterende data til UTF-8 (se Admin siderne)';
$string['unicoderequired'] = 'Alle data skal gemmes i Unicode (UTF-8). Nye installationer skal helst installeres i databaser der har UTF-8 som standard karaktersæt. Hvis du opgradere fra en tidligere installation bør du migrere eksisterende data til UTF-8 (se Admin siderne)';
$string['user'] = 'Bruger';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Du ser denne side fordi du med succes har installeret og åbnet pakken <strong>$a->packname $a->packversion</strong> på din computer.
Tillykke med det!';
$string['welcomep30'] = 'Denne udgave af <strong>$a->installername</strong> inkluderer programmerne til at oprette et miljø hvori <strong>Moodle</strong> vil operaere, nemlig:';
$string['welcomep40'] = 'Pakken indeholder også <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Brugen af programmerne i denne pakke er styret af deres respektive licenser. Hele <strong>$a->installername</strong>-pakken er <a href=\"http://www.opensource.org/docs/definition_plain.html\">open source</a> og distribueret under <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>-licensen.';
$string['welcomep60'] = 'De følgende sider vil hjælpe dig gennem nogle nemme trin til konfiguration og opsætning af <strong>Moodle</strong> på din computer. Du kan acceptere standardindstillingerne eller vælge at ændre dem så de bedre svarer til dine egne behov.';
$string['welcomep70'] = 'Klik på \"Næste\" herunder for at forsætte opsætningen af <strong>Moodle</strong>.';
$string['wrongdestpath'] = 'Forkert  destinations sti';
$string['wrongsourcebase'] = 'Forkert kilde URL';
$string['wrongzipfilename'] = 'Forkert zip-filnavn.';
$string['wwwroot'] = 'Web-adresse';
$string['wwwrooterror'] = 'Webadressen lader ikke til at være korrekt - Moodle-installationen kunne ikke findes der.';
?>
