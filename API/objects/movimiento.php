<?php

// Movimiento Class
// Functions in order
class Movimiento{





    // *************************************************************************
    // Start Movimiento Properties

    // general properties
    private $conn;
    private $table_name = "movimiento";
  	public $pageNo = 1;
  	public $no_of_records_per_page = 30;

    //specific properties

    public $_id;
    public $id_cuenta;
    public $id_usuario;
    public $fecha;
    public $monto;
    public $descripcion;
    public $es_gasto;
    public $visto;
    public $activo;

    // End Movimiento Properties
    // *************************************************************************





    // *************************************************************************
    // Start Movimiento Constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // End Movimiento Constructor
    // *************************************************************************





    // *************************************************************************
    // Start TotalCount movimiento
  	function total_record_count() {
    	$query = "select count(1) as total from ". $this->table_name ."";
    	$stmt = $this->conn->prepare($query);
    	$stmt->execute();
    	$row = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $row['total'];
  	}
    // End TotalCount movimiento
    // *************************************************************************





    // *************************************************************************
    // Start Search Count movimiento
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

  		$query = "SELECT count(1) as total FROM ". $this->table_name ." t  join cuenta f on t.id_cuenta = f._id  join usuario u on t.id_usuario = u._id  WHERE ".$where."";

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
    // End Search Count movimiento
    // *************************************************************************



    // *************************************************************************
    // Start Read movimiento
    function read(){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo = $_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  f.cuenta, u.nombre, t.* FROM ". $this->table_name ." t  join cuenta f on t.id_cuenta = f._id  join usuario u on t.id_usuario = u._id  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}
    // End Read movimiento
    // *************************************************************************





    // *************************************************************************
    // Start Search movimiento
  	function search($searchKey){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo=$_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  f.cuenta, u.nombre, t.* FROM ". $this->table_name ." t  join cuenta f on t.id_cuenta = f._id  join usuario u on t.id_usuario = u._id  WHERE t._id LIKE ? OR t.id_cuenta LIKE ?  OR f.cuenta LIKE ?  OR t.id_usuario LIKE ?  OR u.nombre LIKE ?  OR t.fecha LIKE ?  OR t.monto LIKE ?  OR t.descripcion LIKE ?  OR t.es_gasto LIKE ?  OR t.visto LIKE ?  OR t.activo LIKE ?  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

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
$stmt->bindParam(10, $searchKey);
$stmt->bindParam(11, $searchKey);

  		// execute query
  		$stmt->execute();

  		return $stmt;
  	}
    // End Search movimiento
    // *************************************************************************





    // *************************************************************************
    // Start Search By Column movimiento
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

  		$query = "SELECT  f.cuenta, u.nombre, t.* FROM ". $this->table_name ." t  join cuenta f on t.id_cuenta = f._id  join usuario u on t.id_usuario = u._id  WHERE ".$where." LIMIT ".$offset." , ". $this->no_of_records_per_page."";

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
    // End Search By Column movimiento
    // *************************************************************************





    // *************************************************************************
  	// Start LGVD movimiento

    // End LGVD movimiento
    // *************************************************************************





    // *************************************************************************
  	// Start Read One the movimiento
  	function readOne(){

    		// query to read single record
    		$query = "SELECT  f.cuenta, u.nombre, t.* FROM ". $this->table_name ." t  join cuenta f on t.id_cuenta = f._id  join usuario u on t.id_usuario = u._id  WHERE t._id = ? LIMIT 0,1";

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
$this->id_cuenta = $row['id_cuenta'];
$this->cuenta = $row['cuenta'];
$this->id_usuario = $row['id_usuario'];
$this->nombre = $row['nombre'];
$this->fecha = $row['fecha'];
$this->monto = $row['monto'];
$this->descripcion = $row['descripcion'];
$this->es_gasto = $row['es_gasto'];
$this->visto = $row['visto'];
$this->activo = $row['activo'];
    		}else{
    		  $this->_id = null;
    		}

