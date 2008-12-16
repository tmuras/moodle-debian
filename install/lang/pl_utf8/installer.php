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

$string['admindirerror'] = 'Podany katalod admin jest nieprawidłowy';
$string['admindirname'] = 'Katalog admin';
$string['admindirsettinghead'] = 'Ustawienia katalogu administratora ...';
$string['admindirsettingsub'] = 'Niewiele webhost’ów używa /admin jako specjalnego URL w celu akcesu do panela kontrolnego a także w innych celach. Niestety powoduje to konflikt ze standardową lokalizacją dla stron administratora w Moodle. Powyższy konflikt można naprawić, zmieniając nazwę katalogu administratora podczas instalacji i wstawiając nową nazwę. Na przykład: 
<br /> <br /><b>moodleadmin</b><br /> <br />

To naprawi linki administratora w Moodle.';
$string['bypassed'] = 'Ominięty';
$string['cannotcreatelangdir'] = 'Nie można utworzyć katalogu językowego';
$string['cannotcreatetempdir'] = 'Nie można utworzyć katalogu tymczasowego';
$string['cannotdownloadcomponents'] = 'Nie można pobrać składowych (komponentów)';
$string['cannotdownloadzipfile'] = 'Nie można pobrać spakowanego pliku (ZIP)';
$string['cannotfindcomponent'] = 'Nie można znaleźć komponentu';
$string['cannotsavemd5file'] = 'Nie mozna zapisać pliku md5';
$string['cannotsavezipfile'] = 'Nie można zapisać spakowanego pliku';
$string['cannotunzipfile'] = 'Nie można rozpakować pliku ZIP';
$string['caution'] = 'Ostrzeżenie';
$string['check'] = 'Sprawdź';
$string['chooselanguagehead'] = 'Wybierz język';
$string['chooselanguagesub'] = 'Proszę wybrać język TYLKO do instalacji. Stronę i języki dla użytkowników będzie można wybrać na następnym ekranie.';
$string['closewindow'] = 'Zamknij to okno';
$string['compatibilitysettingshead'] = 'Sprawdzanie Twoich ustawień PHP';
$string['compatibilitysettingssub'] = 'Twój serwer powinien przejść wszystkie te testy, by Moodle działał poprawnie.';
$string['componentisuptodate'] = 'Komponent jest aktualny';
$string['configfilenotwritten'] = 'Instalator nie mógł automatycznie utworzyć plik config.php zawierający Twoje parametry instalacyjne, prawdopodobnie dlatego że katalog Moodle nie ma prawa zapisu. Musisz ręcznie przekopiować poniższy kod do pliku config.php, który powinien znajdować się w głównym katalogu Moodle.';
$string['configfilewritten'] = 'config.php został pomyślnie stworzony';
$string['configurationcompletehead'] = 'Konfiguracja skończona';
$string['configurationcompletesub'] = 'Moodle starał sie zapisać twoją konfigurację w pliku w katalogu głównym instalacji Moodle.';
$string['continue'] = 'Kontynuuj';
$string['database'] = 'Baza danych';
$string['databasecreationsettingshead'] = 'Teraz musisz skonfigurować ustawienia bazy danych, w której będzie przechowywana większa część danych Moodle. Zostanie ona stworzona automatycznie w czasie instalacji z wyszczególnionymi poniżej ustawieniami.';
$string['databasecreationsettingssub'] = '<b>Typ:</b> Instalator ustalił  \"mysql\"<br/>
<b>Host:</b> Instalator ustalił \"localhost\"<br />
<b>Nazwa:</b> Nazwa Twojej bazy danych, np. Moodle<br/>
<b>Użytkownik:</b> Użytkownik Twojej bazy danych<br />
<b>Hasło:</b> Hasło dostępu do bazy danych<br />
<b>Prefiksy tabel:</b> opcjonalny prefiks używany przed wszystkimi nazwami tabeli';
$string['databasesettingshead'] = 'Teraz musisz skonfigurować baze danych, w której będzie przechowywana większa część danych Moodle. Ta baza danych musi już być utworzona, podobnie jak nazwa użytkownika i hasło jej przypisane.';
$string['databasesettingssub'] = '<b>Typ:</b>  mysql or postgres7<br/>
<b>Host:</b> np. localhost lub db.isp.com<br />
<b>Nazwa:</b> Nazwa Twojej bazy danych, np. Moodle<br/>
<b>Użytkownik:</b> Użytkownik Twojej bazy danych<br />
<b>Hasło:</b> Hasło dostępu do bazy danych<br />
<b>Prefiksy tabel:</b> opcjonalny prefiks używany przed wszystkimi nazwami tabeli';
$string['dataroot'] = 'Katalog z danymi';
$string['datarooterror'] = 'Katalog z danymi który podałeś nie może być znaleziony lub utworzony. Popraw ścieżkę lub utwórz katalog ręcznie.';
$string['dbconnectionerror'] = 'Nie można połączyć się z podaną bazą danych. Sprawdź ustawienia Twojej bazy danych.';
$string['dbcreationerror'] = 'Błąd tworzenia bazy danych. Nie można stworzyć bazy danych o takiej nazwie z dostarczonymi ustawieniami';
$string['dbhost'] = 'Serwer baz danych';
$string['dbprefix'] = 'prefiksy tabel';
$string['dbtype'] = 'Typ';
$string['dbwrongencoding'] = 'Wybrana baza danych pracuje w niezalecanym kodowaniu($a). Lepiej używać bazy danych kodowanej jednym z Unicodów (UTF-8). Ale można to obejść wybierając \"opuść test kodowania DB\", ale w przyszłości mogą wystąpić podobne problemy.';
$string['directorysettingshead'] = 'Proszę potwierdzić lokację dla instalacji Moodle.';
$string['directorysettingssub'] = '<b>Adres strony</b>
Wpisz pełen adres sieci pod którym będzie dostępne Moodle. Jeśli do strony można dojść przez kilka adresów, należy wpisać ten, którego odruchowo będą używać studenci. Nie używać ukośników
<br />
<br />
<b>Katalog MOODLE</b>
Wpisać pełną ścieżkę pliku do instalacji.
Upewnić się, że góra i dół się zgadzają
<br />
<br/>
<b>Katalog danych</b>
Potrzebujesz miejsca, w którym Moodle będzie zachowywał załadowane pliki. Ten katalog powinien być i czytany, i zapisywany przez użytkownika sieci, ale nie może być do niego dostępu bezpośrednio przez sieć.';
$string['dirroot'] = 'Katalog Moodle';
$string['dirrooterror'] = '\"Katalog Moodle\" wydaje się być nieprawidłowy - tam nie można znaleźć instalacji Moodle. Wartości poniżej zostaną usunięte.';
$string['download'] = 'Pobierz';
$string['downloadedfilecheckfailed'] = 'Pobierany plik jest uszkodzony';
$string['downloadlanguagebutton'] = 'Pobierz \"$a\" pakiet językowy';
$string['downloadlanguagehead'] = 'Pobierz pakiet językowy';
$string['downloadlanguagenotneeded'] = 'Możesz kontynuować proces instalacji, używając domyślnego pakietu językowego \"$a\".';
$string['downloadlanguagesub'] = 'Teraz masz możliwość załadowania pakietu językowego i kontynuowania procesu instalacji w tym języku.<br/><br/>Jeśli nie możesz załadować pakietu, instalacja będzie się odbywać dalej po angielsku (kiedy się skończy, będziesz mieć możliwość załadowania i zainstalowania dodatkowych pakietów językowych)';
$string['environmenterrortodo'] = 'Musisz usunąć wszystkie problemy (błędy) w środowisku serwera zanim rozpocznie się instalacja tej wersji Moodle!';
$string['environmenthead'] = 'Sprawdzam środowisko (ustawienia) ...';
$string['environmentrecommendinstall'] = 'jest zalecane, żeby było zainstalowane/włączone';
$string['environmentrecommendversion'] = 'wersja $a->needed jest zalecana a ty używasz wersji $a->current';
$string['environmentrequirecustomcheck'] = 'ten test musi być zaliczony';
$string['environmentrequireinstall'] = 'jest niezbędnę, żeby było zainstalowane/włączone';
$string['environmentrequireversion'] = 'wersja $a->needed jest niezbędna a ty używasz wersji $a->current';
$string['environmentsub'] = 'Sprawdzamy, czy różne komponenty systemu spełniają wymagania systemu';
$string['environmentxmlerror'] = 'Błąd odczytywania danych środowiska ($a->error_code)';
$string['error'] = 'Błąd';
$string['fail'] = 'Nie udało się';
$string['fileuploads'] = 'Plik pobrany';
$string['fileuploadserror'] = 'Powinno być włączone';
$string['fileuploadshelp'] = '<p>Przesyłany plik nie jest dostępny na Twoim serwerze.</p>

