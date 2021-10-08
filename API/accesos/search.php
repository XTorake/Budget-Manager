<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/accesos.php';
include_once '../token/validatetoken.php';



// instantiate database and accesos object
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();




// initialize object
$accesos = new Accesos($db);


$searchKey = isset($_GET['key']) ? $_GET['key'] : $response->error('Search param missing...');
$accesos->pageNo = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$accesos->no_of_records_per_page = isset($_GET['pagesize']) ? $_GET['pagesize'] : 30;


// query accesos
$stmt = $accesos->search($searchKey);
$num = $stmt->rowCount();



// check if results are empty
if($num < 1){
  $response->error("No accesos found.");
}


//accesos array
$accesos_arr = array();
$accesos_arr["pageno"] = $accesos->pageNo;
$accesos_arr["pagesize"] = $accesos->no_of_records_per_page;
$accesos_arr["total_count"] = $accesos->total_record_count();
$accesos_arr["records"] = $stmt->fetchAll(PDO::FETCH_ASSOC);

$response->success("accesos found", $accesos_arr );


?>

