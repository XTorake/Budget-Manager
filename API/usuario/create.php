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
&&!isEmpty($data->admin)){

  // *****************************************************************************
  // set usuario property values

  $usuario->nombre = $data->nombre;
  $usuario->correo = $data->correo;
  $usuario->admin = $data->admin;
  $usuario->activo = 1;


  $usuario->login_salt = $usuario->gensalt();
  $usuario->login_password = $usuario->HashPassword($data->login_password, $usuario->login_salt);
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
