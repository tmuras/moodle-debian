<?php // $Id: version.php,v 1.26.2.2 2008/12/16 04:54:26 dongsheng Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of chat
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2007101510;   // The (date) version of this module
$module->requires = 2007101509;  // Requires this Moodle version
$module->cron     = 300;          // How often should cron check this module (seconds)?

?>
