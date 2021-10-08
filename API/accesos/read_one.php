<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/accesos.php';
include_once '../token/validatetoken.php';



// get database connection
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();





// prepare accesos object
$accesos = new Accesos($db);


// set ID property of record to read
$accesos->_id = isset($_GET['id']) ? $_GET['id'] : $response->error('Request id missing.');


// read the details of accesos to be edited
$result = $accesos->readOne();


if( $accesos->_id === null ){
  $response->error("accesos does not exist.");
}


$response->success("accesos found", [ "data" => $result ] );

?>

