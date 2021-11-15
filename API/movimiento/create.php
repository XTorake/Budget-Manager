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



// Include movimiento object & tokenvalidation
include_once '../objects/movimiento.php';
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
$movimiento = new Movimiento($db);



// *****************************************************************************
// get posted data
$data = json_decode(file_get_contents("php://input"));



// *****************************************************************************
// make sure data is not empty
if(!isEmpty($data->id_cuenta)
&&!isEmpty($data->id_usuario)
&&!isEmpty($data->fecha)
&&!isEmpty($data->monto)
&&!isEmpty($data->descripcion)
&&!isEmpty($data->es_gasto)
&&!isEmpty($data->visto)
&&!isEmpty($data->activo)){

  // *****************************************************************************
  // set movimiento property values
  $movimiento->id_cuenta = $data->id_cuenta;
  $movimiento->id_usuario = $data->id_usuario;
  $movimiento->fecha = $data->fecha;
  $movimiento->monto = $data->monto;
  $movimiento->descripcion = $data->descripcion;
  $movimiento->es_gasto = $data->es_gasto;
  $movimiento->visto = $data->visto;
  $movimiento->activo = $data->activo;
  
  $inserted = $movimiento->create();



  // *****************************************************************************
  // If the created movimiento failed, return error
  if( $inserted == 0 ){
    $response->error('Unable to create movimiento', [
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
    $response->error('Unable to create movimiento', [
      "data" => $data,
      "info" => 'Data is incomplete or not correct.'
    ]);
}







?>
