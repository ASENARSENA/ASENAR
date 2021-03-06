<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Acceso extends CI_Controller {


	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("login");
    }
    
    
	public function index()
	{
		//$this->layout->view("login");
		//$this->load->view("layouts/login");
	}

	public function login(){

        if($this->session->set_userdata('Admin')){
            redirect(base_url()."acceso/login");
        }
        if($this->input->post())
        {
            
            if($this->form_validation->run('login'))
            {
                $data= array(
                    'correo'=>$this->input->post('correo',true),
                    'pass'=>$this->input->post('pass',true),
                    );
                //crear y referenciar un método para preguntar si los datos
                //ingresados por el usuario existen en la bd
                $datos=$this->personas_model->getLogin($this->input->post('correo',true),($this->input->post('pass',true)));
                //crear una condición para validar lo anterior

                 // if ($datos->PerTipoUsuario==1) {
                 //     redirect(base_url()."productos");
                 // }
                if($datos->PerTipoUsuario==2){
                    //darle un nombre al array general de sessiones
                    $this->session->set_userdata('cliente');
                    //asignamos los datos a cada sessión por separado
                    $this->session->set_userdata('id',$datos->idPersona);
                    $this->session->set_userdata('Nombre',$datos->PerNombres);
                    $this->session->set_userdata('Apellido',$datos->PerApellidos);
                    $this->session->set_userdata('Correo',$datos->PerEmail);
                    $this->session->set_userdata('Telefono',$datos->PerTelefono);
                    $this->session->set_userdata('Direccion',$datos->PerDireccion);
                    //redireccionamos a la url principal de los contenidos restringidos
                     redirect(base_url()."personas");
                    }

                if(sizeof($datos)==0)
                {
                    $this->session->set_flashdata('css','danger');
                    $this->session->set_flashdata('mensaje','Los datos ingresados no existen en nuestra base de datos');
                    redirect(base_url()."acceso/login");
                }else
                {
                    //darle un nombre al array general de sessiones
                    $this->session->set_userdata('Admin');
                    //asignamos los datos a cada sessión por separado
                    $this->session->set_userdata('id',$datos->idPersona);
                    $this->session->set_userdata('Nombre',$datos->PerNombres);
                    //redireccionamos a la url principal de los contenidos restringidos
                    redirect(base_url()."productos");
                }
            }
        }
        $this->layout->view('login');
    }

    public function restringido1()
    {
        if($this->session->userdata('id')){

            //$this->layout->view("productos");
            redirect(base_url()."productos");
        }else{

            redirect(base_url()."acceso/login");
        }
    }
    public function salir(){

            $this->session->sess_destroy("Admin");
            redirect(base_url().'acceso/login',  301);
        }
    
}