<p> Możesz nadal instalować Moodle, lecz bez tego ustawienia nie będziesz mógł załadowywać plików kursu lub obrazów profilów nowych użytkowników.</p>

<p> Aby umożliwić przesyłanie plików, musisz sam (lub z pomocą swojego administratora systemu) edytować główny plik php.ini w swoim systemie i zmienić ustawienie <b>file_uploads</b> to \'1\'.</p>';
$string['gdversion'] = 'Wersja biblioteki GD';
$string['gdversionerror'] = 'Aby przeprowadzać operacje i kreować obrazy, niezbędna jest biblioteka GD';
$string['gdversionhelp'] = '<p> Nie masz zainstalowanego GD na swoim serwerze.</p>
<p>„GD jest biblioteką wymaganą przez PHP w celu umożliwienia Moodle operacji na obrazach (takich jak ikony profilu użytkownika) i w celu tworzenia nowych obrazów (takich jak wykresy logowań). Moodle będzie pracował bez GD – te możliwości nie będą jednak dla Ciebie dostępne.</p>
<p> Aby dodać GD do PHP pod Unix-em, skompiluj PHP używając parametru -- with-gd. </p>

<p> Pod Windows-em można zazwyczaj edytować php.ini i pominąć linię odwołującą się do php_gd2.dll.</p>”';
$string['globalsquotes'] = 'Groźne zarządzanie zmiennymi globalnymi';
$string['globalsquoteserror'] = 'Ustal swoje ustawienia PHP:  niedostępne register_globals i/lub udostępnione magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p> Nie jest zalecane ustawienie równocześnie kombinacji niedostępnego Magoc Quotes GPC i udostępnionego Register Globals.</p>

