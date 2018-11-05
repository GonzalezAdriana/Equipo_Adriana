<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01/10/2018
 * Time: 07:58 AM
 */
namespace AppData\Controller;
class loginController
{
    private $login;
    public function __construct()
    {
        $this->login= new \AppData\Model\Login();
    }
    public function index()
    {
        $datos1=$this->login->getAll();
        $datos[0]=$datos1;
        return $datos;
    }


    public function crear()
    {
        if($_POST)
        {
            $this->login->set('nombre', $_POST["nombre"]);
            $this->login->set('ap_p', $_POST["ap_p"]);
            $this->login->set('ap_m', $_POST["ap_m"]);
            $this->login->set('edad', $_POST["edad"]);
            $this->login->set('id_sexo', $_POST["id_sexo"]);
            $this->login->set('id_tipo_usuario', $_POST["id_tipo_usuario"]);
            $this->login->add();
            $datos1=$this->login->getAll();
            $datos[0]=$datos1;
            return $datos;
           }
    }


}

