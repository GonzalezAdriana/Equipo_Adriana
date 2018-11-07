<?php
abstract class DBAbstractModel 
{

	private static $db_host = "localhost"; 
	private static $db_user = "root";
	private static $db_pass = "";
	protected $db_name = "mapas";
	protected $query;
	protected $rows = array();
	private $conn;
# métodos abstractos para ABM de clases que hereden
	abstract protected function get();
	abstract protected function set();
	abstract protected function edit();
	abstract protected function delete();
# los siguientes métodos pueden definirse con exactitud
# y no son abstractos
# Conectar a la base de datos
	
	private function open_connection() 
	{
	$this->conn = new mysqli(self::$db_host, self::$db_user,
	self::$db_pass, $this->db_name);
	}


# Desconectar la base de datos
	private function close_connection() 
	{
		$this->conn->close();
	}
# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
	protected function execute_single_query() {
	$this->open_connection();
	$this->conn->query($this->query);
	$this->close_connection();
	}
# Traer resultados de una consulta en un Array
	protected function get_results_from_query() 
	{
		$this->open_connection();
		$result = $this->conn->query($this->query);
		while ($this->rows[] = $result->fetch_assoc());
		$result->close();
		$this->close_connection();
		array_pop($this->rows);
	}
}
?>






<?php
//abstract class conexion {
//private static $db_host = 'localhost';
// private static $db_user = 'system';
// private static $db_pass = '123456';
// protected $db_name = 'XE';
//protected $query;
//protected $rows = array();
//private $conn;
# métodos abstractos para ABM de clases que hereden
//abstract protected function get_all();
//abstract protected function set();
//abstract protected function edit();
//abstract protected function delete();
//abstract protected function verify_reg();





# los siguientes métodos pueden definirse con exactitud
# y no son abstractos
# Conectar a la base de datos
//private function open_connection() {
	// $this->conn = new mysqli(self::$db_host, self::$db_user,
	// self::$db_pass, $this->db_name);
//	$tns="(DESCRIPCION=(ADDRESS_List=(ADDRESS=(PROTOCOL=TCP)(HOST=127.0.0.1)(PORT=1521)))(CONNECT_DATA=(SERVICE_NAME=XE)))";
//	$db_user="system";
//	$db_pass="12345";

//	try 
//			{
//				$this->conn=new PDO("oci:dbname".$tns,$db_user,$db_pass);
//				return "conexion exitosa";
//				echo "conexion exitosa";
//			} 
//			catch (PDOException $e) 
//			{
//				return "Error: ".$e->getMessage();
//			}

//	}                                     /////el documento va aqui de la conexion
# Desconectar la base de datos
//private function close_connection() {
//	$this->conn=null;
	// $conn=null;
//	}
# Ejecutar un query simple del tipo INSERT, DELETE, UPDATE
//protected function execute_single_query() {
//	$this->open_connection();
	// $this->conn->query($this->query);
//	$stmt=$this->conn->prepare($this->query);
//	$stmt->execute();
	
	//print_r($stmt->errorInfo());

//	$this->close_connection();
//	}
# Traer resultados de una consulta en un Array
//protected function get_results_from_query() {
//	$this->open_connection();
	
//	$stmt=$this->conn->prepare($this->query);
//	$stmt->execute();


	// $result = $this->conn->query($this->query);
//	while ($this->rows[] = $stmt->fetch(PDO::FETCH_ASSOC));
	// $result->close();
//	$this->close_connection();
	// print_r($this->rows);
//	array_pop($this->rows);
//	}
//}
?>