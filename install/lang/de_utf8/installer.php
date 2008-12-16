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

$string['admindirerror'] = 'Das angegebene Admin-Verzeichnis ist falsch.';
$string['admindirname'] = 'Name für das Admin-Verzeichnis';
$string['admindirsettinghead'] = 'Admin-Verzeichnis festlegen ...';
$string['admindirsettingsub'] = 'Einige wenige Webhosting-Anbieter benutzen /admin als spezielles Verzeichnis für den Zugang zum Administrationstool oder andere Dinge. Leider kommt es dadurch zu Konflikten mit dem Standard für das Administrationsverzeichnis von Moodle. Sie können dies ändern, indem Sie das Verzeichnis /admin in der Moodle-Installation umbenennen. Den geänderten Namen dieses Verzeichnisses müssen Sie hier eingeben.
z.B.: <br /> <br /><b>moodleadmin</b><br /> 
Dies ändert die Links für das Admin-Verzeichnis in Moodle.';
$string['bypassed'] = 'Unberücksichtigt';
$string['cannotcreatelangdir'] = 'Das Verzeichnis \"lang\" kann nicht angelegt werden.';
$string['cannotcreatetempdir'] = 'Das Verzeichnis \"temp\" kann nicht angelegt werden.';
$string['cannotdownloadcomponents'] = 'Einige Komponenten können nicht heruntergeladen werden.';
$string['cannotdownloadzipfile'] = 'ZIP-Datei kann nicht heruntergeladen werden.';
$string['cannotfindcomponent'] = 'Eine Komponente kann nicht gefunden werden';
$string['cannotsavemd5file'] = 'Die md5-Datei kann nicht gespeichert werden.';
$string['cannotsavezipfile'] = 'Die ZIP-Datei kann nicht gespeichert werden.';
$string['cannotunzipfile'] = 'Die Datei kann nicht entpackt werden.';
$string['caution'] = 'Warnung';
$string['check'] = 'Prüfen';
$string['chooselanguagehead'] = 'Sprache wählen';
$string['chooselanguagesub'] = 'Wählen Sie eine Sprache, die Sie während der Installation verwenden wollen. Nach der Installation können Sie die Sprache für die Oberfläche und die Nutzer/innen festlegen.';
$string['closewindow'] = 'Dieses Fenster schließen';
$string['compatibilitysettingshead'] = 'Prüfung Ihrer PHP-Einstellungen ...';
$string['compatibilitysettingssub'] = 'Alle Tests sollten vom Server bestätigt werden, damit Moodle später reibungslos laufen kann.';
$string['componentisuptodate'] = 'Die Komponente ist aktuell.';
$string['configfilenotwritten'] = 'Das Installationsscript kann die Datei config.php, welche die gewählten Einstellungen enthält, nicht automatisch erstellen. Der web-user hat keine Schreibrechte für das Moodle-Verzeichnis. Sie können den folgenden Code manuell in der Datei config.php speichern und diese dann ins Hauptverzeichnis Ihrer Moodle-Installation kopieren.';
$string['configfilewritten'] = 'Die Datei config.php wurde erfolgreich erstellt';
$string['configurationcompletehead'] = 'Konfiguration ist abgeschlossen';
$string['configurationcompletesub'] = 'Moodle speichert Ihre Konfigurationseinstellungen nun im Hauptverzeichnis Ihrer Moodle-Installation.';
$string['continue'] = 'Weiter';
$string['ctyperecommended'] = 'Die Installation der optionalen Bibliothek ctype wird empfohlen, um die Geschwindigkeit der Website zu steigern. Dies ist besonders wichtig, wenn Sie Sprachen mit anderen als lateinischen Zeichensätzen verwenden.';
$string['ctyperequired'] = 'Die PHP-Erweiterung ctype wird von Moodle benötigt, um die Geschwindigkeit der Website zu steigern und die Mehrsprachkompatibilität zu ermöglichen.';
$string['curlrecommended'] = 'Die Installation der optionalen Bibliothek cURL wird empfohlen, um die Netzwerk-Funktionalität von Moodle einzuschalten.';
$string['curlrequired'] = 'Die PHP-Erweiterung cURL wird von Moodle benötigt, um mit den Moodle Repositories zu kommunizieren';
$string['customcheck'] = 'Weitere Überprüfungen';
$string['database'] = 'Datenbank';
$string['databasecreationsettingshead'] = 'Sie müssen Einstellungen für die Datenbank konfigurieren, in der die meisten Moodle-Daten abgelegt werden. Der Installationsprozess erstellt die Datenbanktabellen automatisch auf der Grundlage der Einstellungen.';
$string['databasecreationsettingssub'] = '<b>Typ:</b> \"mysql\" vom Installer festgelegt<br />
<b>Host:</b> \"localhost\" vom Installer festgelegt<br />
<b>Name:</b> Datenbankname, z.B. moodle<br />
<b>User:</b> \"root\" vom Installer festgelegt<br />
<b>Password:</b> Ihr Datenbankpasswort<br />
<b>Tables Prefix:</b> optionaler Prefix für alle Tabellennamen';
$string['databasesettingshead'] = 'Sie müssen nun die Einstellungen für die Datenbank konfigurieren, in der die meisten Moodle-Daten abgelegt werden. Diese Datenbank muss bereits vorher angelegt und mit Nutzernamen und Passwort versehen worden sein, um auf sie zugreifen zu können.';
$string['databasesettingssub'] = '<b>Typ:</b> mysql oder postgres7<br />
<b>Host:</b> z.B. localhost oder db.isp.com<br />
<b>Name:</b> Datenbankname, z.B. moodle<br />
<b>User:</b> Ihr Anmeldename für die Datenbank<br />
<b>Password:</b> Ihr Passwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> optionaler Prefix für alle Tabellen';
$string['databasesettingssub_mssql'] = '<b>Typ:</b> SQL*Server (ohne UTF-8)<b><strong class=\"errormsg\">Experimentell! (nicht für Produktivumgebungen)</strong></b><br /><br />
<b>Host:</b> z.B. localhost oder db.isp.com<br />
<b>Name:</b> Datenbankname, z.B. moodle<br />
<b>User:</b> Ihr Anmeldename für die Datenbank<br />
<b>Password:</b> Ihr Passwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig)';
$string['databasesettingssub_mssql_n'] = '<b>Typ:</b> SQL*Server (mit UTF-8)<br />
<b>Host:</b> z.B. localhost oder db.isp.com<br />
<b>Name:</b> Datenbankname, z.B. moodle<br />
<b>User:</b> Ihr Anmeldename für die Datenbank<br />
<b>Password:</b> Ihr Passwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig)';
$string['databasesettingssub_mysql'] = '<b>Typ:</b> MySQL<br />
<b>Host:</b> z.B. localhost oder db.isp.com<br />
<b>Name:</b> Datenbankname, z.B. moodle<br />
<b>User:</b> Ihr Anmeldename für die Datenbank<br />
<b>Password:</b> Ihr Passwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (optional)';
$string['databasesettingssub_mysqli'] = '<b>Typ:</b> Improved MySQL<br />
<b>Host:</b> z.B. localhost oder db.domain.com<br />
<b>Name:</b> Datenbank-Name, z.B moodle<br />
<b>User:</b> Ihr Datenbank-Anmeldename<br />
<b>Passwort:</b> Ihr Datenbank-Passwort<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (optional)';
$string['databasesettingssub_oci8po'] = '<b>Typ:</b> Oracle<br />
<b>Host:</b> unbenutzt - muss leer bleiben!<br />
<b>Name:</b> vorgegebener Verbindungname zu tnsnames.ora<br />
<b>User:</b> Ihr Anmeldename für die Datenbank<br />
<b>Password:</b> Ihr Passwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig, 2cc. max)';
$string['databasesettingssub_odbc_mssql'] = '<b>Typ:</b> SQL*Server (over ODBC) <b><font color=\"red\">Experimentell! (nicht für den produktiven Einsatz)</font></b><br />
<b>Host:</b> vorgegebener DSN-Name im ODBC-Kontrolldialog<br />
<b>Name:</b> Datenbankname, z.B. moodle<br />
<b>User:</b> Ihr Anmeldename für die Datenbank<br />
<b>Password:</b> Ihr Passwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig)';
$string['databasesettingssub_postgres7'] = '<b>Typ:</b> PostgreSQL<br />
<b>Host:</b> z.B. localhost oder db.isp.com<br />
<b>Name:</b> Datenbankname, z.B. moodle<br />
<b>User:</b> Ihr Anmeldename für die Datenbank<br />
<b>Password:</b> Ihr Passwort für die Datenbank<br />
<b>Tabellen-Prefix:</b> Prefix für alle Tabellen (notwendig)';
$string['databasesettingswillbecreated'] = '<b>Hinweis: </b> Das Installationsprogramm wird versuchen, automatisch eine Datenbank anzulegen, sofern diese noch nicht besteht.';
$string['dataroot'] = 'Daten-Verzeichnis';
$string['datarooterror'] = 'Das angegebene Datenverzeichnis ist nicht vorhanden und kann nicht angelegt werden. Korrigieren Sie die Pfad-Eingabe oder legen Sie das Verzeichnis manuell an.';
$string['datarootpublicerror'] = 'Das von Ihnen angegebene Verzeichnis dataroot ist direkt aus dem Internet zugänglich. Sie müssen das Verzeichnis ändern!';
$string['dbconnectionerror'] = 'Eine Verbindung zur angegebenen Datenbank konnte nicht hergestellt werden. Bitte überprüfen Sie Ihre Eingaben.';
$string['dbcreationerror'] = 'Fehler beim Anlegen der Datenbank. Die Datenbank konnte mit diesen Einstellungen nicht erstellt werden.';
$string['dbhost'] = 'Server';
$string['dbprefix'] = 'Tabellen-Prefix';
$string['dbtype'] = 'Typ';
$string['dbwrongencoding'] = 'Die ausgewählte Datenbank läuft unter einem nicht empfohlenen Zeichensatz. Es wäre besser, wenn Sie eine Unicode (UTF-8) basierte Datenbank verwenden würden. Sie haben die Möglichkeit diesen Schritt zu überspringen. Vermutlch wird dies später bei der Nutzung aber zu Problemen führen.
Die ausgewählte Datenbank läuft unter einem nicht empfohlenen Zeichensatz. Es wäre besser, wenn Sie eine Unicode (UTF-8) basierte Datenbank verwenden würden. Sie haben die Möglichkeit diesen Schritt zu überspringen. Vermutlich wird dies später bei der Nutzung aber zu Problemen führen.';
$string['dbwronghostserver'] = 'Sie müssen den oben genannten \"Server\"-Regeln folgen.';
$string['dbwrongnlslang'] = 'Die Umgebungsvariable NLS_LANG Ihres Webservers muss den Zeichensatz AL32UTF8 benutzen. Lesen Sie in der PHP-Dokumentation nach, wie Sie OCI8 richtig einstellen.';
$string['dbwrongprefix'] = 'Sie müssen den oben genannten \"Tabellen-Prefix\"- Regeln folgen.';
$string['directorysettingshead'] = 'Bestätigen Sie bitte die Verzeichniseinträge für Ihre Moodle-Installation';
$string['directorysettingssub'] = '<p><b>URL-Adresse:</b>
Geben Sie hier die vollständige URL für Ihre Moodle-Installation an. Sollte Ihre Seite über mehrere Adressen erreichbar sein, geben Sie die Adresse an, die am häufigsten genutzt wird. Bitte geben Sie am Ende kein Slash ein.</p>

