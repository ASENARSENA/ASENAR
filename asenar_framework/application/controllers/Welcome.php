<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('welcome_message');
	}
	public function getProductos(){

		$this->load->model('webservice_model');
		$data=$this->webservice_model->getProductos();
		//CABEZERA DE JSON
		header('Content-Type: application/json');
		echo json_encode($data);
	}
	public function getLogin(){

		$this->load->model('webservice_model');
		$data=$this->webservice_model->getLogin();
		//CABEZERA DE JSON
		header('Content-Type: application/json');
		echo json_encode($data);
	}

	// public function getLogin(){

	// 	$this->layout->model('webservice_model');
	// 	$data=$this->webservice_model->getLogin();
	// 	//CABEZERA DE JSON
	// 	header('Content-Type: application/json');
	// 	echo json_encode($data);
	// }
}
