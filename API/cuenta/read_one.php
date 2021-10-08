<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/cuenta.php';
include_once '../token/validatetoken.php';



// get database connection
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();





// prepare cuenta object
$cuenta = new Cuenta($db);


// set ID property of record to read
$cuenta->_id = isset($_GET['id']) ? $_GET['id'] : $response->error('Request id missing.');


// read the details of cuenta to be edited
$result = $cuenta->readOne();


if( $cuenta->_id === null ){
  $response->error("cuenta does not exist.");
}


$response->success("cuenta found", [ "data" => $result ] );

?>

