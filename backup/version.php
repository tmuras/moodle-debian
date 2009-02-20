<?php  //$Id: version.php,v 1.114.2.5 2008/11/16 23:38:27 stronk7 Exp $

/// This file defines the current version of the
/// backup/restore code that is being used.  This can be
/// compared against the values stored in the 
/// database (backup_version) to determine whether upgrades should
/// be performed (see db/backup_*.php)

    $backup_version = 2008030301;   // The current version is a date (YYYYMMDDXX)
    $backup_release = '1.9.3';     // User-friendly version number

?>
