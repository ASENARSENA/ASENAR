<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categorias extends CI_Controller {

	//http://localhost/asenar_framework/principal

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("template1");
    }
    
	public function index(){
        
    if($this->session->userdata('id')){

         //$datos=$this->productos_model->getProductos();
          $datos=$this->categorias_model->getcate();
          $this->layout->view("index", compact('datos'));

        }else{
           redirect(base_url()."acceso/login");
        }

    }

  public function add(){

   //$categorias=$this->addcategorias_model->getCategorias();
    if ($this->input->post()) {
               
            if ($this->form_validation->run('add_categoria')) {
                   
                $data= array('CatNombre'=>$this->input->post('categorias',true),
                );  
                $insertar=$this->categorias_model->add($data);
                 $this->session->set_flashdata('css','success');
                 $this->session->set_flashdata('mensaje','La categoria se ha creado exitosamente');
                 redirect(base_url()."categorias");
            }
       } 
        $this->layout->view('add');  
   }

   public function edit($id=null){

        if (!$id) {         
            show_404();
        }
        //CARGAMOS EL MODELO
        $datos=$this->categorias_model->getCatePorId($id);
        if ($this->input->post()) {
               
            if ($this->form_validation->run('add_categoria')) {
                   
                $data= array(
                  'CatNombre'=>$this->input->post('categorias',true),
                  ); 
                $this->categorias_model->update($data,$this->input->post('id',true));
                $this->session->set_flashdata('css','success');
                $this->session->set_flashdata('mensaje','La categoria se ha Editado exitosamente');
                 redirect(base_url()."categorias");
            }
       }

       $this->layout->view('edit',compact('datos','id'));

  }
  public function delete($id=null){
        
        if (!$id) {
            show_404();
        }
        $datos=$this->categorias_model->getCatePorId($id);
            /******NO FUNCIA
            if (sizeof($datos==0)) {
                show_404();
            }*/
        $this->categorias_model->delete($id);
        $this->session->set_flashdata('css','danger');
        $this->session->set_flashdata('mensaje','El registro se ha elimino satisfactoriamente :D');
        redirect(base_url()."categorias");
    }
}