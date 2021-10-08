<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


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




// initialize object
$usuario = new Usuario($db);


$searchKey = isset($_GET['key']) ? $_GET['key'] : $response->error('Search param missing...');
$usuario->pageNo = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$usuario->no_of_records_per_page = isset($_GET['pagesize']) ? $_GET['pagesize'] : 30;


// query usuario
$stmt = $usuario->search($searchKey);
$num = $stmt->rowCount();



// check if results are empty
if($num < 1){
  $response->error("No usuario found.");
}


//usuario array
$usuario_arr = array();
$usuario_arr["pageno"] = $usuario->pageNo;
$usuario_arr["pagesize"] = $usuario->no_of_records_per_page;
$usuario_arr["total_count"] = $usuario->total_record_count();
$usuario_arr["records"] = $stmt->fetchAll(PDO::FETCH_ASSOC);

$response->success("usuario found", $usuario_arr );


?>

