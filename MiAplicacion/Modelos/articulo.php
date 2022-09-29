<?php

class Articulo {
	public $titulo;
	public $seccion;
	public $notas;

	function __construct($minombre,$mimail,$mipass){
		$this->nombre = $minombre;
		$this->mail = $mimail;
		$this->pass = $mipass;
		}

	function set_titulo($titulo){
		$this->titulo = $titulo;
	}
	
	function set_seccion($seccion){
		$this->seccion = $seccion;
	}
	
	function set_notas($notas){
		$this->notas = $notas;
	}

	function get_titulo(){
		return $this->titulo;
	}

	function get_seccion(){
		return $this->seccion;	
	}

	function get_notas(){
		return $this->notas;
	}

?>