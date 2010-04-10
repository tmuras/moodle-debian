# Regular cron jobs for the moodle package
*/15 * * * * www-data [ -f /usr/share/moodle/admin/cron.php ] && /usr/bin/php -f /usr/share/moodle/admin/cron.php > /dev/null
