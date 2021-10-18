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
