<?php

// EXAMPLE LOGIN FILE,
// SET THE SESSION VARIABLES SPECIFIED IN THE config.php file...


session_start();
require_once('../config.php');

$_SESSION[SESSION_VAR] = [ IS_ADMIN => isset($_GET['admin']) ];

header('Location: ../');
?>
