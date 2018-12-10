<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 26/11/2018
 * Time: 07:30 AM
 */

namespace AppData\Controller;


class PersonasController
{
private $Personas,$Sexos,$Tipos_usuarios,$Usuarios;

    public function __construct()
    {
        $this->Personas= new \AppData\Model\Personas();
        $this->Sexos= new \AppData\Model\Sexos();
        $this->Tipos_usuarios= new \AppData\Model\Tipos_usuarios();
        $this->Usuarios= new \AppData\Model\Usuarios();


    }
    public function index()
{
    $datos1=$this->Personas->getAll();

    $datos2=$this->Sexos->getAll();
    $datos3=$this->Tipos_usuarios->getAll();
    $datos4=$this->Usuarios->getAll();

    $datos[0]=$datos1;
    $datos[1]=$datos2;
    $datos[2]=$datos3;
    $datos[3]=$datos4;


    return $datos;
}
    public function crear(){
        if($_POST)
        {
            $this->Personas->set('nombre',$_POST["nombre"]);
            $this->Personas->set('ap_p',$_POST["ap_p"]);
            $this->Personas->set('ap_m',$_POST["ap_m"]);
            $this->Personas->set('id_usuario',$_POST["id_usuario"]);
            $this->Personas->set('edad',$_POST["edad"]);
            $this->Personas->set('id_sexo',$_POST["id_sexo"]);
            $this->Usuarios->set('nickname',$_POST["nickname"]);
            $this->Usuarios->set('pass',$_POST["pass"]);
            $this->Personas->add();
            $datos1=$this->Personas->getAll();
            $datos[0]=$datos1;

            $this->Usuarios->add();
            $datos4=$this->Usuarios->getAll();
            $datos[3]=$datos4;
            return $datos;



            ?>
            <script type="text/javascript">
                window.location.href = "<?php echo URL?>login";
                }
            </script>
            <?php

        }
        }
    public function print_pdf()
    {
        $datos = $this->Personas->getAll();
        return $datos;
    }

}