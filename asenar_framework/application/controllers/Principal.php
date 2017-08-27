<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Principal extends CI_Controller {

	//http://localhost/asenar_framework/principal

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend1");
    }
    
	//localhost/home/nosotros
    
	public function index()
	{
		if($this->session->userdata('id')){

          $datos=$this->productos_model->getProductos();
          $this->layout->view("index", compact('datos'));

        }else{
           redirect(base_url()."acceso/login");
        }

    }
    public function menu($id=null)
	{
		
	}

}