<p> Zalecane ustawienie: <b>magic_quotes_gpc = On</b> i <b>register_globals = Off</b> in your php.ini</p>

<p> Jeśli nie posiadasz dostępu do swojego php.ini, możesz zamieścić następującą linię w pliku called.htacces w swoim katalogu Moodle.
	<blockquote>php_value magic_quotes_gpc On</blockquote>
   	<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['help'] = 'Pomoc';
$string['info'] = 'Informacja';
$string['installation'] = 'Instalacja';
$string['invalidmd5'] = 'Nieważne md5';
$string['langdownloaderror'] = 'Niestety język \"$a\" nie jest zainstalowany. Instalacja będzie przebiegać dalej po angielsku.';
$string['langdownloadok'] = 'Język został \"$a\" zainstalowany pomyślnie. Instalacja będzie w nim kontynuowana w tym języku.';
$string['language'] = 'Język';
$string['magicquotesruntime'] = 'Magic Quotes Runtime';
$string['magicquotesruntimeerror'] = 'Powinno być wyłączone';
$string['magicquotesruntimehelp'] = 'Aby Moodle funkcjonowało poprawnie tryb pracy Magic Quotes powinien być wyłączony.</p>

<p> Domyślne ustawienie jest wyłączone ... zobacz ustawienie <b>magic_quotes_runtime</b> w swoim pliku php.ini.</p>

