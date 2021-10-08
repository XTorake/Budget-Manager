<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/accesos.php';
include_once '../token/validatetoken.php';


// get database connection
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();




// prepare accesos object
$accesos = new Accesos($db);

// get id of accesos to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of accesos to be edited
$accesos->_id = $data->_id;



//Validate if all the data was sent
if(!isEmpty($data->id_usuario)
&&!isEmpty($data->id_cuenta)
&&!isEmpty($data->lectura)
&&!isEmpty($data->escritura)
&&!isEmpty($data->modificar)
&&!isEmpty($data->activo)){

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




  // Attempt to update the table, if any error appears, response error is sent.
  if( !$accesos->update() ){
    $response->error("Unable to update accesos", $data);
  }



  //Response of success
  $response->success("Updated Successfully", $data);



}else{
  $response->error('Missing parameters', $data);
}







?>

