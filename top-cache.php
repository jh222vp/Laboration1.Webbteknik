<?php
/*http://www.catswhocode.com/blog/how-to-create-a-simple-and-efficient-php-cache */

$url = $_SERVER["SCRIPT_NAME"];
$cachefile = 'cache.json';
$cachetime = 18000;

// Serve from the cache if it is younger than $cachetime
if (file_exists($cachefile) && time() - $cachetime < filemtime($cachefile)) {
    echo "Cached copy, generated ".date('H:i', filemtime($cachefile));
    require_once($cachefile);
    exit;
}
ob_start(); // Start the output buffer
?>