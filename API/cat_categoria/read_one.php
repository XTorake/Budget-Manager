<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');


include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/cat_categoria.php';
include_once '../token/validatetoken.php';



// get database connection
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();





// prepare cat_categoria object
$cat_categoria = new Cat_Categoria($db);


// set ID property of record to read
$cat_categoria->_id = isset($_GET['id']) ? $_GET['id'] : $response->error('Request id missing.');


// read the details of cat_categoria to be edited
$result = $cat_categoria->readOne();


if( $cat_categoria->_id === null ){
  $response->error("cat_categoria does not exist.");
}


$response->success("cat_categoria found", [ "data" => $result ] );

?>

