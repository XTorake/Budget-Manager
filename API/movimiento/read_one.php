<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/movimiento.php';
include_once '../token/validatetoken.php';



// get database connection
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();





// prepare movimiento object
$movimiento = new Movimiento($db);


// set ID property of record to read
$movimiento->_id = isset($_GET['id']) ? $_GET['id'] : $response->error('Request id missing.');


// read the details of movimiento to be edited
$result = $movimiento->readOne();


if( $movimiento->_id === null ){
  $response->error("movimiento does not exist.");
}


$response->success("movimiento found", [ "data" => $result ] );

?>

