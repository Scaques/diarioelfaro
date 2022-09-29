<?php

class Usuario {
	public $nombre;
	public $mail;
	public $pass;

	function __construct($minombre,$mimail,$mipass){
		$this->nombre = $minombre;
		$this->mail = $mimail;
		$this->pass = $mipass;
		}
	
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
