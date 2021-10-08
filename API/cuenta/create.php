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



// Include cuenta object & tokenvalidation
include_once '../objects/cuenta.php';
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
$cuenta = new Cuenta($db);



// *****************************************************************************
// get posted data
$data = json_decode(file_get_contents("php://input"));



// *****************************************************************************
// make sure data is not empty
if(!isEmpty($data->id_categoria)
&&!isEmpty($data->cuenta)
&&!isEmpty($data->descripcion)
&&!isEmpty($data->color)
&&!isEmpty($data->activo)){

  // *****************************************************************************
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
  $inserted = $cuenta->create();



  // *****************************************************************************
  // If the created cuenta failed, return error
  if( $inserted == 0 ){
    $response->error('Unable to create cuenta', [
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
    $response->error('Unable to create cuenta', [
      "data" => $data,
      "info" => 'Data is incomplete or not correct.'
    ]);
}







?>

