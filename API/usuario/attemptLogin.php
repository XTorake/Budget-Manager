<?php
//start the session.
session_start();

// required headers
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: access");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Credentials: true");
header('Content-Type: application/json');

//include the required classes.
include '../../config.php';
include_once '../config/database.php';
include_once '../objects/usuario.php';
include_once '../token/validatetoken.php';



// get database connection
$database = new Database();
$db = $database->getConnection();

// prepare entidad object
$usuario = new Usuario($db);

// get posted data
$data = json_decode(file_get_contents("php://input"));


if(!empty($data->password)
&&!empty($data->correo)){

    $usuario->correo = $data->correo;
    $usuario->readOneEmail();

    if($usuario->login_salt != null){

        AttemptLogin($usuario, $data);

    }else{

        // set response code - 400
        http_response_code(400);

        // tell the user entidad does not exist
        echo json_encode(array("status" => "error", "code" => 0,"message"=> "There is no account with this email: ".$data->correo, "document"=> ""));

    }



}else{
    // set response code - 404 Not found
    http_response_code(400);

    // tell the user entidad does not exist
    echo json_encode(array("status" => "error", "code" => 0 ,"message"=> "Data missing","document"=> ""));
}





function AttemptLogin($usuario, $data){

    $usuario->correo_principal = $data->correo;
    $usuario->login_password = $usuario->HashPassword(
        $data->password,
        $usuario->login_salt
    );


    // read the details of entidad to be edited
    $user_data = $usuario->attemptLogin();


    if($user_data){

        $_SESSION[SESSION_VAR] = $user_data;

        // set response code - 200 OK
        http_response_code(200);
        // make it json format
        echo json_encode(array("status" => "success", "code" => 1, "message"=> "entidad found","document"=> $user_data));



    }else{
        // set response code - 404 Not found
        http_response_code(404);

        // tell the user entidad does not exist
        echo json_encode(array("status" => "error", "code" => 0, "message"=> "The password is not correct, please try again.","document"=> ""));
    }
}


?>