        return $row;
  	}
    // End ReadOne the movimiento
    // *************************************************************************





    // *************************************************************************
  	// Start create the movimiento
  	function create(){

  		// query to insert record
  		$query ="INSERT INTO ".$this->table_name." SET id_cuenta=:id_cuenta,id_usuario=:id_usuario,fecha=:fecha,monto=:monto,descripcion=:descripcion,es_gasto=:es_gasto,visto=:visto,activo=:activo";

  		// prepare query
  		$stmt = $this->conn->prepare($query);

  		// sanitize
		$this->id_cuenta=htmlspecialchars(strip_tags($this->id_cuenta));
		$this->id_usuario=htmlspecialchars(strip_tags($this->id_usuario));
		$this->fecha=htmlspecialchars(strip_tags($this->fecha));
		$this->monto=htmlspecialchars(strip_tags($this->monto));
		$this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
		$this->es_gasto=htmlspecialchars(strip_tags($this->es_gasto));
		$this->visto=htmlspecialchars(strip_tags($this->visto));
		$this->activo=htmlspecialchars(strip_tags($this->activo));

  		// bind values

		$stmt->bindParam(":id_cuenta", $this->id_cuenta);
		$stmt->bindParam(":id_usuario", $this->id_usuario);
		$stmt->bindParam(":fecha", $this->fecha);
		$stmt->bindParam(":monto", $this->monto);
		$stmt->bindParam(":descripcion", $this->descripcion);
		$stmt->bindParam(":es_gasto", $this->es_gasto);
		$stmt->bindParam(":visto", $this->visto);
		$stmt->bindParam(":activo", $this->activo);

  		// execute query
  		if($stmt->execute()){
  			return  $this->conn->lastInsertId();
  		}
		
		//var_dump($stmt->errorInfo());
  		return 0;

  	}
    // End create the movimiento
    // *************************************************************************





    // *************************************************************************
  	// Start update the movimiento
  	function update(){

  		// update query
  		$query ="UPDATE ".$this->table_name." SET id_cuenta=:id_cuenta,id_usuario=:id_usuario,fecha=:fecha,monto=:monto,descripcion=:descripcion,es_gasto=:es_gasto,visto=:visto,activo=:activo WHERE _id = :_id";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// sanitize

$this->id_cuenta=htmlspecialchars(strip_tags($this->id_cuenta));
$this->id_usuario=htmlspecialchars(strip_tags($this->id_usuario));
$this->fecha=htmlspecialchars(strip_tags($this->fecha));
$this->monto=htmlspecialchars(strip_tags($this->monto));
$this->descripcion=htmlspecialchars(strip_tags($this->descripcion));
$this->es_gasto=htmlspecialchars(strip_tags($this->es_gasto));
$this->visto=htmlspecialchars(strip_tags($this->visto));
$this->activo=htmlspecialchars(strip_tags($this->activo));
$this->_id=htmlspecialchars(strip_tags($this->_id));

  		// bind new values

$stmt->bindParam(":id_cuenta", $this->id_cuenta);
$stmt->bindParam(":id_usuario", $this->id_usuario);
$stmt->bindParam(":fecha", $this->fecha);
$stmt->bindParam(":monto", $this->monto);
$stmt->bindParam(":descripcion", $this->descripcion);
$stmt->bindParam(":es_gasto", $this->es_gasto);
$stmt->bindParam(":visto", $this->visto);
$stmt->bindParam(":activo", $this->activo);
$stmt->bindParam(":_id", $this->_id);

  		$stmt->execute();

      if($stmt->rowCount()) {
        return true;
  		}else{
  		  return false;
  		}
  	}
    // End update the movimiento
    // *************************************************************************





    // *************************************************************************
  	// Start delete the movimiento
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
  	// END delete the movimiento
    // *************************************************************************



    // *************************************************************************
  	// Start extra functions for movimiento

function readByid_cuenta(){

if (isset($_GET["pageNo"]))
{
$this->pageNo =$_GET["pageNo"]; }
$offset = ($this->pageNo - 1) * $this->no_of_records_per_page;
$query = "SELECT  f.cuenta, u.nombre, t.* FROM ". $this->table_name ." t  join cuenta f on t.id_cuenta = f._id  join usuario u on t.id_usuario = u._id  WHERE t.id_cuenta = ? LIMIT ".$offset." , ". $this->no_of_records_per_page."";

$stmt = $this->conn->prepare( $query );
$stmt->bindParam(1, $this->id_cuenta);

$stmt->execute();
return $stmt;
}

function readByid_usuario(){

if (isset($_GET["pageNo"]))
{
$this->pageNo =$_GET["pageNo"]; }
$offset = ($this->pageNo - 1) * $this->no_of_records_per_page;
$query = "SELECT  f.cuenta, u.nombre, t.* FROM ". $this->table_name ." t  join cuenta f on t.id_cuenta = f._id  join usuario u on t.id_usuario = u._id  WHERE t.id_usuario = ? LIMIT ".$offset." , ". $this->no_of_records_per_page."";

$stmt = $this->conn->prepare( $query );
$stmt->bindParam(1, $this->id_usuario);

$stmt->execute();
return $stmt;
}

    // End extra functions for movimiento
    // *************************************************************************


}
?>
