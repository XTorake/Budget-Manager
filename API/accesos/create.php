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



// Include accesos object & tokenvalidation
include_once '../objects/accesos.php';
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
$accesos = new Accesos($db);



// *****************************************************************************
// get posted data
$data = json_decode(file_get_contents("php://input"));



// *****************************************************************************
// make sure data is not empty
if(!isEmpty($data->id_usuario)
&&!isEmpty($data->id_cuenta)
&&!isEmpty($data->lectura)
&&!isEmpty($data->escritura)
&&!isEmpty($data->modificar)
&&!isEmpty($data->activo)){

  // *****************************************************************************
  // set accesos property values
  
if(!isEmpty($data->id_usuario)) { 
$accesos->id_usuario = $data->id_usuario;
} else { 
$accesos->id_usuario = '';
}
if(!isEmpty($data->id_cuenta)) { 
$accesos->id_cuenta = $data->id_cuenta;
} else { 
$accesos->id_cuenta = '';
}
if(!isEmpty($data->lectura)) { 
$accesos->lectura = $data->lectura;
} else { 
$accesos->lectura = '1';
}
if(!isEmpty($data->escritura)) { 
$accesos->escritura = $data->escritura;
} else { 
$accesos->escritura = '2';
}
if(!isEmpty($data->modificar)) { 
$accesos->modificar = $data->modificar;
} else { 
$accesos->modificar = '2';
}
if(!isEmpty($data->activo)) { 
$accesos->activo = $data->activo;
} else { 
$accesos->activo = '1';
}
  $inserted = $accesos->create();



  // *****************************************************************************
  // If the created accesos failed, return error
  if( $inserted == 0 ){
    $response->error('Unable to create accesos', [
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
    $response->error('Unable to create accesos', [
      "data" => $data,
      "info" => 'Data is incomplete or not correct.'
    ]);
}







?>

