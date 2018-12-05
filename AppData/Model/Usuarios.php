<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 04/12/2018
 * Time: 12:41 PM
 */

namespace AppData\Model;


class Usuarios
{

    private  $tabla="Usuarios";
    private $id_usuario;
    private $nickname;
    private $pass;
    private $id_tipo_usuario;


    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo, $valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {

        $sql="insert into {$this->tabla} values('0','{$this->nickname}','{$this->pass}')";
        $this->conexion->QuerySimple($sql);

    }
    function getAll(){
        $sql="select *from {$this->tabla}";
        $datos=$this->conexion->queryResultado($sql);
        return $datos;
    }


    function getOne($id)
    {
        $sql="select * from  {$this->tabla} where id_usuario='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }

}