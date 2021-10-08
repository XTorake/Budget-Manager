<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once '../config/helper.php';



// get database connection
include_once '../config/helper.php';
include_once '../config/database.php';



// Include cat_categoria object & tokenvalidation
include_once '../objects/cat_categoria.php';
include_once '../token/validatetoken.php';



// *****************************************************************************
//Initialize the classes.
$database = new Database();


// *****************************************************************************
//Initialize Response Class.
$response = new Response();



// *****************************************************************************
//Initialize the table class.
$db = $database->getConnection();
$cat_categoria = new Cat_Categoria($db);



// *****************************************************************************
// get posted data
$data = json_decode(file_get_contents("php://input"));



// *****************************************************************************
// make sure data is not empty
if(!isEmpty($data->categoria)
&&!isEmpty($data->activo)){

  // *****************************************************************************
  // set cat_categoria property values
  
if(!isEmpty($data->categoria)) { 
$cat_categoria->categoria = $data->categoria;
} else { 
$cat_categoria->categoria = '';
}
if(!isEmpty($data->activo)) { 
$cat_categoria->activo = $data->activo;
} else { 
$cat_categoria->activo = '1';
}
  $inserted = $cat_categoria->create();



  // *****************************************************************************
  // If the created cat_categoria failed, return error
  if( $inserted == 0 ){
    $response->error('Unable to create cat_categoria', [
      "data" => $data,
      "info" => 'Could not create the record.'
    ]);
  }



  // *****************************************************************************
  // Successfully created the record
  $response->success('Created Successfully', [
    "data" => $data,
    "info" => "Record successfully created",
    "inserted_id" => $inserted
  ]);


}else{
    $response->error('Unable to create cat_categoria', [
      "data" => $data,
      "info" => 'Data is incomplete or not correct.'
    ]);
}







?>

