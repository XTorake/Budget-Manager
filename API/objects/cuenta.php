<?php

// Cuenta Class
// Functions in order
class Cuenta{





    // *************************************************************************
    // Start Cuenta Properties

    // general properties
    private $conn;
    private $table_name = "cuenta";
  	public $pageNo = 1;
  	public $no_of_records_per_page = 30;

    //specific properties
	  
public $_id;
public $id_categoria;
public $cuenta;
public $descripcion;
public $color;
public $activo;

    // End Cuenta Properties
    // *************************************************************************





    // *************************************************************************
    // Start Cuenta Constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // End Cuenta Constructor
    // *************************************************************************





    // *************************************************************************
    // Start TotalCount cuenta
  	function total_record_count() {
    	$query = "select count(1) as total from ". $this->table_name ."";
    	$stmt = $this->conn->prepare($query);
    	$stmt->execute();
    	$row = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $row['total'];
  	}
    // End TotalCount cuenta
    // *************************************************************************





    // *************************************************************************
    // Start Search Count cuenta
  	function search_record_count($columnArray, $orAnd){
  		$where="";

  		foreach ($columnArray as $col) {
  			$columnName=htmlspecialchars(strip_tags($col->columnName));
  			$columnLogic=$col->columnLogic;
  			if($where==""){
  				$where="LOWER(t.".$columnName . ") ".$columnLogic." :".$columnName;
  			}else{
  				$where=$where." ". $orAnd ." LOWER(t." . $columnName . ") ".$columnLogic." :".$columnName;
  			}
  		}

  		$query = "SELECT count(1) as total FROM ". $this->table_name ." t  join cat_categoria w on t.id_categoria = w._id  WHERE ".$where."";

  		$stmt = $this->conn->prepare($query);
  		$paramCount = 1;
  		foreach ($columnArray as $col) {

        $columnName = htmlspecialchars(strip_tags($col->columnName));

        if( strtoupper($col->columnLogic) == "LIKE" ){
            $columnValue = "%".strtolower($col->columnValue)."%";
        }else{
            $columnValue = strtolower($col->columnValue);
        }

        $stmt->bindValue(":".$columnName, $columnValue);
        $paramCount++;

  		}

  		$stmt->execute();
  		return $stmt;
  	}
    // End Search Count cuenta
    // *************************************************************************



    // *************************************************************************
    // Start Read cuenta
    function read(){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo = $_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  w.categoria, t.* FROM ". $this->table_name ." t  join cat_categoria w on t.id_categoria = w._id  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}
    // End Read cuenta
    // *************************************************************************





    // *************************************************************************
    // Start Search cuenta
  	function search($searchKey){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo=$_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  w.categoria, t.* FROM ". $this->table_name ." t  join cat_categoria w on t.id_categoria = w._id  WHERE t._id LIKE ? OR t.id_categoria LIKE ?  OR w.categoria LIKE ?  OR t.cuenta LIKE ?  OR t.descripcion LIKE ?  OR t.color LIKE ?  OR t.activo LIKE ?  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// bind searchKey
  		
$stmt->bindParam(1, $searchKey);
$stmt->bindParam(2, $searchKey);
$stmt->bindParam(3, $searchKey);
$stmt->bindParam(4, $searchKey);
$stmt->bindParam(5, $searchKey);
$stmt->bindParam(6, $searchKey);
$stmt->bindParam(7, $searchKey);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}
    // End Search cuenta
    // *************************************************************************





