<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/usuario.php';
include_once '../token/validatetoken.php';



// instantiate database and usuario object
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();


//read the categories
$query = 'SELECT * FROM view_categoria';
$stmt = $db->prepare($query);
$stmt->execute();
$categorias = $stmt->fetchAll(PDO::FETCH_ASSOC);


$query = 'SELECT * FROM view_cuentas';
$stmt = $db->prepare($query);
$stmt->execute();
$cuentas = $stmt->fetchAll(PDO::FETCH_ASSOC);





//usuario array
$response_array = array();
$response_array["cuentas"] = $cuentas;
$response_array["categorias"] = $categorias;


$response->success("Data found", $response_array);


?>
