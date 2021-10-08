<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/movimiento.php';
include_once '../token/validatetoken.php';


// get database connection
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();




// prepare movimiento object
$movimiento = new Movimiento($db);

// get id of movimiento to be edited
$data = json_decode(file_get_contents("php://input"));

// set ID property of movimiento to be edited
$movimiento->_id = $data->_id;



//Validate if all the data was sent
if(!isEmpty($data->id_cuenta)
&&!isEmpty($data->id_usuario)
&&!isEmpty($data->fecha)
&&!isEmpty($data->monto)
&&!isEmpty($data->descripcion)
&&!isEmpty($data->es_gasto)
&&!isEmpty($data->visto)
&&!isEmpty($data->activo)){

  // set movimiento property values
  
if(!isEmpty($data->id_cuenta)) { 
$movimiento->id_cuenta = $data->id_cuenta;
} else { 
$movimiento->id_cuenta = '';
}
if(!isEmpty($data->id_usuario)) { 
$movimiento->id_usuario = $data->id_usuario;
} else { 
$movimiento->id_usuario = '';
}
if(!isEmpty($data->fecha)) { 
$movimiento->fecha = $data->fecha;
} else { 
$movimiento->fecha = '';
}
if(!isEmpty($data->monto)) { 
$movimiento->monto = $data->monto;
} else { 
$movimiento->monto = '';
}
if(!isEmpty($data->descripcion)) { 
$movimiento->descripcion = $data->descripcion;
} else { 
$movimiento->descripcion = '';
}
if(!isEmpty($data->es_gasto)) { 
$movimiento->es_gasto = $data->es_gasto;
} else { 
$movimiento->es_gasto = '1';
}
if(!isEmpty($data->visto)) { 
$movimiento->visto = $data->visto;
} else { 
$movimiento->visto = '2';
}
if(!isEmpty($data->activo)) { 
$movimiento->activo = $data->activo;
} else { 
$movimiento->activo = '1';
}




  // Attempt to update the table, if any error appears, response error is sent.
  if( !$movimiento->update() ){
    $response->error("Unable to update movimiento", $data);
  }



  //Response of success
  $response->success("Updated Successfully", $data);



}else{
  $response->error('Missing parameters', $data);
}







?>

