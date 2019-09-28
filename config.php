<?php

// fehler in datei schreiben
ini_set('display_errors', 0);
ini_set('error_log', '/.../log/error.txt');
ini_set('log_errors', 'On');
ini_set('error_reporting', E_ALL); 
// error_reporting(E_ALL);
ini_set('session.gc_probability', 0);

// ausgabe-puffer
ob_start('ob_gzhandler');

?>
