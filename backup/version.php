<?php  //$Id: version.php,v 1.114.2.4 2008/03/03 11:55:15 moodler Exp $

/// This file defines the current version of the
/// backup/restore code that is being used.  This can be
/// compared against the values stored in the 
/// database (backup_version) to determine whether upgrades should
/// be performed (see db/backup_*.php)

    $backup_version = 2008030300;   // The current version is a date (YYYYMMDDXX)
    $backup_release = '1.9';     // User-friendly version number

?>
