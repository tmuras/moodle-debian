<?php  //$Id: settings.php,v 1.1.2.2 2007/12/19 17:38:49 skodak Exp $

$settings->add(new admin_setting_configtext('scorm_framewidth', get_string('width', 'scorm'),
                   get_string('framewidth', 'scorm'), '100%'));

$settings->add(new admin_setting_configtext('scorm_frameheight', get_string('height', 'scorm'),
                   get_string('frameheight', 'scorm'), 500));

?>
