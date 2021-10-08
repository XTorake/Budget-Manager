<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST,GET");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


include_once '../config/helper.php';
include_once '../config/database.php';
include_once '../objects/cat_categoria.php';
include_once '../token/validatetoken.php';


// instantiate database and cat_categoria object
$database = new Database();
$db = $database->getConnection();



// *****************************************************************************
//Initialize Response Class.
$response = new Response();




// initialize object
$cat_categoria = new Cat_Categoria($db);


$data = json_decode(file_get_contents("php://input"));
$orAnd = isset($_GET['orAnd']) ? $_GET['orAnd'] : "OR";


$cat_categoria->pageNo = isset($_GET['pageno']) ? $_GET['pageno'] : 1;
$cat_categoria->no_of_records_per_page = isset($_GET['pagesize']) ? $_GET['pagesize'] : 30;


// query cat_categoria
$stmt = $cat_categoria->searchByColumn($data,$orAnd);
$num = $stmt->rowCount();



// check if no records were found
if( $num < 1 ){
  $response->error("No cat_categoria found.");
}




//cat_categoria array
$cat_categoria_arr=array();
$cat_categoria_arr["pageno"]=$cat_categoria->pageNo;
$cat_categoria_arr["pagesize"]=$cat_categoria->no_of_records_per_page;
$cat_categoria_arr["total_count"]=$cat_categoria->search_record_count($data,$orAnd);
$cat_categoria_arr["records"] = $stmt->fetchAll(PDO::FETCH_ASSOC);

$response->success("cat_categoria found", $cat_categoria_arr);



?>

