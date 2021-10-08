<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/movimiento.php';
include_once '../token/validatetoken.php';


// instantiate database and movimiento object
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();




// initialize object
$movimiento = new Movimiento($db);


$data = json_decode(file_get_contents("php://input"));
$orAnd = isset($_GET['orAnd']) ? $_GET['orAnd'] : "OR";


$movimiento->pageNo = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$movimiento->no_of_records_per_page = isset($_GET['pagesize']) ? $_GET['pagesize'] : 30;


// query movimiento
$stmt = $movimiento->searchByColumn($data,$orAnd);
$num = $stmt->rowCount();



// check if no records were found
if( $num < 1 ){
  $response->error("No movimiento found.");
}




//movimiento array
$movimiento_arr=array();
$movimiento_arr["pageno"]=$movimiento->pageNo;
$movimiento_arr["pagesize"]=$movimiento->no_of_records_per_page;
$movimiento_arr["total_count"]=$movimiento->search_record_count($data,$orAnd);
$movimiento_arr["records"] = $stmt->fetchAll(PDO::FETCH_ASSOC);

$response->success("movimiento found", $movimiento_arr);



?>

