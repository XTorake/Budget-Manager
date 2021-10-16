<?php

// Usuario Class
// Functions in order
class Usuario{





    // *************************************************************************
    // Start Usuario Properties

    // general properties
    private $conn;
    private $table_name = "usuario";
  	public $pageNo = 1;
  	public $no_of_records_per_page = 30;

    //specific properties
    public $_id;
    public $nombre;
    public $correo;
    public $login_password;
    public $login_salt;
    public $admin;
    public $activo;



    // End Usuario Properties
    // *************************************************************************





    // *************************************************************************
    // Start Usuario Constructor
    public function __construct($db){
        $this->conn = $db;
    }
    // End Usuario Constructor
    // *************************************************************************







    // *************************************************************************
    // Start Usuario salt and password settings.
    function gensalt(){
      $salt = $this->randval().$this->uniqidReal();
      $salt = str_shuffle($salt);
      return hash('sha1', $salt);
  	}


    function HashPassword($p, $s){
      $hp = $this->recurrent_hash($p);
      $hs = $this->recurrent_hash($s);
      return $this->recurrent_hash($hs.$hp);
    }


    //returns random value between min - max and fills the empty chars with 0
    function randval($min = 0, $max = 99999999,  $length = 8, $fill = "0"){
      $number = rand($min, $max);
      $number = str_pad($number, $length, $fill, STR_PAD_LEFT);
      return $number;
    }


    //iterates n times hashing every time the result of the previous hash of the string.
    private function recurrent_hash($str, $n = 100, $hash = 'sha512'){
      for ($i=0; $i < $n; $i++) { $str = hash($hash, $str); }
      return $str;
    }


    //generates a random string of characters
    function uniqidReal($lenght = 8) {
      // uniqid gives 13 chars, but you could adjust it to your needs.
      if (function_exists("random_bytes")) {
          $bytes = random_bytes(ceil($lenght / 2));
      } elseif (function_exists("openssl_random_pseudo_bytes")) {
          $bytes = openssl_random_pseudo_bytes(ceil($lenght / 2));
      } else {
          throw new Exception("no cryptographically secure random function available");
      }
      return substr(bin2hex($bytes), 0, $lenght);
    }
    // Start Usuario salt and password settings.
    // *************************************************************************





    function attemptLogin(){
      // query to read single record
      $query = "SELECT  t.* FROM ". $this->table_name ." t  WHERE t.login_salt = ? AND t.login_password = ? LIMIT 0,1";

      // prepare query statement
      $stmt = $this->conn->prepare($query);

      // bind parameters
      $stmt->bindParam(1, $this->login_salt);
      $stmt->bindParam(2, $this->login_password);

      // execute query
      $stmt->execute();

      // get retrieved row
      $row = $stmt->fetch(PDO::FETCH_ASSOC);
      $num = $stmt->rowCount();

      if($num>0){
        // set values to object properties
        $this->_id = $row['_id'];
        $this->nombre = $row['nombre'];
        $this->correo = $row['correo'];
        $this->login_password = $row['login_password'];
        $this->login_salt = $row['login_salt'];
        $this->admin = $row['admin'];
        $this->activo = $row['activo'];
      }else{
        $this->_id = null;
      }

      return $row;
    }










    // *************************************************************************
    // Start TotalCount usuario
  	function total_record_count() {
    	$query = "select count(1) as total from ". $this->table_name ."";
    	$stmt = $this->conn->prepare($query);
    	$stmt->execute();
    	$row = $stmt->fetch(PDO::FETCH_ASSOC);
    	return $row['total'];
  	}
    // End TotalCount usuario
    // *************************************************************************





    // *************************************************************************
    // Start Search Count usuario
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
    // End Search Count usuario
    // *************************************************************************



    // *************************************************************************
    // Start Read usuario
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
    // End Read usuario
    // *************************************************************************





    // *************************************************************************
    // Start Search usuario
  	function search($searchKey){
  		if(isset($_GET["pageNo"])){
  		    $this->pageNo=$_GET["pageNo"];
  		}
  		$offset = ($this->pageNo-1) * $this->no_of_records_per_page;

  		// select all query
  		$query = "SELECT  t.* FROM ". $this->table_name ." t  WHERE t._id LIKE ? OR t.nombre LIKE ?  OR t.correo LIKE ?  OR t.login_password LIKE ?  OR t.login_salt LIKE ?  OR t.admin LIKE ?  OR t.activo LIKE ?  LIMIT ".$offset." , ". $this->no_of_records_per_page."";

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
    // End Search usuario
    // *************************************************************************





    // *************************************************************************
    // Start Search By Column usuario
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
    // End Search By Column usuario
    // *************************************************************************





    // *************************************************************************
  	// Start LGVD usuario

    // End LGVD usuario
    // *************************************************************************





    // *************************************************************************
  	// Start Read One the usuario
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
          $this->nombre = $row['nombre'];
          $this->correo = $row['correo'];
          $this->login_password = $row['login_password'];
          $this->login_salt = $row['login_salt'];
          $this->admin = $row['admin'];
          $this->activo = $row['activo'];
    		}else{
    		  $this->_id = null;
    		}

