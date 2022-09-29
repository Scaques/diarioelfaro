<?php

class UsuarioController
{
 var $usuatios;
 function __construct()
 {
 $this->autos = [
 new Articulo("Wolkswagen","Polo","negro","Rebeca"),
 ];
 }
 public function index(){
 //Asignar autos a una variable que estará esperando la vista
 $rowset = $this->autos;
 //Datos a la vista
 require("view/index.php");
 }
}

?>