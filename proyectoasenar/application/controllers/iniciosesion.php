<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Iniciosesion extends CI_Controller {
    
	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout("iniciarsesion");
		
	}

	public function index()
	{
		
        $datos=$this->productos_model->getProductos();
        //print_r($datos);exit;
        $this->layout->view("index",compact('datos'));
	}
    public function login()
    {
        if($this->input->post())
        {
            if($this->form_validation->run('login'))
            { 
                
                //crear y referenciar un método para preguntar si los datos
                //ingresados por el usuario existen en la bd
                $datos=$this->login_model->getLogin($this->input->post('nombre',true),($this->input->post('pass',true)));
                //crear una condición para validar lo anterior
                if(sizeof($datos)==0)
                {
                    $this->session->set_flashdata('css','danger');
                    $this->session->set_flashdata('mensaje','Los datos ingresados no existen en nuestra base de datos');
                    redirect(base_url()."iniciosesion/login");
                }else 
                {
                    //darle un nombre al array general de sessiones
                    $this->session->set_userdata('asenar');
                    //asignamos los datos a cada sessión por separado
                    $this->session->set_userdata('id',$datos->id);
                    $this->session->set_userdata('nombre',$datos->nombre);
                    //redireccionamos a la url principal de los contenidos restringidos
                    redirect(base_url()."producto");
                }
            }
        }
        $this->layout->view('login');
    }
    public function restringido1(){
        
        if($this->session->userdata('id'))
        {
            $this->layout->view("index");
        }else
        {
            redirect(base_url()."producto");
        }
    }
    public function salir(){

       $this->session->sess_destroy("asenar");
       redirect(base_url().'acceso/login',  301);
    }
}