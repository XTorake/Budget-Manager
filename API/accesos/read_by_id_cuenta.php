<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");



//******************************************************************************
include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/accesos.php';
include_once '../token/validatetoken.php';



//******************************************************************************
// instantiate database and accesos object
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();



//******************************************************************************
// initialize object
$accesos = new Accesos($db);
$accesos->pageNo = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$accesos->no_of_records_per_page = isset($_GET['pagesize']) ? $_GET['pagesize'] : 30;
$accesos->id_cuenta = isset($_GET['id_cuenta']) ? $_GET['id_cuenta'] : die();



//******************************************************************************
// read accesos will be here



// query accesos
$stmt = $accesos->readByid_cuenta();
$num = $stmt->rowCount();



// If no records found, return error message.
if( $num < 1 ){
  $response->error('No accesos found.');
}




//accesos array
$accesos_arr = array();
$accesos_arr["pageno"] = $accesos->pageNo;
$accesos_arr["pagesize"] = $accesos->no_of_records_per_page;
$accesos_arr["total_count"] = $accesos->total_record_count();




// retrieve our table contents
$accesos_arr["records"] = $stmt->fetchAll(PDO::FETCH_ASSOC);



// Reply to the request
$response->success("accesos found", $accesos_arr);


?>

