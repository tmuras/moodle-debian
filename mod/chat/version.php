<?php // $Id: version.php,v 1.26.2.1 2008/03/03 11:48:39 moodler Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of chat
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2007101509;   // The (date) version of this module
$module->requires = 2007101509;  // Requires this Moodle version
$module->cron     = 300;          // How often should cron check this module (seconds)?

?>
