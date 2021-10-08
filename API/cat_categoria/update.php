<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



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

// get id of cat_categoria to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of cat_categoria to be edited
$cat_categoria->_id = $data->_id;



//Validate if all the data was sent
if(!isEmpty($data->categoria)
&&!isEmpty($data->activo)){

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




  // Attempt to update the table, if any error appears, response error is sent.
  if( !$cat_categoria->update() ){
    $response->error("Unable to update cat_categoria", $data);
  }



  //Response of success
  $response->success("Updated Successfully", $data);



}else{
  $response->error('Missing parameters', $data);
}







?>