<p><b>Moodle-Verzeichnis:</b>
Geben Sie den absoluten Pfad für Ihre Moodle-Installation an. Bitte prüfen Sie, ob die Groß- und Kleinschreibung korrekt ist.</p>

<p><b>Datenverzeichnis:</b>
Moodle benötigt ein Verzeichnis, indem hochgeladene Dateien abgelegt werden. Dieses Verzeichnis muss Lese- und Schreibrechte für den 
web-user des Servers haben. (üblicherweise \'nobody\' or \'apache\'), aber es sollte nicht direkt über das Internet erreichbar sein.</p>';
$string['dirroot'] = 'Moodle-Verzeichnis';
$string['dirrooterror'] = 'Die Einstellungen für das Moodle-Verzeichnis sind nicht korrekt.  Es wurde keine Moodle-Installation gefunden. Die anderen Werte wurden gelöscht.';
$string['download'] = 'Herunterladen';
$string['downloadedfilecheckfailed'] = 'Die Überprüfung der heruntergeladenen Datei ist gescheitert';
$string['downloadlanguagebutton'] = 'Download des Sprachpakets: $a';
$string['downloadlanguagehead'] = 'Download der Sprachpakete';
$string['downloadlanguagenotneeded'] = 'Sie können die Installation mit dem Sprachpaket \"$a\" fortsetzen.';
$string['downloadlanguagesub'] = 'Sie haben nun die Möglichkeit, ein Sprachpaket herunterzuladen und den Installationsprozess mit dieser Sprache fortzusetzen. <br /><br /> Falls sie keinen Download durchführen können, wird die Installation auf Englisch fortgeführt. (Wenn die Installation abgeschlossen ist, haben Sie die Option weitere Sprachpakete herunterzuladen.)';
$string['environmenterrortodo'] = 'Sie müssen zunächst alle Probleme mit der Server-Konfiguration beheben, bevor Sie mit der Installation dieser Moodle-Version fortfahren können.';
$string['environmenthead'] = 'Prüfung der Installationsvoraussetzungen';
$string['environmentrecommendcustomcheck'] = 'Wenn dieser Test fehlschlägt, dann ist ein  mögliches Problem vorhanden.';
$string['environmentrecommendinstall'] = 'sollte installiert und aktiviert sein.';
$string['environmentrecommendversion'] = 'Version $a->needed wird empfohlen - aktuell ist $a->current installiert.';
$string['environmentrequirecustomcheck'] = 'Dieser Test muss erfolgreich verlaufen.';
$string['environmentrequireinstall'] = 'muss installiert und aktiviert sein.';
$string['environmentrequireversion'] = 'Version $a->needed ist erforderlich - aktuell ist $a->current installiert.';
$string['environmentsub'] = 'Es wird geprüft, ob die verschiedenen Komponenten Ihres Systems die Installationsanforderungen erfüllen.';
$string['environmentxmlerror'] = 'Fehler beim Auslesen der Server-Konfiguration ($a->error_code)';
$string['error'] = 'Fehler';
$string['fail'] = 'Fehlgeschlagen';
$string['fileuploads'] = 'Dateien hochladen';
$string['fileuploadserror'] = 'Dies sollte eingeschaltet sein';
$string['fileuploadshelp'] = '<p>Dateien hochladen ist auf diesem Server abgestellt.</p> <p>Moodle kann installiert werden. Es ist aber nicht möglich, Dateien für Kurse oder Bilder in den Profilen hochzuladen.</p> <p>Um das Hochladen von Dateien zu ermöglichen, müssen Sie oder der Administrator des Servers die Datei php.ini anpassen und die Einstellungen für<b>file_uploads</b> ändern auf \'1\'.</p>';
$string['gdversion'] = 'GD-Version';
$string['gdversionerror'] = 'Die GD-Bibliothek sollte verfügbar sein, um Bilder zu erzeugen und anzuzeigen.';
$string['gdversionhelp'] = '<p>Auf Ihrem Server ist vermutlich GD nicht installiert. </p>
<p>GD ist eine Bibliothek, die von PHP benötigt wird, um damit Bilder von Moodle angezeigt werden können, z.B. Nutzer-Bilder oder grafische Darstellungen der Log-Daten. Moodle arbeitet auch ohne GD. Die o.g. Funktionen stehen Ihnen dann jedoch nicht zur Verfügung.</p>
<p> Wenn Sie GD unter UNIX zu PHP hinzufügen wollen, kompilieren Sie PHP unter Verwendung des Parameters   with-gd </p>
<p>Unter Windows können Sie die Datei php.ini bearbeiten und die Zeile libgd.dll auskommentieren.</p>';
$string['globalsquotes'] = 'Unsichere Einstellung von Globalparametern';
$string['globalsquoteserror'] = 'Prüfen Sie die PHP-Einstellungen: deaktivieren Sie register_globals und/oder aktivieren Sie magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Die Kombination von deaktivierten Magic Quotes GPC und aktivierten Register Globals zur gleichen Zeit sind nicht empfehlenswert.</p>

<p>Die empfohlene Einstellung ist <b>magic_quotes_gpc = On</b> und <b>register_globals = Off</b> in Ihrer php.ini-Datei</p>

<p>Wenn Sie keinen Zugriff auf die Datei php.ini haben, können Sie die folgende Zeile in der Datei .htaccess im Moodle Verzeichnis einfügen:
<blockquote><div>php_value magic_quotes_gpc On</div></blockquote>
<blockquote><div>php_value register_globals Off</div></blockquote>
</p>';
$string['globalswarning'] = '<p><strong>Sicherheitshinweis</strong>: Um ordnungsgemäß funktionieren zu können, benötigt <br />Moodle mehrere Änderungen in Ihren aktuellen PHP-Einstellungen.<p/> <p>Sie <em>müssen</em> den Parameter <code>register_globals=off</code> setzen.<p>Diese Einstellung können Sie vornehmen, in dem Sie die Datei <code>php.ini</code>, die Apache/IIS <br />Konfiguration oder die Datei <code>.htaccess</code> bearbeiten.</p>';
$string['help'] = 'Hilfe';
$string['iconvrecommended'] = 'Die Installation der ICONV Bibliothek wird zur Leistungsverbesserung dringend empfohlen. Dies ist besonders wichtig, wenn Sie Sprachen mit anderen als lateinischen Zeichensätzen verwenden.';
$string['info'] = 'Informationen';
$string['installation'] = 'Installation';
$string['invalidmd5'] = 'md5 ungültig';
$string['langdownloaderror'] = 'Leider konnte die Sprache \"$a\" nicht installiert werden. Die Installation wird auf Englisch fortgesetzt.';
$string['langdownloadok'] = 'Die Installation der Sprache \"$a\" war erfolgreich. Der weitere Installationsprozess erfolgt nun in dieser Sprache.';
$string['language'] = 'Sprache';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'Dies sollte ausgeschaltet sein (\'off\')';
$string['magicquotesruntimehelp'] = '<p>Magic Quotes Runtime sollte abgeschaltet \'off\' sein, damit Moodle richtig läuft.  </p>
<p>Normalerweise ist dies der Fall. Prüfen Sie die Einstellung <b>magic_quotes_runtime</b> in der Datei php.ini. </p>
<p>Wenn Sie keinen Zugriff zur Datei php.ini haben sollten Sie die folgende Zeile in eine Datei .htacess in Ihrem Moodle-Verzeichnis einfügen: <blockquote><div>php_value magic_quotes_runtime Off</div></blockquote></p>';
$string['mbstringrecommended'] = 'Die Installation der Bibliothek MBSTRING wird zur Leistungsverbesserung dringend empfohlen. Dies ist besonders wichtig, wenn Sie Sprachen mit anderen als lateinischen Zeichensätzen verwenden.';
$string['memorylimit'] = 'Memory Limit';
$string['memorylimiterror'] = 'Die PHP-Speichereinstellung memory_limit ist zu niedrig. Dies könnte später zu Problemen führen.';
$string['memorylimithelp'] = '<p>Die PHP-Einstellung memory_limit für Ihren Server ist zur Zeit auf $a eingestellt. </p>
<p>Dies wird vermutlich zu Problemen führen, wenn Sie Moodle mit vielen Aktivitäten oder vielen Nutzer/innen verwenden. </p>
<p>Wir empfehlen die Einstellung zu erhöhen. Empfohlen werden 40M oder mehr. Dies können Sie auf verschiedene Arten machen:</p>
<ol>
<li>Wenn Sie PHP neu kompilieren können, nehmen Sie die Einstellung <i>--enable-memory-limit</i>. Dann kann Moodle die Einstellung selber vornehmen.
<li>Wenn Sie Zugriff auf die Datei php.ini haben, können Sie die Einstellung <b>memory_limit</b> selber auf z.B. 40M anpassen. Wenn Sie selber keinen Zugriff haben, fragen Sie den Server-Admin, dies für Sie zu tun.
<li>Auf einigen PHP-Servern können Sie eine .htaccess-Datei im Moodle-Verzeichnis einrichten. Tragen Sie darin die folgende Zeile ein: <p><blockquote><div>php_value memory_limit 40M</div></blockquote></p>
<p>Achtung: auf einigen Servern hindert diese Einstellung <b>alle</b> PHP-Seiten und Sie erhalten Fehlermeldungen. Entfernen Sie dann den Eintrag in der .htaccess-Datei wieder.</p></li>
</ol>';
$string['missingrequiredfield'] = 'Einige erforderliche Felder sind nicht ausgefüllt.';
$string['moodledocslink'] = 'Moodle-Dokumentation für diese Seite';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server mit UTF-8-Unterstützung (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die MSSQL-Erweiterung mit SQL*Server zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = 'Wenn Sie in Ihrer Website ausschließlich ISO-8859-1 (lateinische) Sprachen verwenden, können Sie eine MySQL-Version ab 4.1.12 (oder höher) verwenden.';
$string['mysql416required'] = 'MySQL 4.1.16 (oder höher) ist für Moodle 1.6 unbedingt erforderlich, um eine Datenkonvertierung nach UTF-8 sicherzustellen.';
$string['mysqlextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die MySQL-Erweiterung mit MySQL zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['mysqli'] = 'Improved MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP wurde nicht ordnungsgemäß für die MySQLi-Erweiterung konfiguriert, um mit MySQL zu kommunizieren. Bitte überprüfen Sie die Datei php.ini oder übersetzen Sie PHP neu. Die MySQLi-Erweiterung ist nicht für PHP4 verfügbar.';
$string['name'] = 'Name';
$string['next'] = 'Nächste';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die OCI8-Erweiterung mit Oracle zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['odbc_mssql'] = 'SQL*Server über ODBC (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die ODBC-Erweiterung mit SQL*Server zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['ok'] = 'OK';
$string['opensslrecommended'] = 'Die optionale Installation der OpenSSL Bibliothek wird dringend empfohlen. Dadurch wird die Moodle-Netzwerk-Funktionalität ermöglicht.';
$string['parentlanguage'] = 'en_utf8';
$string['pass'] = 'Durchgang';
$string['password'] = 'Kennwort';
$string['pgsqlextensionisnotpresentinphp'] = 'PHP wurde nicht richtig konfiguriert, um über die PGSQL-Erweiterung mit PostgreSQL zu kommunizieren. Bitte prüfen Sie die Datei php.ini oder kompilieren Sie PHP neu.';
$string['php50restricted'] = 'PHP 5.0.x hat eine Reihe bekannter Fehler! Sie sollten die Versionen 5.1.x bzw. 4.3.x/4.4.x benutzen.';
$string['phpversion'] = 'PHP-Version';
$string['phpversionerror'] = 'PHP muss mindestens in der Version 4.3.0 oder 5.1.0 installiert sein (5.0.x weist eine Reihe bekannter Fehler auf).'; // ORPHANED
$string['phpversionhelp'] = '<p>Moodle erwartet PHP mindestens in der Version 4.3.0/4.4.0 oder 5.1.0 (5.0.x weist eine Reihe bekannter Fehler auf).</p>
<p>Sie nutzen zur Zeit die Version $a.</p>
<p>Sie müssen Ihre PHP-Verson aktualisieren oder auf einen Rechner wechseln, der eine neuere Version von PHP nutzt.<br />
(Im Falle von 5.0.x könnten Sie auch zu einer Version 4.3.x/4.4.x downgraden)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['previous'] = 'Frühere';
$string['qtyperqpwillberemoved'] = 'Während des Updates wird der Fragentyp RQP entfernt. Da Sie diesen Fragentyp nicht benutzen, sollten Sie keinerlei Probleme bekommen.';
$string['qtyperqpwillberemovedanyway'] = 'Während des Updates wird der Fragentyp RQP entfernt. Sie haben einige RQP Fragen in Ihrer Datenbank, die nicht mehr funktionieren werden, falls Sie nicht den dafür notwendigen Code vor der Fortsetzung dieses Updates installieren. http://moodle.org/mod/data/view.php?d=13&amp;rid=797';
$string['remotedownloaderror'] = 'Der Download auf Ihren Server konnte nicht ausgeführt werden. Prüfen Sie bitte die Proxy-Einstellungen, die PHP CURL Erweiterung wird dringend empfohlen.<br /><br />Die Datei <a href=\"$a->url\">$a->url</a> muss nun manuell herunter geladen, entpackt und auf den Server nach \"$a->dest\" kopiert werden. there.';
$string['remotedownloadnotallowed'] = 'Der Download von Komponenten auf Ihren Server ist nicht erlaubt (allow_url_fopen ist deaktiviert). <br /><br /> Die Datei <a href=\"$a->url\">$a->url</a> muss manuell heruntergeladen werden. Kopieren Sie die Datei nach \"$a->dest\" auf Ihren Server und entpacken Sie sie dort.';
$string['report'] = 'Bericht';
$string['restricted'] = 'Eingeschränkt';
$string['safemode'] = 'Safe Mode';
$string['safemodeerror'] = 'Die Nutzung von Moodle im Safe Mode kann zu Schwierigkeiten führen.';
$string['safemodehelp'] = '<p>Moodle kann beim Betrieb im Safe Mode verschiedene Probleme haben, nicht zuletzt kann es unmöglich sein, neue Dateien zu erzeugen. </p>
<p>Safe Mode ist zumeist nur auf einigen öffentlichen Webservern eingestellt. Suchen Sie sich einen Anbieter, der auf diese Einstellung verzichtet oder bitten Sie Ihren Dienstleister, dass Sie auf einen Server \'umziehen\' können, der diese Einstellung nicht verwendet.</p>
<p>Sie können versuchen, die Installation fortzusetzen. Sie müssen aber später mit Problemen rechnen. </p>';
$string['serverchecks'] = 'Server-Überprüfung';
$string['sessionautostart'] = 'Session Auto Start';
$string['sessionautostarterror'] = 'Diese Option sollte abgeschaltet sein';
$string['sessionautostarthelp'] = '<p>Moodle benötigt den Session Support und kann ohne diese Einstellung nicht funktionieren.</p>
<p>Sessions sind durch Einstellungen in der Datei php.ini möglich. Bitte suchen Sie nach der Einstellung für session.auto_start </p>';
$string['skipdbencodingtest'] = 'Prüfung der Datenbank-Verschlüsselung überspringen';
$string['status'] = 'Status';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = 'Deutsch';
$string['unicoderecommended'] = 'Es wird empfohlen, alle Daten im Format Unicode UTF-8 zu speichern. Neuinstallationen sollten mit Datenbanken vorgenommen werden, die als Standardzeichensatz UTF-8 benutzen. Wenn Sie ein Upgrade durchführen, sollten Sie die UTF-8-Migration starten (Admin-Seite).';
$string['unicoderequired'] = 'Es ist notwendig, alle Daten im Format Unicode UTF-8 zu speichern. Neuinstallationen müssen mit Datenbanken vorgenommen werden, die als Standardzeichensatz UTF-8 benutzen. Wenn Sie ein Upgrade durchführen, sollten Sie die UTF-8-Migration starten (Admin-Seite).';
$string['user'] = 'Nutzer';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Sie haben das Paket <strong>$a->packname $a->packversion</strong> erfolgreich auf Ihrem Computer installiert.';
$string['welcomep30'] = 'Diese Version von <strong>$a->installername</strong> enthält folgende Anwendungen, mit denen Sie <strong>Moodle</strong> ausführen können:';
$string['welcomep40'] = 'Das Paket enthält: <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Die Nutzung dieser Anwendungen ist lizenzrechtlich geprüft. Alle Anwendungen von <strong>$a->installername</strong> sind
<a href=\"http://www.opensource.org/docs/definition_plain.html\"> Open Source </a> und unterliegen der <a href=\"http://www.gnu.org/copyleft/gpl.html\"> GPL</a> Lizenz.';
$string['welcomep60'] = 'Die folgenden Seiten führen Sie in einfachen Schritten durch die Konfiguration und Installation von <strong>Moodle</strong> auf Ihrem Computer. Sie können die vorgeschlagenen Einstellungen übernehmen oder an Ihre Bedürfnisse anpassen.';
$string['welcomep70'] = 'Klicken Sie auf den \"Weiter\"-Button, um mit dem Setup von <string>Moodle</string> fortzufahren.';
$string['wrongdestpath'] = 'Falscher Pfad';
$string['wrongsourcebase'] = 'Falsche URL-Quelle';
$string['wrongzipfilename'] = 'Falscher ZIP-Dateiname';
$string['wwwroot'] = 'Web-Adresse';
$string['wwwrooterror'] = 'Diese Web-Adresse scheint nicht gültig zu sein. Moodle ist nicht unter dieser Adresse installiert.';
$string['xmlrpcrecommended'] = 'Die Installation der optionalen xmlrpc Erweiterung ist für die Moodle-Network Funktionen nützlich.';
$string['ziprequired'] = 'Die PHP-Erweiterung zip wird ab sofort von Moodle gefordert. Die Pakete info-ZIP oder PclZip werden nicht weiter eingesetzt.';
?>
