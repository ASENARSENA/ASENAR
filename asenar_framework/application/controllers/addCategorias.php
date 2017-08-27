<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AddCategorias extends CI_Controller {

	//http://localhost/asenar_framework/principal

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("template1");
    }
    
	public function index(){
        
    if($this->session->userdata('id')){

          $datos=$this->productos_model->getProductos();
          $this->layout->view("index", compact('datos'));

        }else{
           redirect(base_url()."acceso/login");
        }

    }


  public function add(){

   // $categorias=$this->addcategorias_model->getCategorias();
    if ($this->input->post()) {
               
            if ($this->form_validation->run('add_categoria')) {
                   
                 $data= array(
                  'CatNombre'=>$this->input->post('categoria',true),
                 );  
                 $insertar=$this->addcategorias_model->insertarcategoria($data);
                 $this->session->set_flashdata('css','success');
                 $this->session->set_flashdata('mensaje','La categoria se ha creado exitosamente');
                 redirect(base_url()."productos");
            }
       } 
        $this->layout->view('index');  
   }
}