<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("frontend");
    }

	public function index()
	{
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