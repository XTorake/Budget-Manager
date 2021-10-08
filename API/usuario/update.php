<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/usuario.php';
include_once '../token/validatetoken.php';


// get database connection
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();




// prepare usuario object
$usuario = new Usuario($db);

// get id of usuario to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of usuario to be edited
$usuario->_id = $data->_id;



//Validate if all the data was sent
if(!isEmpty($data->nombre)
&&!isEmpty($data->correo)
&&!isEmpty($data->login_password)
&&!isEmpty($data->login_salt)
&&!isEmpty($data->admin)
&&!isEmpty($data->activo)){

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




  // Attempt to update the table, if any error appears, response error is sent.
  if( !$usuario->update() ){
    $response->error("Unable to update usuario", $data);
  }



  //Response of success
  $response->success("Updated Successfully", $data);



}else{
  $response->error('Missing parameters', $data);
}







?>