        return $row;
  	}
    // End ReadOne the usuario
    // *************************************************************************




    // *************************************************************************
  	// Start Read One the usuario
  	function readOneEmail(){

    		// query to read single record
    		$query = "SELECT  t.* FROM ". $this->table_name ." t  WHERE t.correo = ? LIMIT 0,1";

    		// prepare query statement
    		$stmt = $this->conn->prepare($query);

    		// bind id
    		$stmt->bindParam(1, $this->correo);

    		// execute query
    		$stmt->execute();

    		// get retrieved row
    		$row = $stmt->fetch(PDO::FETCH_ASSOC);
    		$num = $stmt->rowCount();


    		if($num>0){

          // set values to object properties
          $this->_id = $row['_id'];
          $this->nombre = $row['nombre'];
          $this->correo = $row['correo'];
          $this->login_password = $row['login_password'];
          $this->login_salt = $row['login_salt'];
          $this->admin = $row['admin'];
          $this->activo = $row['activo'];

    		}else{

    		  $this->_id = null;

    		}

        return $row;
  	}
    // End ReadOne the usuario
    // *************************************************************************





    // *************************************************************************
  	// Start create the usuario
  	function create(){

  		// query to insert record
  		$query ="INSERT INTO ".$this->table_name." SET nombre=:nombre,correo=:correo,login_password=:login_password,login_salt=:login_salt,admin=:admin,activo=:activo";

  		// prepare query
  		$stmt = $this->conn->prepare($query);

  		// sanitize

$this->nombre=htmlspecialchars(strip_tags($this->nombre));
$this->correo=htmlspecialchars(strip_tags($this->correo));
$this->login_password=htmlspecialchars(strip_tags($this->login_password));
$this->login_salt=htmlspecialchars(strip_tags($this->login_salt));
$this->admin=htmlspecialchars(strip_tags($this->admin));
$this->activo=htmlspecialchars(strip_tags($this->activo));

  		// bind values

$stmt->bindParam(":nombre", $this->nombre);
$stmt->bindParam(":correo", $this->correo);
$stmt->bindParam(":login_password", $this->login_password);
$stmt->bindParam(":login_salt", $this->login_salt);
$stmt->bindParam(":admin", $this->admin);
$stmt->bindParam(":activo", $this->activo);

  		// execute query
  		if($stmt->execute()){
  			return  $this->conn->lastInsertId();
  		}

  		return 0;

  	}
    // End create the usuario
    // *************************************************************************





    // *************************************************************************
  	// Start update the usuario
  	function update(){

  		// update query
  		$query ="UPDATE ".$this->table_name." SET nombre=:nombre,correo=:correo,login_password=:login_password,login_salt=:login_salt,admin=:admin,activo=:activo WHERE _id = :_id";

  		// prepare query statement
  		$stmt = $this->conn->prepare($query);

  		// sanitize

$this->nombre=htmlspecialchars(strip_tags($this->nombre));
$this->correo=htmlspecialchars(strip_tags($this->correo));
$this->login_password=htmlspecialchars(strip_tags($this->login_password));
$this->login_salt=htmlspecialchars(strip_tags($this->login_salt));
$this->admin=htmlspecialchars(strip_tags($this->admin));
$this->activo=htmlspecialchars(strip_tags($this->activo));
$this->_id=htmlspecialchars(strip_tags($this->_id));

  		// bind new values

$stmt->bindParam(":nombre", $this->nombre);
$stmt->bindParam(":correo", $this->correo);
$stmt->bindParam(":login_password", $this->login_password);
$stmt->bindParam(":login_salt", $this->login_salt);
$stmt->bindParam(":admin", $this->admin);
$stmt->bindParam(":activo", $this->activo);
$stmt->bindParam(":_id", $this->_id);

  		$stmt->execute();

      if($stmt->rowCount()) {
        return true;
  		}else{
  		  return false;
  		}
  	}
    // End update the usuario
    // *************************************************************************





    // *************************************************************************
  	// Start delete the usuario
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
  	// END delete the usuario
    // *************************************************************************



    // *************************************************************************
  	// Start extra functions for usuario

    // End extra functions for usuario
    // *************************************************************************


}
?>
