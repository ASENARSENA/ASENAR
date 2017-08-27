<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuarios extends CI_Controller {
	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout("template1");	
	}

	public function index(){

        if($this->session->userdata('id')){

            //$this->layout->view("productos");
               $datos=$this->usuarios_model->getUsuarios();
				$this->layout->view('index', compact('datos'));
        }else
        {
		  redirect(base_url()."acceso/login");
       	}		
	}
	// public function verPerfil(){

	// 		 		//MODELO->METODO			
	// 	$datos=$this->usuarios_model->getUsuarios();
		
	// 	******ERROR EN CARGAR LA VISTA ATT:ESTIVEN******
			
	// 	$this->layout->view('index', compact('datos'));
	// }
}