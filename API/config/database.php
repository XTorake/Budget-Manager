<?php
class Database{

    // specify your own database credentials
    private $host = "localhost";
    private $db_name = "el_lugar_budget";
    private $username = "root";
    private $password = "";
	  private $port = "3306";
    public $conn;

    // get the database connection
    public function getConnection(){

      $this->conn = null;


      // Live ENVIROMENT
      if (false) {
        $this->db_name = '';
        $this->username = '';
        $this->password = '';
      }



      try{

        if($this->port){
          $this->conn = new PDO("mysql:host=" . $this->host . ";port=" . $this->port . ";dbname=" . $this->db_name, $this->username, $this->password);
        }else{
	        $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
	      }
	      $this->conn->exec("set names utf8");


      }catch(PDOException $exception){

        echo "Connection error: " . $exception->getMessage();

      }

      return $this->conn;
    }
}
?>

