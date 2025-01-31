<?php
header("Cache-Control: no-cache, must-revalidate, max-age=0");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Pragma: no-cache");

require 'function.php';
$_SESSION = [];
session_unset();
session_destroy();
header("Location: login.php");
exit;
?>