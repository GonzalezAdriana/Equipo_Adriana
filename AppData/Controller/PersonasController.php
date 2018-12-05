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
private $Personas,$Sexos,$Tipos_usuarios;

    public function __construct()
    {
        $this->Personas= new \AppData\Model\Personas();
        $this->Sexos= new \AppData\Model\Sexos();
        $this->Tipos_usuarios= new \AppData\Model\Tipos_usuarios();

    }
    public function index()
{
    $datos1=$this->Personas->getAll();

    $datos2=$this->Sexos->getAll();
    $datos3=$this->Tipos_usuarios->getAll();

    $datos[0]=$datos1;
    $datos[1]=$datos2;
    $datos[2]=$datos3;


    return $datos;
}
    public function crear(){
        if($_POST)
        {
            $this->Personas->set('nombre',$_POST["nombre"]);
            $this->Personas->set('ap_p',$_POST["ap_p"]);
            $this->Personas->set('ap_m',$_POST["ap_m"]);
            $this->Personas->set('edad',$_POST["id_edad"]);
            $this->Personas->set('id_usuario',$_POST["id_usuario"]);
            $this->Personas->set('id_sexo',$_POST["id_sexo"]);
            $this->Personas->add();
            $datos1=$this->Personas->getAll();
            $datos[0]=$datos1;
            return $datos;


        }

    }
    public function print_pdf()
    {
        $datos = $this->Personas->getAll();
        return $datos;
    }

}