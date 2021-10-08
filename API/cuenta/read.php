<?php
// required headers
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/cuenta.php';
include_once '../token/validatetoken.php';



// instantiate database and cuenta object
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();




// initialize object
$cuenta = new Cuenta($db);
$cuenta->pageNo = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$cuenta->no_of_records_per_page = isset($_GET['pagesize']) ? $_GET['pagesize'] : 30;
// read cuenta will be here



// query cuenta
$stmt = $cuenta->read();
$num = $stmt->rowCount();




// check if more than 0 record found
if( $num < 1 ){
    $response->error("No cuenta found.");
}




//cuenta array
$cuenta_arr = array();
$cuenta_arr["pageno"] = $cuenta->pageNo;
$cuenta_arr["pagesize"] = $cuenta->no_of_records_per_page;
$cuenta_arr["total_count"] = $cuenta->total_record_count();
$cuenta_arr["records"] = $stmt->fetchAll(PDO::FETCH_ASSOC);


$response->success("cuenta found", $cuenta_arr);


?>

