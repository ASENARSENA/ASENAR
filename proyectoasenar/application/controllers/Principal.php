<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout("frontend");
	}
	public function index(){
		
		$this->layout->view("paginaprincipal");
	}
	public function nosotros($id=null){

		$texto="Hola como estas";
		$arreglo=array("algo"=>1,"nada"=>2,"todo"=>3);
		$this->layout->view("nosotros",compact("id","texto","arreglo"));
	}
	public function contacto(){
		
		$this->layout->setLayout("template");
		$this->layout->view("contacto");
	}
}