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
include_once '../objects/cat_categoria.php';
include_once '../token/validatetoken.php';



//******************************************************************************
// get database connection
$database = new Database();
$db = $database->getConnection();


// *****************************************************************************
//Initialize Response Class.
$response = new Response();



//******************************************************************************
// prepare cat_categoria object
$cat_categoria = new Cat_Categoria($db);



//******************************************************************************
// get cat_categoria id
$data = json_decode(file_get_contents("php://input"));



//******************************************************************************
// set cat_categoria id to be deleted
$cat_categoria->_id = $data->_id;



//******************************************************************************
// delete the cat_categoria
if($cat_categoria->delete()){
  $response->success("Cat_Categoria was deleted", $data);
}



//******************************************************************************
//Error deleting the record
$response->error("Unable to delete cat_categoria.", $data);



?>

