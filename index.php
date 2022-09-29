<?php
//Incluyo los archivos necesarios
require("./Modelos/articulo.php");
require("./Controladores/articulocontrol.php");
require("./Modelos/contacto.php");
require("./Controladores/contactocontrol.php");
require("./Modelos/usuario.php");
require("./Controladores/usuariocontrol.php");
//Instancio el controlador
$artcontroller = new articulocontrol;
$contcontroller = new contactocontrol;
$uscontroller = new usuariocontrol;

//Ejecuto el método
$controller->index();
?>