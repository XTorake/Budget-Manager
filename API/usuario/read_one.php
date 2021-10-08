<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/usuario.php';
include_once '../token/validatetoken.php';



// get database connection
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();





// prepare usuario object
$usuario = new Usuario($db);


// set ID property of record to read
$usuario->_id = isset($_GET['id']) ? $_GET['id'] : $response->error('Request id missing.');


// read the details of usuario to be edited
$result = $usuario->readOne();


if( $usuario->_id === null ){
  $response->error("usuario does not exist.");
}


$response->success("usuario found", [ "data" => $result ] );

?>