    // *************************************************************************
    // Start Search By Column cuenta
    function searchByColumn($columnArray,$orAnd){
  		if(isset($_GET["pageNo"])){
  		  $this->pageNo = $_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		$where="";

  		foreach ($columnArray as $col) {
  			$columnName = htmlspecialchars(strip_tags($col->columnName));
  			$columnLogic = $col->columnLogic;
  			if($where == ""){
  				$where = "LOWER(t.".$columnName . ") ".$columnLogic." :".$columnName;
  			}else{
  				$where = $where." ". $orAnd ." LOWER(t." . $columnName . ") ".$columnLogic." :".$columnName;
  			}
  		}

  		$query = "SELECT  w.categoria, t.* FROM ". $this->table_name ." t  join cat_categoria w on t.id_categoria = w._id  WHERE ".$where." LIMIT ".$offset." , ". $this->no_of_records_per_page."";

  		$stmt = $this->conn->prepare($query);
  		$paramCount = 1;

  		foreach ($columnArray as $col) {
  			$columnName = htmlspecialchars(strip_tags($col->columnName));
    		if(strtoupper($col->columnLogic)=="LIKE"){
    		    $columnValue = "%".strtolower($col->columnValue)."%";
    		}else{
    		    $columnValue = strtolower($col->columnValue);
    		}
  			$stmt->bindValue(":".$columnName, $columnValue);
  			$paramCount++;
  		}

  		$stmt->execute();
  		return $stmt;
  	}
    // End Search By Column cuenta
    // *************************************************************************





    // *************************************************************************
  	// Start LGVD cuenta
	  
    // End LGVD cuenta
    // *************************************************************************





    // *************************************************************************
  	// Start Read One the cuenta
  	function readOne(){

    		// query to read single record
    		$query = "SELECT  w.categoria, t.* FROM ". $this->table_name ." t  join cat_categoria w on t.id_categoria = w._id  WHERE t._id = ? LIMIT 0,1";

    		// prepare query statement
    		$stmt = $this->conn->prepare($query);

    		// bind id
    		$stmt->bindParam(1, $this->_id);

    		// execute query
    		$stmt->execute();

    		// get retrieved row
    		$row = $stmt->fetch(PDO::FETCH_ASSOC);
    		$num = $stmt->rowCount();

    		if($num>0){
          // set values to object properties
    		  
$this->_id = $row['_id'];
$this->id_categoria = $row['id_categoria'];
$this->categoria = $row['categoria'];
$this->cuenta = $row['cuenta'];
$this->descripcion = $row['descripcion'];
$this->color = $row['color'];
$this->activo = $row['activo'];
    		}else{
    		  $this->_id = null;
    		}

        return $row;
  	}
    // End ReadOne the cuenta
    // *************************************************************************





    // *************************************************************************
  	// Start create the cuenta
  	function create(){

  		// query to insert record
  		$query ="INSERT INTO ".$this->table_name." SET id_categoria=:id_categoria,cuenta=:cuenta,descripcion=:descripcion,color=:color,activo=:activo";

  		// prepare query
  		$stmt = $this->conn->prepare($query);

  		// sanitize
  		
$this->id_categoria=htmlspecialchars(strip_tags($this->id_categoria));
$this->cuenta=htmlspecialchars(strip_tags($this->cuenta));
$this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
$this->color=htmlspecialchars(strip_tags($this->color));
$this->activo=htmlspecialchars(strip_tags($this->activo));

  		// bind values
  		
$stmt->bindParam(":id_categoria", $this->id_categoria);
$stmt->bindParam(":cuenta", $this->cuenta);
$stmt->bindParam(":descripcion", $this->descripcion);
$stmt->bindParam(":color", $this->color);
$stmt->bindParam(":activo", $this->activo);

  		// execute query
  		if($stmt->execute()){
  			return  $this->conn->lastInsertId();
  		}

  		return 0;

  	}
    // End create the cuenta
    // *************************************************************************





    // *************************************************************************
  	// Start update the cuenta
  	function update(){

  		// update query
  		$query ="UPDATE ".$this->table_name." SET id_categoria=:id_categoria,cuenta=:cuenta,descripcion=:descripcion,color=:color,activo=:activo WHERE _id = :_id";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// sanitize
  		
$this->id_categoria=htmlspecialchars(strip_tags($this->id_categoria));
$this->cuenta=htmlspecialchars(strip_tags($this->cuenta));
$this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
$this->color=htmlspecialchars(strip_tags($this->color));
$this->activo=htmlspecialchars(strip_tags($this->activo));
$this->_id=htmlspecialchars(strip_tags($this->_id));

  		// bind new values
  		
$stmt->bindParam(":id_categoria", $this->id_categoria);
$stmt->bindParam(":cuenta", $this->cuenta);
$stmt->bindParam(":descripcion", $this->descripcion);
$stmt->bindParam(":color", $this->color);
$stmt->bindParam(":activo", $this->activo);
$stmt->bindParam(":_id", $this->_id);

  		$stmt->execute();

      if($stmt->rowCount()) {
        return true;
  		}else{
  		  return false;
  		}
  	}
    // End update the cuenta
    // *************************************************************************





    // *************************************************************************
  	// Start delete the cuenta
  	function delete(){

  		// delete query
  		$query = "DELETE FROM " . $this->table_name . " WHERE _id = ? ";

  		// prepare query
  		$stmt = $this->conn->prepare($query);

  		// sanitize
  		$this->_id=htmlspecialchars(strip_tags($this->_id));

  		// bind id of record to delete
  		$stmt->bindParam(1, $this->_id);
  	  $stmt->execute();

  	  if($stmt->rowCount()) {
  		    return true;
  		} else {
  		    return false;
  		}

  	}
  	// END delete the cuenta
    // *************************************************************************



    // *************************************************************************
  	// Start extra functions for cuenta
    
function readByid_categoria(){

if (isset($_GET["pageNo"]))
{
$this->pageNo =$_GET["pageNo"]; } 
$offset = ($this->pageNo - 1) * $this->no_of_records_per_page;
$query = "SELECT  w.categoria, t.* FROM ". $this->table_name ." t  join cat_categoria w on t.id_categoria = w._id  WHERE t.id_categoria = ? LIMIT ".$offset." , ". $this->no_of_records_per_page."";

$stmt = $this->conn->prepare( $query );
$stmt->bindParam(1, $this->id_categoria);

$stmt->execute();
return $stmt;
}

    // End extra functions for cuenta
    // *************************************************************************


}
?>

