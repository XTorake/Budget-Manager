<?php
//FIRST, START THE SESSION
session_start();



// Include the configuration File
require_once('config.php');


// Include and Initialize the view Handler
require_once(MODEL.'class.ViewHandler.php');
$vh = new ViewHandler();


// RENDER THE ACTUAL VIEW
$vh->__getView();



?>
