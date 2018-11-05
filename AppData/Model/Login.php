<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 01/10/2018
 * Time: 07:59 AM
 */
namespace AppData\Model;
class Login
{
    private $tabla="usuarios";
    private $nombre;
    private $ap_p;
    private $ap_m;
    private $edad;
    private $id_sexo;
    private $id_tipo_usuario;
    public function __construct()
    {
        $this->conexion= new conexion();
    }
    public function add()
    {
        $sql="insert into {$this->tabla} values('0','{$this->nombre}',
         '{$this->ap_p}','{$this->am_p}',{$this->edad},'{$this->id_sexo}',{$this->id_tipo_usuario})";
        $this->conexion->QuerySimple($sql);

    }
    function getAll()
    {
        $sql="SELECT nombre,ap_p,ap_m,edad,id_sexo,id_tipo_usuario FROM usuarios";

        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }
    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }
    public function get($atributo)
    {
        return $this->$atributo;
    }


}