<?php
/**
 * Created by PhpStorm.
 * User: brian
 * Date: 04/12/2018
 * Time: 10:05 AM
 */

namespace AppData\Model;


class Personas
{
    private $tabla="Personas";

    private  $id_persona;
    private  $nombre;
    private  $ap_p;
    private  $ap_m;
    private  $edad;
    private  $id_usuario;
    private  $id_sexo;

    function __construct()
    {
        $this->conexion=new conexion();
    }

    public function set($atributo,$valor)
    {
        $this->$atributo=$valor;
    }

    public function get($atributo)
    {
        return $this->$atributo;
    }

    function add()
    {
        $sql="insert into personas values('0','{$this->nombre}','{$this->ap_p}','{$this->ap_m}', '{$this->id_usuario } ' ,'{$this->edad}','{$this->id_sexo}')";
        $this->conexion->QuerySimple($sql);
    }

    function getAll()
    {
        $sql="SELECT * from Personas";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;

    }

    function getOne($id)
    {
        $sql="select * from personas where id_persona='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }
    function delete($id)
    {
        $sql="delete from {$this->tabla} where id_persona='{$id}'";
        $this->conexion->QuerySimple($sql);
    }
    function update()
    {
        $sql = "update {$this->tabla} set nombre='{$this->nombre}',ap_p='{$this->ap_p}', ap_m='{$this->ap_m}',id_usuario='{$this->id_usuario}',edad='{$this->edad}',id_sexo='{$this->id_sexo}'  where id_persona='{$this->id_persona}'";
        $this->conexion->QuerySimple($sql);
    }




}