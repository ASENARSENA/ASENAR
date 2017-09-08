<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Personas extends CI_Controller {
	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout("layoutinciocliente");	
	}

	 /* public function index(){

	         if($this->session->userdata('id')){

	             $this->layout->view("productos");
	                $datos=$this->usuarios_model->getUsuarios();
	  			$this->layout->view('index', compact('datos'));
	         }else
	         {
	  	  redirect(base_url()."acceso/login");
	        	}		
	  }*/
	  public function index(){

	  	$datos=$this->inicio_model->getproductosusuario();
	  	$this->layout->view('portal', compact('datos'));
	  }

  

	public function perfil($id=null){
    
		$this->layout->setLayout("layoutCliente");
		$datos=$this->personas_model->getUsuariosPorId($id);
		$this->layout->view('perfil',compact('datos'));
	}

	public function edit($id=null){
		
		$this->layout->setLayout("layoutCliente");
		 if (!$id) {         
          show_404();
      }
          //CARGAMOS EL MODELO
  	$datos=$this->personas_model->getUsuariosPorId($id);
           if ($this->input->post()) {
              
               if ($this->form_validation->run('add_personas')) {
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
                
                $this->personas_model->update($data,$this->input->post('id',true));
                $this->session->set_flashdata('css','success');
                $this->session->set_flashdata('mensaje','Su Perfil  se ha modificado  correctamente :D');
                  //LO REDIRECIONAMOS
                  redirect(base_url()."perfil"); 
               }
            }
       $this->layout->view('edit' ,compact('datos'));	   
    }
      //SOLO ENVIA CORREO SI TIENE HOSTING FALLA...GRAN PARTE TERMINADA
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
         $config['mailtype']='html';
         $this->email->initialize($correoGmail);
         $this->email->from("jelopez642@misena.edu.co",'Estiven Lopez');
         //correo a enviar
         $this->email->to('dyegovallejob@gmial.com');
         $this->email->cc('djvallejo8@misena.edu.co');
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