<p>Jeśli nie posiadasz dostępu do swojego php.ini, możesz zamieścić następującą linię w pliku called.htacces w swoim katalogu Moodle:
	 <blockquote>php_value magic_quotes_runtime Off</blockquote> </p>';
$string['memorylimit'] = 'Ograniczenie pamięci';
$string['memorylimiterror'] = '= Limit pamięci PHP jest ustawiony zbyt nisko ... może to powodować problemy w przyszłości';
$string['memorylimithelp'] = 'Limit pamięci PHP dla Twojego serwera jest ustawiony obecnie na $a.</p>

<p> Może to stworzyć sytuację, w której Moodle będzie miał w przyszłości problemy z pamięcią, zwłaszcza jeśli masz udostępnionych wiele modułów i/lub wielu użytkowników.</p>

<p> Jeśli jest to możliwe, zalecamy ustawienie konfiguracji PHP z wyższym limitem, np. 40M.
Istnieje kilka sposobów przeprowadzenia tej operacji, których możesz spróbować: </p>
<ol>
<li> Jeśli możesz przekompiluj PHP za pomocą <i>--enable-memory-limit</i>.
Pozwoli to Moodle ustawić samoczynnie limit pamięci. </li>
<li> Jeśli masz dostęp do swojego pliku php.ini, możesz w nim zmienić ustawienie <b>memory_limit</b> do wielkođci 40M. Jeśli nie posiadasz tego dostępu możesz poprosić swojego administratora aby zrobił to za Ciebie.</li>
<li> Na niektórych serwerach PHP można stworzyć plik. htaccess w katalogu Moodle zawierający poniższą linię:
<p><blockquote>php_value memory_limit 40M</blockquote></p>
<p> jednakże na niektórych serwerach będzie uniemożliwiało to działanie <b> wszystkich </b> stron PHP (ujrzysz błędy na stronie), a więc będziesz zmuszony usunąć plik .htaccess. </p></li></ol>”';
$string['missingrequiredfield'] = 'Brak wymaganego pola';
$string['moodledocslink'] = 'Dokumentacja Moodle dla tej strony';
$string['mssql'] = 'SQL*Server (mssql)';
$string['mssql_n'] = 'SQL*Server z UTF-8 support (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysqlextensionisnotpresentinphp'] = 'PHP nie został prawidłowo skonfigurowany z rozszerzeniem MySQL, co może zostać zakomunikowane przez MySQL. Sprawdź proszę swój plik php.ini lub przekompiluj PHP';
$string['name'] = 'Nazwa';
$string['next'] = 'Następne';
$string['ok'] = 'OK';
$string['opensslrecommended'] = 'Instalacja opcjonalnej biblioteki OpenSSL jest wysoce zalecane -- aktywuje sieciową funkcjonalność Moodle.';
$string['parentlanguage'] = '<<DO TŁUMACZY: Jeżeli Twój język ma Język nadrzędny który powinien być użyty w przypadku braku tlumaczenia, wpisz tutaj odpowiedni kod (np: nl). Pozostawienia pustego powoduje używanie języka angielskiego.>>';
$string['password'] = 'Hasło';
$string['php50restricted'] = 'PHP 5.0.x posiada kilka znanych błędów, proszę uaktualnić do wersji 5.1.x lub zredukować do wersji 4.3.x lub 4.4.x';
$string['phpversion'] = 'Wersja PHP';
$string['phpversionerror'] = 'Wersja PHP musi być co najmniej 4.1.0';
$string['phpversionhelp'] = '<p> Moodle wymaga wersji PHP co najmniej 4.1.0. </p> 
<p>Obecnie jest uruchomiona wersja $a</p>
<p> Musisz uaktualnić wersje PHP lub przenieść na host z nowszą wersją PHP!</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['previous'] = 'Poprzedni';
$string['remotedownloadnotallowed'] = 'Pobieranie komponentów na Twój serwer jest niedozwolone. Musisz pobrać pliki ręcznie z <a href=\"$a->url\">$a->url</a> i skopiować do \"$a->dest\" na swoim serwerze i tam go otworzyć';
$string['report'] = 'Raport';
$string['restricted'] = 'Ograniczony';
$string['safemode'] = 'Bezpieczny tryb';
$string['safemodeerror'] = 'Moodle ma trudności z włączeniem bezpiecznego trybu';
$string['safemodehelp'] = '“<p> Moodle może mieć wiele zróżnicowanych problemów z trybem bezpiecznym z czego nie najmniejszym jest brak możliwości tworzenia nowych plików. 

