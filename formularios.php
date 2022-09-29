<?php
include "clases.php";


class contacto {
	public $nomcon;
	public $mailcon;
	public $mensaje;

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


}

class usuario {
	public $nombre;
	public $mail;
	public $pass;

	function set_nombre($nombre){
		$this->nombre = $nombre;
	}
	
	function set_mailcon($mail){
		$this->mail = $mail;
	}
	
	function set_pass($pass){
		$this->pass = $pass;
	}

	function get_nombre(){
		return $this->nombre;
	}

	function get_mail(){
		return $this->mail;	
	}

	function get_pass(){
		return $this->pass;
	}

	class usuario {
		public $nombre;
		public $mail;
		public $pass;
	
		function set_nombre($nombre){
			$this->nombre = $nombre;
		}
		
		function set_mail($mail){
			$this->mail = $mail;
		}
		
		function set_pass($pass){
			$this->pass = $pass;
		}
	
		function get_nombre(){
			return $this->nombre;
		}
	
		function get_mail(){
			return $this->mail;	
		}
	
		function get_pass(){
			return $this->pass;
		}
}

class articulo {
	public $titulo;
	public $seccion;
	public $notas;

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