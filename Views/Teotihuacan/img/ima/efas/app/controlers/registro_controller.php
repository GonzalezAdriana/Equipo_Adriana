<?php
	if(isset($_POST["action"])||isset($_GET["action"])){
		require_once('../models/registro_proyecto_model.php');
		$regis=new Registro();
		$action=(isset($_POST["action"]))?$_POST["action"]:$_GET["action"];
		switch($action){
			case "insert":
				$NOMBRE_CLIENTE=$_POST["NOMBRE_CLIENTE"];
				$NOMBRE_PROYECTO=$_POST["NOMBRE_PROYECTO"];
				$OBJETIVO_PROYECTO=$_POST["OBJETIVO_PROYECTO"];
				$RESUMEN_PROYECTO=$_POST["RESUMEN_PROYECTO"];
				$DESCRIPCION_PROYECTO=$_POST["DESCRIPCION_PROYECTO"];
				$TIPO_PROYECTO=$_POST["TIPO_PROYECTO"];
				$DIRECCION=$_POST["DIRECCION"];
				$TELEFONO=$_POST["TELEFONO"];
				if(!$regis->verify_reg($NOMBRE_CLIENTE)){
					$new_registro_data = array(
							'NOMBRE_CLIENTE'=>$NOMBRE_CLIENTE,
							'NOMBRE_PROYECTO'=>$NOMBRE_PROYECTO,
							'OBJETIVO_PROYECTO'=>$OBJETIVO_PROYECTO,
							'RESUMEN_PROYECTO'=>$RESUMEN_PROYECTO,
							'DESCRIPCION_PROYECTO'=>$DESCRIPCION_PROYECTO,
							'TIPO_PROYECTO'=>$TIPO_PROYECTO,
							'DIRECCION'=>$DIRECCION,
							'TELEFONO'=>$TELEFONO
							);
					$regis->set($new_registro_data);
					?>
					<script type="text/javascript">
						$("#form_registro #nombre_cliente").val("");
		            	$("#form_registro #nombre_proyecto").val("");
		            	$("#form_registro #objetivo_proyecto").val("");
		            	$("#form_registro #resumen_proyecto").val("");
		            	$("#form_registro #descripcion_proyecto").val("");
		            	$("#form_registro #tipo_proyecto").val("");
		            	$("#form_registro #direccion").val("");
		            	$("#form_registro #telefono").val("");
					Materialize.toast("Registro Exitoso",2500);
						$("#agregar_proyecto").closeModal();
					</script>
					<?php
				}
				else
					{?>
					<script type="text/javascript">
					Materialize.toast("Este Cliente ya Existe",2500);
					</script>
					<?php }	
			break;
			case "select_all":
				echo json_encode($regis->get_all());
			break;
		}


	}
	else
	{
		echo "tonto no puedes entrar vuelve a intentar";
	}



//require_once('../models/alumnos_model.php');

//$alum=new Alumno();
//echo $alum->verify_reg("1234");





/*
# Crear un nuevo usuario
$new_alumno_data = array(
'NOMBRE_ALUMNO'=>'Maria'"];$
'APELLIDOS_ALUMNO'=>'Lopez'"];$
'CORREO_ALUMNO'=>'cabrera@mail.com'"];$
'CLAVE_ALUMNO'=>'3890'
);
$alumno2 = new Alumno();
$alumno2->set($new_alumno_data);
$alumno2->get($new_alumno_data['CORREO_ALUMNO']);
print $alumno2->NOMBRE_ALUMNO . ' ' . $alumno2->APELLIDOS_ALUMNO . ' ha sido creado<br>';
*/# Editar los datos de un usuario existente
// $edit_alumno_data = array(
// 'NOMBRE_ALUMNO'=>'Luis'"];$
// 'APELLIDOS_ALUMNO'=>'Lopez'"];$
// 'CORREO_ALUMNO'=>'luis2000@mail.com'"];$
// 'CLAVE_ALUMNO'=>'6925474'
// );
// $alumno3 = new Alumno();
// $alumno3->edit($edit_alumno_data);
// $alumno3->get($edit_alumno_data['EMAIL']);
// print $alumno3->NOMBRE_ALUMNO . ' ' . $alumno3->APELLIDOS_ALUMNO . ' ha sido editado<br>';
# Eliminar un usuario
// $alumno4 = new Alumno();
// $alumno4->get('luis2000@mail.com');
// $alumno4->delete('luis2000@mail.com');
// print $alumno4->NOMBRE_ALUMNO . ' ' . $alumno4->APELLIDOS_ALUMNO . ' ha sido eliminado';
?>   