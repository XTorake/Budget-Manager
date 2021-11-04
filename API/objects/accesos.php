<?php

// Accesos Class
// Functions in order
class Accesos{





    // *************************************************************************
    // Start Accesos Properties

    // general properties
    private $conn;
    private $table_name = "accesos";
  	public $pageNo = 1;
  	public $no_of_records_per_page = 30;


    //specific properties
    public $_id;
    public $id_usuario;
    public $id_cuenta;
    public $lectura;
    public $escritura;
    public $modificar;
    public $activo;

    // End Accesos Properties
    // *************************************************************************





    // *************************************************************************
    // Start Accesos Constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // End Accesos Constructor
    // *************************************************************************





    // *************************************************************************
    // Start TotalCount accesos
  	function total_record_count() {
    	$query = "select count(1) as total from ". $this->table_name ."";
    	$stmt = $this->conn->prepare($query);
    	$stmt->execute();
    	$row = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $row['total'];
  	}
    // End TotalCount accesos
    // *************************************************************************





    // *************************************************************************
    // Start Search Count accesos
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

  		$query = "SELECT count(1) as total FROM ". $this->table_name ." t  join usuario h on t.id_usuario = h._id  join cuenta u on t.id_cuenta = u._id  WHERE ".$where."";

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
    // End Search Count accesos
    // *************************************************************************



    // *************************************************************************
    // Start Read accesos
    function read(){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo = $_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  h.nombre, u.cuenta, t.* FROM ". $this->table_name ." t  join usuario h on t.id_usuario = h._id  join cuenta u on t.id_cuenta = u._id  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}
    // End Read accesos
    // *************************************************************************





    // *************************************************************************
    // Start Search accesos
  	function search($searchKey){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo=$_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  h.nombre, u.cuenta, t.* FROM ". $this->table_name ." t  join usuario h on t.id_usuario = h._id  join cuenta u on t.id_cuenta = u._id  WHERE t._id LIKE ? OR t.id_usuario LIKE ?  OR h.nombre LIKE ?  OR t.id_cuenta LIKE ?  OR u.cuenta LIKE ?  OR t.lectura LIKE ?  OR t.escritura LIKE ?  OR t.modificar LIKE ?  OR t.activo LIKE ?  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

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
$stmt->bindParam(8, $searchKey);
$stmt->bindParam(9, $searchKey);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}
    // End Search accesos
    // *************************************************************************





    // *************************************************************************
    // Start Search By Column accesos
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

  		$query = "SELECT  h.nombre, u.cuenta, t.* FROM ". $this->table_name ." t  join usuario h on t.id_usuario = h._id  join cuenta u on t.id_cuenta = u._id  WHERE ".$where." LIMIT ".$offset." , ". $this->no_of_records_per_page."";

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
    // End Search By Column accesos
    // *************************************************************************





    // *************************************************************************
  	// Start LGVD accesos

    // End LGVD accesos
    // *************************************************************************





    // *************************************************************************
  	// Start Read One the accesos
  	function readOne(){

    		// query to read single record
    		$query = "SELECT  h.nombre, u.cuenta, t.* FROM ". $this->table_name ." t  join usuario h on t.id_usuario = h._id  join cuenta u on t.id_cuenta = u._id  WHERE t._id = ? LIMIT 0,1";

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
$this->id_usuario = $row['id_usuario'];
$this->nombre = $row['nombre'];
$this->id_cuenta = $row['id_cuenta'];
$this->cuenta = $row['cuenta'];
$this->lectura = $row['lectura'];
$this->escritura = $row['escritura'];
$this->modificar = $row['modificar'];
$this->activo = $row['activo'];
    		}else{
    		  $this->_id = null;
    		}

