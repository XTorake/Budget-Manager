<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



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

// get id of cuenta to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of cuenta to be edited
$cuenta->_id = $data->_id;



//Validate if all the data was sent
if(!isEmpty($data->id_categoria)
&&!isEmpty($data->cuenta)
&&!isEmpty($data->descripcion)
&&!isEmpty($data->color)
&&!isEmpty($data->activo)){

  // set cuenta property values
  
if(!isEmpty($data->id_categoria)) { 
$cuenta->id_categoria = $data->id_categoria;
} else { 
$cuenta->id_categoria = '';
}
if(!isEmpty($data->cuenta)) { 
$cuenta->cuenta = $data->cuenta;
} else { 
$cuenta->cuenta = '';
}
if(!isEmpty($data->descripcion)) { 
$cuenta->descripcion = $data->descripcion;
} else { 
$cuenta->descripcion = '';
}
if(!isEmpty($data->color)) { 
$cuenta->color = $data->color;
} else { 
$cuenta->color = '';
}
if(!isEmpty($data->activo)) { 
$cuenta->activo = $data->activo;
} else { 
$cuenta->activo = '1';
}




  // Attempt to update the table, if any error appears, response error is sent.
  if( !$cuenta->update() ){
    $response->error("Unable to update cuenta", $data);
  }



  //Response of success
  $response->success("Updated Successfully", $data);



}else{
  $response->error('Missing parameters', $data);
}







?>

