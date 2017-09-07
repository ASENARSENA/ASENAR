<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registro_personas extends CI_Controller {
	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout("login");	
	}
public function index()
    {
        if($this->input->post())
        {
            if($this->form_validation->run('add_personas'))
            {
                $data=array
                (
                    'PerNombres'=>$this->input->post('nombre',true),
                    'PerApellidos'=>$this->input->post('apellido',true),
                    'PerIdentificacion'=>$this->input->post('identificacion',true),
                    'PerEmail'=>$this->input->post('correo',true),
                    'PerTelefono'=>$this->input->post('telefono',true),
                    'PerContrasena'=>$this->input->post('pass',true),
                    'PerTipoUsuario'=>$this->input->post('roll',true),
                    
                );
                $insertar=$this->personas_model->insertar($data);
                
                $this->session->set_flashdata('css','success');
                $this->session->set_flashdata('mensaje','El registro se ha creado exitosamente');
                redirect(base_url()."registro_personas/index");
            }
        }
        $this->layout->view("index");
    }
}