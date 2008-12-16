<?PHP // $Id: error.php,v 1.26.2.16 2008/09/08 02:41:40 moodler Exp $
      // error.php - created with Moodle 1.7 beta + (2006101003)


$string['adminprimarynoedit'] = 'The primary admin cannot be edited by others';
$string['cannotassignrole'] = 'Cannot assign role in course';
$string['cannotcreatelangdir'] = 'Cannot create lang directory';
$string['cannotcreatetempdir'] = 'Cannot create temp directory';
$string['cannotcustomizelocallang'] = 'You do not have permission to customize the strings translation.  This permission is controlled by the capability "moodle/site:langeditlocal". Set this capability to allow you to edit local language packages in case you want to modify translations for your site.';
$string['cannotdownloadcomponents'] = 'Cannot download components';
$string['cannotdownloadlanguageupdatelist'] = 'Cannot download list of language updates from download.moodle.org';
$string['cannotdownloadzipfile'] = 'Cannot download ZIP file';
$string['cannoteditmasterlang'] = 'You do not have permission to edit master language package. This permission is controlled by the capability "moodle/site:langeditmaster". Set this capability to allow you to edit master language packages in case you are the maintainer of a package.';
$string['cannotfindcomponent'] = 'Cannot find component';
$string['cannotinsertrecord'] = 'Could not insert new record ID $a';
$string['cannotsavemd5file'] = 'Cannot save md5 file';
$string['cannotsavezipfile'] = 'Cannot save ZIP file';
$string['cannotunzipfile'] = 'Cannot unzip file';
$string['cannotupdaterecord'] = 'Could not update record ID $a';
$string['cannotviewprofile'] = 'You cannot view the profile of this user';
$string['cantunenrollfrommetacourse'] = 'You cannot unenrol from this meta course';
$string['cantunenrollinthisrole'] = 'You cannot unenrol from this course while you are in your current role';
$string['cmunknown'] = 'Couldn\'t find this course module';
$string['componentisuptodate'] = 'Component is up-to-date';
$string['confirmsesskeybad'] = 'Sorry, but your session key could not be confirmed to carry out this action.  This security feature prevents against accidental or malicious execution of important functions in your name.  Please make sure you really wanted to execute this function.';
$string['couldnotassignrole'] = 'A serious but unspecified error occurred while trying to assign a role to you';
$string['coursegroupunknown'] = 'Course corresponding to group $a not specified';
$string['csvemptyfile'] = 'The CSV file is empty';
$string['csvcolumnduplicates'] = 'Duplicate columns detected';
$string['csvfewcolumns'] = 'Not enough columns, please verify the delimiter setting';
$string['csvweirdcolumns'] = 'Invalid CSV file format - number of columns is not constant!';
$string['dbupdatefailed'] = 'Database update failed';
$string['downloadedfilecheckfailed'] = 'Downloaded file check failed';
$string['duplicateusername'] = 'Duplicate username - skipping record';
$string['errorcleaningdirectory'] = 'Error cleaning directory \"$a\"';
$string['errorcopyingfiles'] = 'Error copying files';
$string['errorcreatingdirectory'] = 'Error creating directory \"$a\"';
$string['errorcreatingfile'] = 'Error creating file \"$a\"';
$string['erroronline'] = 'Error on line $a';
$string['errorreadingfile'] = 'Error reading file \"$a\"';
$string['errorunzippingfiles'] = 'Error unzipping files';
$string['fieldrequired'] = '\"$a\" is a required field';
$string['filenotfound'] = 'Sorry, the requested file could not be found';
$string['forumblockingtoomanyposts'] = 'You have exceeded the posting threshold set for this forum';
$string['groupalready'] = 'User already belongs to group $a';
$string['groupexistforcourse'] = 'Group \"$a\" already exists for this course';
$string['groupnotaddederror'] = 'Group \"$a\" not added';
$string['groupunknown'] = 'Group $a not associated to specified course';
$string['guestnoeditprofile'] = 'The guest user cannot edit their profile';
$string['guestnoeditprofileother'] = 'The guest user profile cannot be edited';
$string['invalidcontext'] = 'Invalid context';
$string['invalidcourse'] = 'Invalid course';
$string['invalidcourseid'] = 'You are trying to use an invalid course ID ($a)';
$string['invalidcoursemodule'] = 'Invalid course module ID';
$string['invalidfieldname'] = '\"$a\" is not a valid field name';
$string['invalidfiletype'] = '\"$a\" is not a valid file type';
$string['invalidipformat'] = 'Invalid IP address format';
$string['invalidmd5'] = 'Invalid md5';
$string['invalidrequest'] = 'Invalid request';
$string['invalidrole'] = 'Invalid role';
$string['invalidsesskey'] = 'Incorrect sesskey submitted, form not accepted!';
$string['invalidurl'] = 'Invalid URL';
$string['iplookupfailed'] = 'Cannot find geo information about this IP address $a';
$string['iplookupprivate'] = 'Cannot display lookup of private IP address';
$string['invalidxmlfile'] = '\"$a\" is not a valid XML file';
$string['listnopeers'] = 'No peers of item found';
$string['listnoitem'] = 'Item not found';
$string['listnochildren'] = 'No children of item found';
$string['listupdatefail'] = 'DB operation failed when editing list hierarchy';
$string['listcantmoveup'] = 'Failed to move the item up, as it is the first of it\'s peers';
$string['listcantmovedown'] = 'Failed to move item down, as it is the last of it\'s peers';
$string['listcantmoveleft'] = 'Failed to move item left, as it has no parent';
$string['listcantmoveright'] = 'Failed to move item right, as there is no peer to make it a child of. Move it below another peer and then you can move it right.';
$string['loginasonecourse'] = 'You cannot enter this course.<br /> You have to terminate the \"Login as\" session before entering any other course.';
$string['loginasnoenrol'] = 'You can not use enrol or unenrol when in course \"Login as\" session';
$string['missingfield'] = 'Field \"$a\" is missing';
$string['missingrequiredfield'] = 'A required field is missing';
$string['modulemissingcode'] = 'Module $a is missing the code needed to perform this function';
$string['modulerequirementsnotmet'] = 'Module \"$a->modulename\" ($a->moduleversion) could not be installed.  It requires a newer version of Moodle (currently you are using $a->currentmoodle, you need $a->requiremoodle).';
$string['mustbeteacher'] = 'You must be a teacher to view this page';
$string['nocategorydelete'] = 'Category \'$a\' cannot be deleted!';
$string['nocontext'] = 'Sorry, but that course is not a valid context';
$string['noinstances'] = 'There are no instances of $a in this course!';
$string['nologinas'] = 'You are not allowed to login as that user';
$string['nonmeaningfulcontent'] = 'Non-meaningful content';
$string['noparticipatorycms'] = 'Sorry, but you have no participatory course modules to report on';
$string['nopermissions'] = 'Sorry, but you do not currently have permissions to do that ($a)';
$string['notavailable'] = 'That is not currently available';
$string['nostatstodisplay'] = 'Sorry, there is no available data to display';
$string['onlyadmins'] = 'Only administrators can do that';
$string['onlyeditingteachers'] = 'Only editing teachers can do that';
$string['onlyeditown'] = 'You can only edit your own information';
$string['pagenotexist'] = 'An unusual error occurred (tried to reach a page that doesn\'t exist)';
$string['pleasereport'] = 'If you have time, please let us know what you were trying to do when the error occurred:';
$string['pluginrequirementsnotmet'] = 'Plugin \"$a->pluginname\" ($a->pluginversion) could not be installed.  It requires a newer version of Moodle (currently you are using $a->currentmoodle, you need $a->requiremoodle).';
$string['processingstops'] = 'Processing stops here. Remaining records ignored.';
$string['remotedownloaderror'] = 'Download of component to your server failed, please verify proxy settings, PHP cURL extension is highly recommended.<br /><br />You must download the <a href=\"$a->url\">$a->url</a> file manually, copy it to \"$a->dest\" in your server and unzip it there.';
$string['remotedownloadnotallowed'] = 'Download of components to your server isn\'t allowed (allow_url_fopen is disabled).<br /><br />You must download the <a href=\"$a->url\">$a->url</a> file manually, copy it to \"$a->dest\" in your server and unzip it there.';
$string['restricteduser'] = 'Sorry, but your current account \"$a\" is restricted from doing that';
$string['scheduledbackupsdisabled'] = 'Scheduled backups have been disabled by the server admin';
$string['sendmessage'] = 'Send Message';
$string['sessionerroruser'] = 'Your session has timed out.  Please login again.';
$string['sessionerroruser2'] = 'A server error that affects your login session was detected. Please login again or restart your browser.';
$string['sessionipnomatch'] = 'Sorry, but your IP number seems to have changed from when you first logged in.  This security feature prevents crackers stealing your identity while logged in to this site.  Normal users should not be seeing this message - please ask the site administrator for help.';
$string['socksnotsupported'] = 'SOCKS5 proxy is not supported in PHP4';
$string['statscatchupmode'] = 'Statistics is currently in catchup mode. So far $a->daysdone day(s) have been processed and $a->dayspending are pending. Check back soon!';
$string['tagnotfound'] = 'The specified tag was not found in the database';
$string['unicodeupgradeerror'] = 'Sorry, but your database is not already in Unicode, and this version of Moodle is not able to migrate your database to Unicode.  Please upgrade to Moodle 1.7.x first and perform the Unicode migration from the Admin page.  After that is done you should be able to migrate to Moodle $a';
$string['unknowncourse'] = 'Unknown course named \"$a\"';
$string['unknowncourseidnumber'] = 'Unknown Course ID \"$a\"';
$string['unknowngroup'] = 'Unknown group \"$a\"';
$string['unknownrole'] = 'Unknown role \"$a\"';
$string['unknownuseraction'] = 'Sorry, I do not understand this user action';
$string['userautherror'] = 'Unknown auth plugin';
$string['userauthunsupported'] = 'Auth plugin not supported here';
$string['useremailduplicate'] = 'Duplicate address';
$string['usernotaddedadmin'] = 'Can not delete admin accounts';
$string['usernotaddederror'] = 'User not added - error';
$string['usernotaddedregistered'] = 'User not added - already registered';
$string['usernotdeletederror'] = 'User not deleted - error';
$string['usernotdeletedmissing'] = 'User not deleted - could not find the username';
$string['usernotdeletedoff'] = 'User not deleted - deleting not allowed';
$string['usernotavailable'] = 'The details of this user are not available to you';
$string['usernotrenamedadmin'] = 'Cannot rename admin accounts';
$string['usernotrenamedexists'] = 'User not renamed - the new username is already in use';
$string['usernotrenamedmissing'] = 'User not renamed - could not find the old username';
$string['usernotrenamedoff'] = 'User not renamed - renaming not allowed';
$string['usernotupdatedadmin'] = 'Cannot update admin accounts';
$string['usernotupdatederror'] = 'User not updated - error';
$string['usernotupdatednotexists'] = 'User not updated - does not exist';
$string['wrongdestpath'] = 'Wrong destination path';
$string['wrongsourcebase'] = 'Wrong source URL base';
$string['wrongzipfilename'] = 'Wrong ZIP file name';

?>
