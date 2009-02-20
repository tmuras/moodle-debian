<?php // $Id: version.php,v 1.39.2.3 2008/11/26 14:30:23 thepurpleblob Exp $
/**
 * Code fragment to define the version of lesson
 * This fragment is called by moodle_needs_upgrading() and /admin/index.php
 *
 * @version $Id: version.php,v 1.39.2.3 2008/11/26 14:30:23 thepurpleblob Exp $
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package lesson
 **/

$module->version  = 2008112600;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2007101509;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

?>
