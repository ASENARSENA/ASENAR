<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {
	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout("frontenadmin");	
	}
	public function lista(){

			 		//MODELO->METODO			
		$datos=$this->usuario_model->getUsuarios();
		/*
		******ERROR EN CARGAR LA VISTA ATT:ESTIVEN******
		*/	
		$this->layout->view('lista',compact('datos'));
	}
}