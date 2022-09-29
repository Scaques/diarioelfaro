<?php

class ContactoController
{
 var $contactos;
 function __construct()
 {
 $this->contactos = [
	new Contacto(document.getElementById("nomcon").value,document.getElementById("mailcon").value,document.getElementById("mensaje").value), ];
 }
 public function index(){

 $rowset = $this->autos;

 require("view/index.php");
 }
}

?>