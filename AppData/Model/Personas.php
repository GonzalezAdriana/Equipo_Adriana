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
        $sql="SELECT personas.id_persona, personas.nombre, personas.ap_p, personas.ap_m, personas.edad, usuarios.id_usuario, sexos.id_sexo
              FROM personas, usuarios, sexos 
              WHERE personas.id_usuario = usuarios.id_usuario 
              and personas.id_sexo = sexos.id_sexo
              ORDER BY id_persona ASC ";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }


    function getOne($id)
    {
        $sql="select * from personas where id_persona='{$id}'";
        $datos=$this->conexion->QueryResultado($sql);
        return $datos;
    }


}