        return $row;
  	}
    // End ReadOne the accesos
    // *************************************************************************





    // *************************************************************************
  	// Start create the accesos
  	function create(){

  		// query to insert record
  		$query ="INSERT INTO ".$this->table_name." SET id_usuario=:id_usuario,id_cuenta=:id_cuenta,lectura=:lectura,escritura=:escritura,modificar=:modificar,activo=:activo";

  		// prepare query
  		$stmt = $this->conn->prepare($query);

  		// sanitize

$this->id_usuario=htmlspecialchars(strip_tags($this->id_usuario));
$this->id_cuenta=htmlspecialchars(strip_tags($this->id_cuenta));
$this->lectura=htmlspecialchars(strip_tags($this->lectura));
$this->escritura=htmlspecialchars(strip_tags($this->escritura));
$this->modificar=htmlspecialchars(strip_tags($this->modificar));
$this->activo=htmlspecialchars(strip_tags($this->activo));

  		// bind values

$stmt->bindParam(":id_usuario", $this->id_usuario);
$stmt->bindParam(":id_cuenta", $this->id_cuenta);
$stmt->bindParam(":lectura", $this->lectura);
$stmt->bindParam(":escritura", $this->escritura);
$stmt->bindParam(":modificar", $this->modificar);
$stmt->bindParam(":activo", $this->activo);

  		// execute query
  		if($stmt->execute()){
  			return  $this->conn->lastInsertId();
  		}

  		return 0;

  	}
    // End create the accesos
    // *************************************************************************





    // *************************************************************************
  	// Start update the accesos
  	function update(){

  		// update query
  		$query ="UPDATE ".$this->table_name." SET id_usuario=:id_usuario,id_cuenta=:id_cuenta,lectura=:lectura,escritura=:escritura,modificar=:modificar,activo=:activo WHERE _id = :_id";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// sanitize

$this->id_usuario=htmlspecialchars(strip_tags($this->id_usuario));
$this->id_cuenta=htmlspecialchars(strip_tags($this->id_cuenta));
$this->lectura=htmlspecialchars(strip_tags($this->lectura));
$this->escritura=htmlspecialchars(strip_tags($this->escritura));
$this->modificar=htmlspecialchars(strip_tags($this->modificar));
$this->activo=htmlspecialchars(strip_tags($this->activo));
$this->_id=htmlspecialchars(strip_tags($this->_id));

  		// bind new values

$stmt->bindParam(":id_usuario", $this->id_usuario);
$stmt->bindParam(":id_cuenta", $this->id_cuenta);
$stmt->bindParam(":lectura", $this->lectura);
$stmt->bindParam(":escritura", $this->escritura);
$stmt->bindParam(":modificar", $this->modificar);
$stmt->bindParam(":activo", $this->activo);
$stmt->bindParam(":_id", $this->_id);

  		$stmt->execute();

      if($stmt->rowCount()) {
        return true;
  		}else{
  		  return false;
  		}
  	}
    // End update the accesos
    // *************************************************************************





    // *************************************************************************
  	// Start delete the accesos
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
  	// END delete the accesos
    // *************************************************************************



    // *************************************************************************
  	// Start extra functions for accesos

function readByid_usuario(){

if (isset($_GET["pageNo"]))
{
$this->pageNo =$_GET["pageNo"]; }
$offset = ($this->pageNo - 1) * $this->no_of_records_per_page;
$query = "SELECT  h.nombre, u.cuenta, t.* FROM ". $this->table_name ." t  join usuario h on t.id_usuario = h._id  join cuenta u on t.id_cuenta = u._id  WHERE t.id_usuario = ? LIMIT ".$offset." , ". $this->no_of_records_per_page."";

$stmt = $this->conn->prepare( $query );
$stmt->bindParam(1, $this->id_usuario);

$stmt->execute();
return $stmt;
}

function readByid_cuenta(){

if (isset($_GET["pageNo"]))
{
$this->pageNo =$_GET["pageNo"]; }
$offset = ($this->pageNo - 1) * $this->no_of_records_per_page;
$query = "SELECT  h.nombre, u.cuenta, t.* FROM ". $this->table_name ." t  join usuario h on t.id_usuario = h._id  join cuenta u on t.id_cuenta = u._id  WHERE t.id_cuenta = ? LIMIT ".$offset." , ". $this->no_of_records_per_page."";

$stmt = $this->conn->prepare( $query );
$stmt->bindParam(1, $this->id_cuenta);

$stmt->execute();
return $stmt;
}

    // End extra functions for accesos
    // *************************************************************************


}
?>
