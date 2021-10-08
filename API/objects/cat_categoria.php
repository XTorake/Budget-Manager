<?php

// Cat_Categoria Class
// Functions in order
class Cat_Categoria{





    // *************************************************************************
    // Start Cat_Categoria Properties

    // general properties
    private $conn;
    private $table_name = "cat_categoria";
  	public $pageNo = 1;
  	public $no_of_records_per_page = 30;

    //specific properties
	  
public $_id;
public $categoria;
public $activo;

    // End Cat_Categoria Properties
    // *************************************************************************





    // *************************************************************************
    // Start Cat_Categoria Constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // End Cat_Categoria Constructor
    // *************************************************************************





    // *************************************************************************
    // Start TotalCount cat_categoria
  	function total_record_count() {
    	$query = "select count(1) as total from ". $this->table_name ."";
    	$stmt = $this->conn->prepare($query);
    	$stmt->execute();
    	$row = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $row['total'];
  	}
    // End TotalCount cat_categoria
    // *************************************************************************





    // *************************************************************************
    // Start Search Count cat_categoria
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

  		$query = "SELECT count(1) as total FROM ". $this->table_name ." t  WHERE ".$where."";

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
    // End Search Count cat_categoria
    // *************************************************************************



    // *************************************************************************
    // Start Read cat_categoria
    function read(){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo = $_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  t.* FROM ". $this->table_name ." t  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}
    // End Read cat_categoria
    // *************************************************************************





    // *************************************************************************
    // Start Search cat_categoria
  	function search($searchKey){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo=$_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  t.* FROM ". $this->table_name ." t  WHERE t._id LIKE ? OR t.categoria LIKE ?  OR t.activo LIKE ?  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// bind searchKey
  		
$stmt->bindParam(1, $searchKey);
$stmt->bindParam(2, $searchKey);
$stmt->bindParam(3, $searchKey);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}
    // End Search cat_categoria
    // *************************************************************************





    // *************************************************************************
    // Start Search By Column cat_categoria
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

  		$query = "SELECT  t.* FROM ". $this->table_name ." t  WHERE ".$where." LIMIT ".$offset." , ". $this->no_of_records_per_page."";

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
    // End Search By Column cat_categoria
    // *************************************************************************





    // *************************************************************************
  	// Start LGVD cat_categoria
	  
    // End LGVD cat_categoria
    // *************************************************************************





    // *************************************************************************
  	// Start Read One the cat_categoria
  	function readOne(){

    		// query to read single record
    		$query = "SELECT  t.* FROM ". $this->table_name ." t  WHERE t._id = ? LIMIT 0,1";

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
$this->categoria = $row['categoria'];
$this->activo = $row['activo'];
    		}else{
    		  $this->_id = null;
    		}

        return $row;
  	}
    // End ReadOne the cat_categoria
    // *************************************************************************





    // *************************************************************************
  	// Start create the cat_categoria
  	function create(){

  		// query to insert record
  		$query ="INSERT INTO ".$this->table_name." SET categoria=:categoria,activo=:activo";

  		// prepare query
  		$stmt = $this->conn->prepare($query);

  		// sanitize
  		
$this->categoria=htmlspecialchars(strip_tags($this->categoria));
$this->activo=htmlspecialchars(strip_tags($this->activo));

  		// bind values
  		
$stmt->bindParam(":categoria", $this->categoria);
$stmt->bindParam(":activo", $this->activo);

  		// execute query
  		if($stmt->execute()){
  			return  $this->conn->lastInsertId();
  		}

  		return 0;

  	}
    // End create the cat_categoria
    // *************************************************************************





    // *************************************************************************
  	// Start update the cat_categoria
  	function update(){

  		// update query
  		$query ="UPDATE ".$this->table_name." SET categoria=:categoria,activo=:activo WHERE _id = :_id";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// sanitize
  		
$this->categoria=htmlspecialchars(strip_tags($this->categoria));
$this->activo=htmlspecialchars(strip_tags($this->activo));
$this->_id=htmlspecialchars(strip_tags($this->_id));

  		// bind new values
  		
$stmt->bindParam(":categoria", $this->categoria);
$stmt->bindParam(":activo", $this->activo);
$stmt->bindParam(":_id", $this->_id);

  		$stmt->execute();

      if($stmt->rowCount()) {
        return true;
  		}else{
  		  return false;
  		}
  	}
    // End update the cat_categoria
    // *************************************************************************





    // *************************************************************************
  	// Start delete the cat_categoria
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
  	// END delete the cat_categoria
    // *************************************************************************



    // *************************************************************************
  	// Start extra functions for cat_categoria
    
    // End extra functions for cat_categoria
    // *************************************************************************


}
?>

