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



// Include usuario object & tokenvalidation
include_once '../objects/usuario.php';
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
$usuario = new Usuario($db);



// *****************************************************************************
// get posted data
$data = json_decode(file_get_contents("php://input"));



// *****************************************************************************
// make sure data is not empty
if(!isEmpty($data->nombre)
&&!isEmpty($data->correo)
&&!isEmpty($data->login_password)
&&!isEmpty($data->login_salt)
&&!isEmpty($data->admin)
&&!isEmpty($data->activo)){

  // *****************************************************************************
  // set usuario property values
  
if(!isEmpty($data->nombre)) { 
$usuario->nombre = $data->nombre;
} else { 
$usuario->nombre = '';
}
if(!isEmpty($data->correo)) { 
$usuario->correo = $data->correo;
} else { 
$usuario->correo = '';
}
if(!isEmpty($data->login_password)) { 
$usuario->login_password = $data->login_password;
} else { 
$usuario->login_password = '';
}
if(!isEmpty($data->login_salt)) { 
$usuario->login_salt = $data->login_salt;
} else { 
$usuario->login_salt = '';
}
if(!isEmpty($data->admin)) { 
$usuario->admin = $data->admin;
} else { 
$usuario->admin = '2';
}
if(!isEmpty($data->activo)) { 
$usuario->activo = $data->activo;
} else { 
$usuario->activo = '1';
}
  $inserted = $usuario->create();



  // *****************************************************************************
  // If the created usuario failed, return error
  if( $inserted == 0 ){
    $response->error('Unable to create usuario', [
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
    $response->error('Unable to create usuario', [
      "data" => $data,
      "info" => 'Data is incomplete or not correct.'
    ]);
}







?>

