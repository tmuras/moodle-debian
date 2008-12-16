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

$string['admindirerror'] = '지정한 관리 디렉토리가 적절치 않음';
$string['admindirname'] = '관리 디렉토리';
$string['admindirsettinghead'] = '관리자 디렉토리 설정 ...';
$string['admindirsettingsub'] = '간혹 어떤 웹호스트 업체는 제어판 등을 제공하는 특별한 URL으로서 /admin을 사용합니다. 불행하게도 이것은 무들 관리페이지를 위한 표준 위치와 충돌을 일으킵니다. 설치과정에서 관리 디렉토리의 이름을 바꿈으로서 이 문제를 고칠수 있는 데, 다음의 예와 같이 새이름을 여기에 넣으면 됩니다. 예: <br /> <br /><b>moodleadmin</b><br /> <br /> 이렇게 하면 무들에서 관리자 링크문제가 해결됩니다.';
$string['bypassed'] = '건너뜀';
$string['cannotcreatelangdir'] = '언어팩 경로를 생성할 수 없음';
$string['cannotcreatetempdir'] = 'temp 디렉토리를 만들 수 없습니다.';
$string['cannotdownloadcomponents'] = '구성요소를 내려받을 수 없음';
$string['cannotdownloadzipfile'] = 'ZIP파일을 내려받을 수 없음';
$string['cannotfindcomponent'] = '구성요소를 찾을 수 없음';
$string['cannotsavemd5file'] = 'md5 파일을 저장할 수 없음';
$string['cannotsavezipfile'] = 'ZIP 파일을 저장할 수 없음';
$string['cannotunzipfile'] = '압축된 파일을 풀 수 없음';
$string['caution'] = '주의';
$string['check'] = '점검';
$string['chooselanguagehead'] = '언어를 선택하시오';
$string['chooselanguagesub'] = '설치할 때 쓸 언어를 선택하십시오. 이 후 화면에서는 사이트와 사용자들을 위한 여타의 언어팩들을 선택할 수 있습니다.';
$string['closewindow'] = '창 닫기';
$string['compatibilitysettingshead'] = 'PHP 설정을 검사하는 중 ..';
$string['compatibilitysettingssub'] = '당신의 서버는 무들이 잘 작동되기 위한 필요한 모든 테스트를 통과해야 합니다.';
$string['componentisuptodate'] = '구성 요소가 갱신됨';
$string['configfilenotwritten'] = '설치 스크립트는 당신이 선택한 설정으로 config.php파일을 자동적으로 생성할 수 없습니다. 아마도 무들 경로가 쓰기 허용이 되어 있지 않은 모양입니다.  당신은 수동으로 다음의 코드를 무들의 루트디렉토리안에 config.php파일로 복사해 넣을 수 있습니다.';
$string['configfilewritten'] = '성공적으로 contig.php가 생성되었음';
$string['configurationcompletehead'] = '초기 설정 완료';
$string['configurationcompletesub'] = '무들이 설치 루트디렉토리에 있는 파일에 당신의 설정을 저장하도록 시도하였습니다.';
$string['continue'] = '계속';
$string['ctyperecommended'] = '사이트가 비 라틴계열의 언어를 사용한다면 사이트의 성능 향상을 위해 추가적인 ctype PHP 확장자 설치를 강력히 권고합니다.';
$string['ctyperequired'] = '다국어 호환 기능 및 사이트의 성능 향상을 위해 이제부터 무들은 ctype의 PHP 확장자를 요구합니다.';
$string['curlrecommended'] = '무들 네트웍 기능을 활성화하기 위해서는 추가적인 cURL 라이브러리를 설치할 것을 강력히 권고한다.';
$string['curlrequired'] = '무들 저장소와 교신하기 위해서는 cURL 확장이 필요합니다.';
$string['customcheck'] = '다른 점검들';
$string['database'] = '데이타 베이스';
$string['databasecreationsettingshead'] = '대부분의 무들 데이터가 저장될 데이터베이스를 설정해야 합니다. 설치프로그램에 의해 자동으로 아래에 명시된 설정대로 데이터베이스가 생성될 것입니다.';
$string['databasecreationsettingssub'] = '<b>종류:</b> 설치프로그램에 의해 \"mysql\" 로 고정됨 <br />
<b>호스트:</b>설치프로그램에 의해 \"localhost\"로 고정됨<br />
<b>이름:</b>데이터베이스이름, 예:moodle<br />
<b>사용자:</b> 설치프로그램에 의해 \"root\" 로 고정됨 <br />
<b>암호:</b> 데이터베이스 암호 <br />
<b>테이블 첨두어:</b> 모든 테이블에 사용할 선택적 접두어';
$string['databasesettingshead'] = '모든 무들데이터가 저장되는 데이터베이스를 설정할 필요가 있습니다. 이 데이터베이스는 이미 만들어졌으며 이에 접근할 수 있는 사용자명과 암호가 등록되어 있어야만 합니다.';
$string['databasesettingssub'] = '<b>종류:</b> mysql 또는 postgres7<br />
<b>호스트:</b>예: localhost 또는 db.isp.com <br />
<b>이름:</b> 데이터베이스 이름, 예:moodle<br />
<b>사용자:</b> 데이터베이스 사용자명<br />
<b>암호:</b> 데이터베이스 암호<br />
<b>테이블 접두어:</b> 모든 테이블에 사용할 선택적 접두어';
$string['databasesettingssub_mssql'] = '<b>종류:</b> SQL*Server (non UTF-8) <b><font color=\"red\">실험적임! (현재 운영되고 있는 사이트에서는 쓰지 마시오.)</font></b><br />
<b>호스트:</b>예: localhost 또는 db.isp.com <br />
<b>이름:</b> 데이터베이스 이름, 예:moodle<br />
<b>사용자:</b> 데이터베이스 사용자명<br />
<b>암호:</b> 데이터베이스 암호<br />
<b>테이블 접두어:</b> 모든 테이블에 사용할 접두어 (필수)';
$string['databasesettingssub_mssql_n'] = '<b>종류:</b> SQL*Server (UTF-8 설정)<br />
<b>호스트:</b>예: localhost 또는 db.isp.com <br />
<b>이름:</b> 데이터베이스 이름, 예:moodle<br />
<b>사용자:</b> 데이터베이스 사용자명<br />
<b>암호:</b> 데이터베이스 암호<br />
<b>테이블 접두어:</b> 모든 테이블에 사용할 접두어(필수)';
$string['databasesettingssub_mysql'] = '<b>종류:</b> MySQL<br />
<b>호스트:</b>예: localhost 또는 db.isp.com <br />
<b>이름:</b> 데이터베이스 이름, 예:moodle<br />
<b>사용자:</b> 데이터베이스 사용자명<br />
<b>암호:</b> 데이터베이스 암호<br />
<b>테이블 접두어:</b> 모든 테이블에 사용할 접두어(선택사항)';
$string['databasesettingssub_mysqli'] = '<b>종류:</b>향상된 MySQL<br />
<b>호스트:</b>예: localhost 또는 db.isp.com <br />
<b>이름:</b> 데이터베이스 이름, 예:moodle<br />
<b>사용자:</b> 데이터베이스 사용자명<br />
<b>암호:</b> 데이터베이스 암호<br />
<b>테이블 접두어:</b> 모든 테이블에 사용할 접두어(선택사항)';
$string['databasesettingssub_oci8po'] = '<b>종류:</b>  Oracle<br />
<b>호스트:</b> 사용되지 않음, 공백이어야 함<br />
<b>이름:</b> tnsnames.ora 접속에 쓰는 이름<br />
<b>사용자:</b> 데이터베이스 사용자명<br />
<b>암호:</b> 데이터베이스 암호<br />
<b>테이블 접두어:</b> 모든 테이블에 사용할 접두어(필수, 2cc. max)';
$string['databasesettingssub_odbc_mssql'] = '<b>종류:</b> SQL*Server (over ODBC) <b>Experimental!</b><br />
<b>호스트:</b>ODBC조절패널의 DSN에서 부여한 이름<br />
<b>이름:</b> 데이터베이스 이름, 예:moodle<br />
<b>사용자:</b> 데이터베이스 사용자명<br />
<b>암호:</b> 데이터베이스 암호<br />
<b>테이블 접두어:</b> 모든 테이블에 사용할 접두어(필수)';
$string['databasesettingssub_postgres7'] = '<b>종류:</b>  PostgreSQL<br />
<b>호스트:</b>예: localhost 또는 db.isp.com <br />
<b>이름:</b> 데이터베이스 이름, 예:moodle<br />
<b>사용자:</b> 데이터베이스 사용자명<br />
<b>암호:</b> 데이터베이스 암호<br />
<b>테이블 접두어:</b> 모든 테이블에 사용할 접두어 (필수)';
$string['databasesettingswillbecreated'] = '<b>알림:</b>만일 데이터베이스가 없다면 인스톨러가 데이터베이스를 만들려고 할 것입니다.';
$string['dataroot'] = '데이타 경로';
$string['datarooterror'] = '당신이 지정한 \'데이타 경로\'가 없거나 생성되지 않았습니다. 정확한 경로를 적거나 수동으로 그 디렉토리를 생성해 놓으시오.';
$string['datarootpublicerror'] = '지정한 \'데이타 경로\'는 직접 웹으로 접근할 수 있기 때문에, 다른 경로를 지정해야만 합니다.';
$string['dbconnectionerror'] = '지정한 데이터베이스에 연결할 수 없습니다. 데이타베이스의 설정을 점검하시오.';
$string['dbcreationerror'] = '데이터베이스 생성 오류. 주어진 사용자명 및 암호로 사용할 데이터베이스를 생성할 수 없습니다.';
$string['dbhost'] = '호스트 서버';
$string['dbprefix'] = '접두어';
$string['dbtype'] = '형태';
$string['dbwrongencoding'] = '선택된 데이터베이스는 바람직하지 않은 엔코딩 방법($a)에 의해 동작하고 있습니다. 유니코드 UTF-8로 인코딩 되는 데이터베이스를 사용하는 것이 좋습니다. 아래의\"DB 엔코딩 테스트 건너뛰기\"를 선택하여 이 테스트를 건너뛸 수 있지만 추후에 문제가 야기될 수 있습니다.';
$string['dbwronghostserver'] = '이미 설명한 \"호스트\"의 규칙을 따라야만 합니다.';
$string['dbwrongnlslang'] = '웹서버의 NLS_LANG 환경 변수들은 AL32UTF8 문자셋으로 작성되어야만 합니다. OCI8을 적절하게 설정하기 위한 PHP 문서를 보십시요.';
$string['dbwrongprefix'] = '위에 설명한 대로 \"테이블 접두어\" 규칙을 따라야만 합니다.';
$string['directorysettingshead'] = '무들 설치 위치를 확인하기 바랍니다.';
$string['directorysettingssub'] = '<b>웹 주소:</b>
무들이 접속될 완전한 웹주소를 기입하시오.
만일 다중 URL을 통하여 웹사이트에 접근할 수 있다면 학습자가 사용하기 쉬운 자연스런 주소를 선택하시오. 끝에 슬래시를 포함하지 마십시요.
<br />
<br />
<b>무들 경로:</b>
무들이 설치될 완전한 디렉토리 경로를 명시하시오. 대문자/소문자가 맞는지 확인하시오.
<br />
<br />
<b>데이터 디렉토리:</b>
무들로 업로드된 파일을 저장할 수 있는 장소가 필요합니다. 이 디렉토리는 웹 서버의 사용자(보통 \"none\" 또는 \"apache\" )에 의해서 \'읽고쓰기 가능\' 권한을 보유하여야 합니다. 그러나 직접 접근할 수 있어서는 안됩니다.';
$string['dirroot'] = '무들 디렉토리';
$string['dirrooterror'] = '무들의 경로가 바르지 않은 것 같습니다 - 무들의 설치 프로그램을 찾을 수 없습니다. 아래의 값들은 초기화 되었습니다.';
$string['download'] = '내려 받음';
$string['downloadedfilecheckfailed'] = '내려받은 파일 점검 실패';
$string['downloadlanguagebutton'] = '\"$a\" 언어팩 내려받기';
$string['downloadlanguagehead'] = '언어팩 다운로드';
$string['downloadlanguagenotneeded'] = '기본 언어팩인 \"$a\"을 사용하여 설치과정을 계속할 수 있습니다.';
$string['downloadlanguagesub'] = '이제 언어팩 선택을 하셨기 때문에 추후에는 선택한 언어로 설치를 계속할 수 있습니다.<br /><br />만일 해당 언어팩을 내려받지 못한다면, 영문으로 설치가 계속될 것입니다.(일단 영문으로 프로그램을 깐 후, 다시 또 다른 언어팩을 선택하여 설정할 수 있는 기회가 있습니다)';
$string['environmenterrortodo'] = '이 무들버전을 설치하기 전에 앞에서 발견된 모든 환경설정 문제(오류)를 해결해야 합니다!';
$string['environmenthead'] = '구동환경을 점검합니다...';
$string['environmentrecommendcustomcheck'] = '만일 이 검사에 실패한다면 잠재적인 문제를 지니고 있는 것임';
$string['environmentrecommendinstall'] = '설치하거나 활성화할 것을 권고함';
$string['environmentrecommendversion'] = '$a->needed 버전을 권장하고 있는 데 현재 $a->current 을 사용하고 있음';
$string['environmentrequirecustomcheck'] = '반드시 통과해야 함';
$string['environmentrequireinstall'] = '설치하거나 활성화해야만 함';
$string['environmentrequireversion'] = '$a->needed 버전이 요구되는 데, 현재 $a->current 이 구동되고 있음';
$string['environmentsub'] = '기존 운영체제가 무들의 여러 구성 요소들을 구동하는데 적합한지 점검합니다.';
$string['environmentxmlerror'] = '환경 설정 데이터 불러들이기 오류 ($a->error_code)';
$string['error'] = '오류';
$string['fail'] = '실패';
$string['fileuploads'] = '파일 올리기';
$string['fileuploadserror'] = '이것은 켜져야 합니다.';
$string['fileuploadshelp'] = '<p>서버로 파일올리기가 불가능해 보입니다.</p>

<p>무들은 설치될 수 있지만 파일을 업로딩 할 수 없는 상태에서는 강좌에 파일이나 사진을 올릴 수 없을 것입니다.</p>

<p>파일 업로딩이 가능하게 하기 위해서는 당신(또는 당신의 시스템 관리자)가 php.ini 파일 속의  <b>file_upload</b>을 \'1\'로 설정해야 할 것입니다.</p>';
$string['gdversion'] = 'GD 의 버전';
$string['gdversionerror'] = 'GD 라이브러리는 사진이나 그림을 처리하기 위해서는 필수적으로 있어야만 합니다.';
$string['gdversionhelp'] = '<P>당신의 서버는 GD가 설치된 것으로 보여지지 않습니다.

<P>GD는 무들이 (사용자 아이콘과 같은) 그림이나 (함수 그래프와 같은) 새로운 이미지를 생성,처리할 수 있도록 PHP에 의해서 요구되는 라이브러리 입니다. 하지만 무들은 GD없이도 작동되는데, 이 때는 GD가 제공하는 기능은 사용할 수 없을 것입니다.';
$string['globalsquotes'] = '전역변수 조작 안전성 결여';
$string['globalsquoteserror'] = 'PHP.ini 속의 설정을 다음과 같이 고치십시오:  register_globals 및 enable magic_quotes_gpc 을 끄십시오(Off).';
$string['globalsquoteshelp'] = '<p>magic_quotes_gpc = Off 과 register_globals = On 을 조합하는 것은 바람직하지 않습니다.</p>

<p>권장하는 php.ini 설정은 <b>magic_quotes_gpc = On</b> 과 <b>register_globals = Off</b> 입니다.</p>

<p>만일 여러분이 php.ini 에 접근할 수 없다면, 무들 디렉토리안에 아래의 내용이 담긴 .htaccess 파일을 넣어 두십시오.
<blockquote>php_value magic_quotes_gpc On</blockquote>
<blockquote>php_value register_globals Off</blockquote>
</p>';
$string['globalswarning'] = '<p><strong>보안 경고</strong>  : 무들이 바르게 작동하기 위해서는, 현재의 일부 PHP설정을 바꿔야 합니다.<p/><p><em>반드시</em>  <code>register_globals=off</code>로 설정해야 합니다.<br /> 이는 <code>php.ini</code>나 Apache/IIS의  <code>.htaccess</code> 파일의 변수를 조정하면 됩니다.</p>';
$string['help'] = '도움';
$string['iconvrecommended'] = '당신의 사이트가 라틴언어계열이 아닌 언어를 지원하는 경우, 사이트의 성능을 향상시키기 위해서는 ICONV라이브러리를 설치할 것을 권장합니다.';
$string['info'] = '정보';
$string['installation'] = '설치';
$string['invalidmd5'] = '잘못된 md5';
$string['langdownloaderror'] = '안타깝게도 \"$a\" 언어팩이 설치되지 않았습니다. 대신 영어를 이용하여 설치될 것입니다.';
$string['langdownloadok'] = '\"$a\" 언어팩이 성공적으로 설치되었습니다. 해당 언어를 이용하여 설치가 진행될 것입니다.';
$string['language'] = '언어';
$string['magicquotesruntime'] = 'Magic Quotes 실행 시간';
$string['magicquotesruntimeerror'] = '이것은 꺼져야 합니다.';
$string['magicquotesruntimehelp'] = '<p>Magic quotes runtime은 무들이 제대로 작동하기 위해 꺼져야(Off) 합니다.</p>

<p>일반적으로 기본값은 Off 입니다만 다시한번 php.ini파일에 있는 <b>magic_quotes_runtime</b>을 확인해 보세요.</p>

<p>만약에 당신이 php.ini파일에 접근하지 못한다면 무들 디렉토리안에 다음의 내용을 적은 .htaccess 파일을 넣어두시기 바랍니다.<blockquote>php_value magic_quotes_runtime off<blockquote></p>';
$string['mbstringrecommended'] = '당신의 사이트가 라틴언어계열이 아닌 언어를 지원하는 경우, 사이트의 성능을 향상시키기 위해서 MBSTRING 라이브러리 설치를 권장합니다.';
$string['memorylimit'] = '메모리 사용량';
$string['memorylimiterror'] = 'php의 메모리 사용량이 너무 작게 설정되어 있습니다. 당신은 후에 문제에 봉착할 지도 모릅니다.';
$string['memorylimithelp'] = '<p>현재 서버의 PHP 메모리 사용량은 $a 로 설정되어 있습니다.</p>

<p>이는 추후에 무들이 원활히 구동되는 데 문제가 될 것입니다. 특히 여러분이 상당히 많은 모듈을 이용하고 또 사용자가 많아지게 되면 문제가 될 소지가 더 커집니다.</p>

<p>우리는 당신이 PHP가 사용할 수 있는 메모리 용랑을 40M 나 아니면 더 큰 값으로 설정하길 바랍니다. 설정하는 방법은 
여러가지가 있습니다.</p>
<ol>
<li>만약 PHP소스를 재컴파일 할 수 있다면 옵션에 <i>--enable-memory-limit</i> 을 포함시켜 컴파일 하십시오. 이렇게 해 놓으면 무들 프로그램으로 메모리 용량을 제어할 수 있게 됩니다.</li>

<li>만약 php.ini 파일에 접근 가능하다면 당신은 <b>memory_limit 40M</b> 처럼 값을 바꿀 수 있을것입니다. 만약 여러분이 직접 접근 할 수 없다면 서버 관리자에게 요청하여 처리하실 수 있습니다.</li>

<li>또 도저히 php.ini 안에 있는 값을 바꿀 수가 없다면 무들 디렉토리에 아래와 같은 내용을 포함하는 .htaccess 를 넣어두면 됩니다.
<P><blockquote>php_value memory_limit 40M<blockquote></p>
<p>그러나 어떤 서버에서는 이러한 기능이 모든 PHP페이지에 적용되어 버릴 수도 있게 되는 데 (당신이 페이지를 살펴보았을때 문제를 찾을 것이다) 이 때에는 .htaccess 를 제거해야 하고 다른 방안을 찾아봐야 할 것입니다.</p></li></ol>';
$string['missingrequiredfield'] = '필요한 항목이 빠져 있음';
$string['moodledocslink'] = '이 페이지를 위한 무들 문서';
$string['mssql'] = 'SQL* 서버 (mssql)';
$string['mssql_n'] = 'UTF-8을 지원하는 SQL* 서버 (mssql_n)';
$string['mssqlextensionisnotpresentinphp'] = 'MSSQL확장자를 이용해 SQL*서버와 연동할 수 있도록 적절하게 설정되지 못했습니다. php.ini 파일을 점검해 보거나 PHP를 다시 컴파일 하십시오.';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = '사이트가 iso-8859-1 (라틴) 언어만을 사용하는 경우 현재 설치된 MySQL 4.1.12(혹은 그 이상 버전)를 사용할 수 있습니다.';
$string['mysql416required'] = '모든 데이터가 향후 UTF-8로 변환될 수 있도록 하기위해서는 MySQL 4.1.16 이상 버전이 무들 1.6버전에 필요합니다.';
$string['mysqlextensionisnotpresentinphp'] = 'MySQL확장자를 이용해 서버와 연동할 수 있도록 적절하게 설정되지 못했습니다. php.ini 파일을 점검해 보거나 PHP를 다시 컴파일 하십시오.';
$string['mysqli'] = '향상된 MySQL (mysqli)';
$string['mysqliextensionisnotpresentinphp'] = 'PHP가 MySQLi확장자를 이용해 서버와 연동할 수 있도록 적절하게 설정되지 못해서 MySQL로 통신하게 되었습니다. php.ini 파일을 점검해 보거나 PHP를 다시 컴파일 하십시오.  MySQLi 확장자는 PHP 4에는 사용할 수 없습니다.';
$string['name'] = '이름';
$string['next'] = '다음';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'OCI8 익스텐션으로 PHP가 오라클서버와 통신하도록 적절히 설정되지 않았습니다. php.ini 파일을 점검하거나 PHP를 다시 컴파일 하십시오.';
$string['odbc_mssql'] = 'ODBC를 통한 SQL*Server (odbc_mssql)';
$string['odbcextensionisnotpresentinphp'] = 'ODBC 익스텐션으로 PHP가 SQL*서버와 통신하도록 적절히 설정되지 않았습니다. php.ini 파일을 점검하거나 PHP를 다시 컴파일 하십시오.';
$string['ok'] = 'OK';
$string['opensslrecommended'] = '추가적인 OpenSSL 라이브러리를 설치할 것을 강력히 권고함 -- 무들 네트웍 기능을 이용할 수 있게 됨';
$string['parentlanguage'] = 'ko';
$string['pass'] = '통과';
$string['password'] = '비밀번호';
$string['pgsqlextensionisnotpresentinphp'] = 'PGSQL 익스텐션으로 PHP가 PostgreSQL 서버와 통신하도록 적절히 설정되지 않았습니다. php.ini 파일을 점검하거나 PHP를 다시 컴파일 하십시오.';
$string['php50restricted'] = 'PHP 5.0.x 는 약간의 버그가 보고되었습니다. 5.1.x로 판올림 하던가, 아니면 4.3.x 혹은 4.4.x로 바꿔주기 바랍니다.';
$string['phpversion'] = 'php버젼';
$string['phpversionerror'] = 'php 버젼은 최소한 4.3.0 혹은 5.1.0. 이상 이어야합니다.(5.0.x는 버그가 있다고 알려져 있습니다)'; // ORPHANED
$string['phpversionhelp'] = '<p>무들은 적어도 PHP4.3.0 혹은 5.1.0. 이상 이어야합니다.(5.0.x는 버그가 있다고 알려져 있습니다)</p>
<p>현재 구동되고 있는 PHP버전은 $a 입니다.</p>
<p>PHP를 업그레이드 하시거나 새버전을 제공하는 웹호스팅 업체로 이전하기를 권합니다!<br />(만일 5.0.x버전을 사용 중이라면 4.4.x 버전으로 다운그레이드 할 수 있습니다)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['previous'] = '이전으로';
$string['qtyperqpwillberemoved'] = '갱신과정에서 RQP 문제 유형은 제거될 것입니다. 만일 이 유형의 문제를 사용하지 않았다면, 추후에는 어떤 문제도 발생하지 않을 것입니다.';
$string['qtyperqpwillberemovedanyway'] = '갱신과정에서 RQP 문제 유형은 제거될 것입니다. 데이터베이스에 RQP 문제가 탑재되어 있다면, 비록 갱신하기 전에 http://moodle.org/mod/data/view.php?d=13&amp;rid=797  에서 코드를 다시 불러들였다 하더라도 작업이 중단될 것입니다.';
$string['remotedownloaderror'] = '서버로 구성요소를 다운로드하는데 실패하였습니다. 프록시 설정을 확인하십시요. PHP cURL 확장라이브러리를 추천합니다. <br /><br /> <a href=\"$a->url\">$a->url</a> 파일을 수동으로 다운로드해서 서버의 \"$a->dest\"에 복사한 다음 거기서 압축을 해제하십시요.';
$string['remotedownloadnotallowed'] = '서버로 구성요소를 내려받는 것이 허용되지 않습니다. (allow_url_fopen 이 비활성화 됨).<br /><br /> 수동으로 <a href=\"$a->url\">$a->url</a> 파일을 다운로드 하고, 서버의 \"$a->dest\"에 복사한 다음 거기서 압축을 해제하십시요.';
$string['report'] = '보고서';
$string['restricted'] = '제한됨';
$string['safemode'] = '안전모드';
$string['safemodeerror'] = '아마 안전모드(Safe Mode)가 작동되어서 문제가 생겼을 것입니다.';
$string['safemodehelp'] = '<p>무들은 safe mode on 상태에서는 작동이 원활하지 않을 텐데, 아마 그 중 하나가 새로운 파일을 못 만들게 하는 문제일 것입니다.</p>
<p>Safe mode는 일단의 보안 편집증적인 웹호스트에서 이를 켜 놓을 것인데, 무들 사이트를 원활히 운용하기 위해서는 새로운 웹호스트를 찾아보시는 편이 나을 겁니다.</p>
<p>원한다면 설치는 계속할 수는 있는데, 나중에 문제에 봉착할 것이라는 점을 염두에 두기 바랍니다.</p>';
$string['serverchecks'] = '서버 점검';
$string['sessionautostart'] = '세션 자동 시작';
$string['sessionautostarterror'] = '이것은 꺼져 있어야(Off) 합니다.';
$string['sessionautostarthelp'] = '<p>무들은 세션의 지원이 필요하고 그것 없이는 작동하지 않을 것 입니다.</p>
<P>세션은 php.ini 파일 안에서 조정될 수 있습니다. session.auto_start 항목을 살펴보세요.</p>';
$string['skipdbencodingtest'] = 'DB 엔코딩 테스트 생략';
$string['status'] = '상태';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = '한국어';
$string['unicoderecommended'] = '모든 자료를 유니코드(UTF-8)로 저장해야 합니다. 새 설정은 기본 문자코드가 유니코드로 저장되어 있다고 가정하고 작동이 됩니다. 만일 업그레이드 중이라면 반드시 UTF-8 변환과정을 수행하여야만 합니다.(관리화면 참조)';
$string['unicoderequired'] = '모든 자료가 유니코드(UTF-8)로 저장되야 합니다. 새 설정은 기본 문자코드가 유니코드로 저장되어 있다고 가정하고 작동이 됩니다. 만일 업그레이드 중이라면 반드시 UTF-8 변환과정을 수행하여야만 합니다.(관리화면 참조)';
$string['user'] = '이용자';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = '당신의 컴퓨터에 <strong>$a->packname $a->packversion</strong> 패키지를 성공적으로 설치한 것을 축하합니다!';
$string['welcomep30'] = '<strong>$a->installername</strong> 의 이 릴리스는 <strong>무들</strong>이 그 속에서 동작하는 환경을 생성하기 위한 어플리케이션을 포함하고 있습니다.';
$string['welcomep40'] = '이 패키지는 <strong>무들 $a->moodlerelease ($a->moodleversion)</strong> 을 포함하고 있습니다.';
$string['welcomep50'] = '이 패키지에 있는 모든 어플리케이션을 사용하는 것은 각각의 라이센스에의해 지배받습니다. 완전한<strong>$a->installername</strong> 패키지는
<a href=\"http://www.opensource.org/docs/definition_plain.html\">공개 소스이며 </a> <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a> 라이선스에 의해 배포됩니다.';
$string['welcomep60'] = '다음 페이지들은 당신의 컴퓨터에 <strong>무들</strong>을 설정하고 설치하는 길라잡이 역할을 할 것입니다. 기본 설정을 선택하거나 목적에 맞게 선택적으로 수정할 수 있습니다.';
$string['welcomep70'] = '<strong>무들</strong> 설정을 계속하기 위해서는 \"다음\" 버튼을 클릭하세요.';
$string['wrongdestpath'] = '잘못된 목적 경로';
$string['wrongsourcebase'] = '잘못된 소스 URL  베이스';
$string['wrongzipfilename'] = '잘못된 ZIP 파일명';
$string['wwwroot'] = '웹 주소';
$string['wwwrooterror'] = '이 웹 주소는 유효한 것 같지 않습니다 - 무들 설치 프로그램이 거기에 없습니다.';
$string['xmlrpcrecommended'] = '추가적인 xmlrpc 확장 설치는 무들 네트웍이 제대로 작동하는 데 쓸모가 있습니다.';
$string['ziprequired'] = '더 이상  info-ZIP 이나 PclZip 라이브러리가 사용되지 않으므로 Zip PHP확장자가 필요합니다.';
?>
