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
include_once '../objects/cuenta.php';
include_once '../token/validatetoken.php';



//******************************************************************************
// get database connection
$database = new Database();
$db = $database->getConnection();


// *****************************************************************************
//Initialize Response Class.
$response = new Response();



//******************************************************************************
// prepare cuenta object
$cuenta = new Cuenta($db);



//******************************************************************************
// get cuenta id
$data = json_decode(file_get_contents("php://input"));



//******************************************************************************
// set cuenta id to be deleted
$cuenta->_id = $data->_id;



//******************************************************************************
// delete the cuenta
if($cuenta->delete()){
  $response->success("Cuenta was deleted", $data);
}



//******************************************************************************
//Error deleting the record
$response->error("Unable to delete cuenta.", $data);



?>

