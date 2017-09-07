<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Formulario extends CI_Controller {

	//http://localhost/asenar_framework/principal

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("template");
    }
    
	//localhost/home/nosotros
    
	public function add()
	{
		//zona de procesamiento del formulario
        $datos=$this->formulario_model->getprueba();
        if($this->input->post())
        {
                $data= array(

                'nombre'=>$this->input->post("nombre",true),
                'correo'=>$this->input->post("correo",true),
                'rut'=>$this->input->post("rut",true),
                'telefono'=>$this->input->post("telefono",true),
                'roll'=>$this->input->post("roll",true),
                'tipo'=>$this->input->post("desayuno",true),
                'tipo'=>$this->input->post("almuerzo",true),

                //'roll'=>$this->input->post("roll",true),
                
                );
                //print_r($data);exit();
                $insertar=$this->formulario_model->insertar($data);
                redirect(base_url()."correo");
            
        }
		$this->layout->view("add", compact('enviarcorreo'));
	}
    
    public function enviarcorreo(){

        $this->load->library('email');
        //de donde mandamos el correo
        $correoGmail=array(
            'protocolo'=>'smtp',
            'smtp_host'=>'ssl://smtp.gmail.com',
            'smtp_port'=>25,
            'smtp_user'=>'correo_gmail',
            'smtp_pass'=>'password',
            'charset'=>'utf-8',
            'newline'=>"\r\n"
            );
        //$config['mailtype']='html';
        $this->email->initialize($correoGmail);
        $this->email->from("jelopez642@misena.edu.co",'Estiven Lopez');
        //correo a enviar
        $this->email->to('dyegovallejob@gmial.com');
        //$this->email->cc('djvallejo8@misena.edu.co');
        //ASUSNTO
        $this->email->subject('Registro ASENAR');
        //MENSAJE
        $this->email->message('<p>Cuenta Registrada Satisfactoriamente</p>');
        $this->email->send();
        var_dump($this->email->print_debugger());

        //ENVIAR
        if ($this->email->send()){
           
          $this->layout->view('index');

        }else{
            echo $this->email->print_debugger();
        }
        
    }
}
