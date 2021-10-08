<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



//******************************************************************************
//include required files.
include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/accesos.php';
include_once '../token/validatetoken.php';



//******************************************************************************
// get database connection
$database = new Database();
$db = $database->getConnection();


// *****************************************************************************
//Initialize Response Class.
$response = new Response();



//******************************************************************************
// prepare accesos object
$accesos = new Accesos($db);



//******************************************************************************
// get accesos id
$data = json_decode(file_get_contents("php://input"));



//******************************************************************************
// set accesos id to be deleted
$accesos->_id = $data->_id;



//******************************************************************************
// delete the accesos
if($accesos->delete()){
  $response->success("Accesos was deleted", $data);
}



//******************************************************************************
//Error deleting the record
$response->error("Unable to delete accesos.", $data);



?>

