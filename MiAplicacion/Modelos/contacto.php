<?php

class Contacto {
	public $nomcon;
	public $mailcon;
	public $mensaje;

	function __construct($minombre,$mimail,$mimensaje){
		$this->nombre = $minombre;
		$this->mail = $mimail;
		$this->mensaje = $mimensaje;
		}

	function set_nomcon($nomcon){
		$this->nomcon = $nomcon;
	}
	
	function set_mailcon($mailcon){
		$this->mailcon = $mailcon;
	}
	
	function set_mensaje($mensaje){
		$this->mensaje = $mensaje;
	}

	function get_nomcon(){
		return $this->nomcon;
	}

	function get_mailcon(){
		return $this->mailcon;	
	}

	function get_mensaje(){
		return $this->mensaje;
	}
