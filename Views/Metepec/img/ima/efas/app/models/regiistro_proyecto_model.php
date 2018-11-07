<?php
require_once('conexion.php');
	class Registro_proyectos extends conexion {
	public $NOMBRE_CLIENTE;
	public $NOMBRE_PROYECTO;
	public $OBJETIVO_PROYECTO;
	public $RESUMEN_PROYECTO;
	public $DESCRIBE_PROYECTO;
	public $TIPO_PROYECTO;
	public $DIRECCION;
	public $TELEFONO;
	public $CORREO;
	public $ID_REGISTRAR;

	function __construct() {
	$this->db_name = 'book_example';
	}

public function verify_reg($nombre_cliente='') {
	if($nombre_cliente != ''):
	$this->query = "SELECT  * from registro_proyect where  nombre_cliente='".$nombre_cliente."'";
	$this->get_results_from_query();
	endif;
	if(count($this->rows) == 1)
		return true;
	return false;

	}

public function set($user_data=array()) {
	if(array_key_exists('NOMBRE_CLIENTE', $user_data)):
	if(!$this->verify_reg($user_data['NOMBRE_CLIENTE'])):
		foreach ($user_data as $campo=>$valor):
		$$campo = $valor;
		endforeach;
		$this->query = "INSERT INTO registro_proyect VALUES ('','".$NOMBRE_CLIENTE."',
	 '".$NOMBRE_PROYECTO."', '".$OBJETIVO_PROYECTO."', '".$RESUMEN_PROYECTO."',
	 '".$DESCRIBE_PROYECTO."','".$TIPO_PROYECTO."','".$DIRECCION"','".$TELEFONO."','"$CORREO"' )";

	$this->execute_single_query();
	endif;
	endif;
	}
public function edit($user_data=array()) {
	foreach ($user_data as $campo=>$valor):
	$$campo = $valor;
	endforeach;
	$this->query = "
	UPDATE registro_proyect SET nombre_cliente='".$NOMBRE_CLIENTE."',nombre_proyecto='".$NOMBRE_PROYECTO."',objetivo_proyecto='".$OBJETIVO_PROYECTO."' WHERE correo_a = '".$CORREO_ALUMNO."'";
	$this->execute_single_query();
	}
public function delete($alumno_email='') {
	$this->query = "
	DELETE FROM registrar_proyect WHERE nombre_cliente = '".$NOMBRE_CLIENTE."'";
	$this->execute_single_query();
	}

	public function get_all() {
		$this->query="Select * from registro_proyect";
		$this->get_results_from_query();
		return $this->rows;
	}

function __destruct() {
unset($this);
	}
}
?>