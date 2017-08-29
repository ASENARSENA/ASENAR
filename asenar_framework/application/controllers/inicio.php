<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inicio extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
    }

	public function index()
	{
		$datos=$this->inicio_model->getproductosusuario();
		$this->layout->view('inicio',compact('datos'));
	}
}