<p> Tryb bezpieczny jest zazwyczaj dostępny jedynie na publicznych host-ach web a więc musisz znaleźć nową firmę hostingową dla Twojej strony Moodle.</p>

<p> Można kontynuować instalacje, lecz należy spodziewać się pewnych problemów w przyszłości.</p>';
$string['sessionautostart'] = 'Automatyczny start sesji';
$string['sessionautostarterror'] = 'To powinno być wyłączone';
$string['sessionautostarthelp'] = '<p>Moodle wymaga obsługi sesjii nie będzie bez niego funkcjonować.</p>
<p>Sesja może być zainicjowana w pliku php.ini  poszukaj parametrów session.auto_start sesji </p>';
$string['status'] = 'Status';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = 'Polski';
$string['unicoderecommended'] = 'Zalecane jest składowanie danych w formacie Unicode (UTF-8).Nowe instalacje muszą być wykonane w bazach danych których domyślne znaki są ustawione jako Unicode. Jeżeli dokonywane jest uaktualnienie, należy przeprowadzić proces migracji UTF-8 (zobacz stronę Administratora).';
$string['unicoderequired'] = 'Wymagane jest aby składować wszystkie dane w formacie unicode (UTF-8). Nowe instalacje muszą być wykonane w bazach danych których domyślne kodowanie są ustawione jako Unicode. Jeżeli dokonywane jest uaktualnienie, należy przeprowadzić proces migracji UTF-8 (zobacz stronę Administratora).';
$string['user'] = 'Użytkownik';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'Widzisz tę stronę, ponieważ z powodzeniem zainstalowałeś i uruchomiłeś <strong>$a->packname $a->packversion</strong>  na swoim komputerze.';
$string['welcomep30'] = 'Ten instalator <strong>$a->installername</strong> zawiera aplikacje, by stworzyć środowisko, w którym będzie działać <strong>Moodle</strong>, czyli';
$string['welcomep40'] = 'Pakiet zawiera<strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Wszystkie aplikacje w tym pakiecie maja własne, oddzielne licencje. Kompletny pakiet <strong>$a->installername</strong> jest <a href=\"http://www.opensource.org/docs/definition_plain.html\">open source</a> i jest dystrybuowany na <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> licencji.';
$string['welcomep60'] = 'Nastepujące strony przeprowadzą cię przez instalację Moodle na twoim komputerze. Możesz zaakceptować ustawienia domyślne lub, opcjonalnie, dostosować je do swoich potrzeb.';
$string['welcomep70'] = 'Kliknij \"Dalej\" żeby kontynuować instalację Moodle';
$string['wrongdestpath'] = 'Błędna scieżka docelowa';
$string['wrongsourcebase'] = 'Błędne żródło bazy URL';
$string['wrongzipfilename'] = 'Błędna nazwa pliku ZIP.';
$string['wwwroot'] = 'Adres w sieci';
$string['wwwrooterror'] = 'Adres w sieci wydaje się być niepoprawny - wydaje się że nie ma tam instalacji Moodle';
?>
