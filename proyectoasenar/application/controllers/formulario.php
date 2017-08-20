<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout("frontend");
	}

	public function add(){
		
//zona de procesamiento del formulario
        if($this->input->post())
        {
			if ($this->form_validation->run('add_formulario')) {

				echo $this->input->post("nombre");
				echo "<br />";
				echo $this->input->post("correo");
				echo "<br />";
				echo $this->input->post("telefono");
				echo "<br />";
				exit();
			}
		}
		
		//zona de visualización del formulario
		$this->layout->view("add");
	}
}