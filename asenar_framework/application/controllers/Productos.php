<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Productos extends CI_Controller {
	//http://localhost/asenar_framework/principal

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("template1");
    }
    
	public function index()
	{
        if($this->session->userdata('id'))
        {
            //$this->layout->view("productos");
                $datos=$this->productos_model->getProductos();
                $this->layout->view("index", compact('datos'));
            }else
                {
                redirect(base_url()."acceso/login");
        }		
	}

	public function add()
	{

		//zona de procesamiento del formulario
        $categorias=$this->productos_model->getCategoriasId();
        if($this->input->post())
           
        {
                 //print_r($_POST);
                 //$nombre_img = $_FILES['imagen']['name'];
                 //echo "$nombre_img";exit();
                //primero subimos el archivo
                 $config['upload_path'] = './public/uploads/productos';
                 $config['allowed_types'] = 'gif|jpg|png|jpeg';
                 //$config['max_size']   = '100';
                 //$config['max_width'] = '1024';
                 //$config['max_height'] = '768';
                 $config['encrypt_name'] = true;
                 $this->load->library('upload', $config);
                 if ( ! $this->upload->do_upload('imagen'))
                     {
                     $error = array('error' => $this->upload->display_errors());
                       
                     }
                
                // //obtenemos el nombre del archivo
                 $ima = $this->upload->data();
                 $file_name = $ima['file_name'];
                //generamos el insert en la tabla respectiva
            if($this->form_validation->run('add_productos'))
            {
            	$data= array(
                'ProdNombre'=>$this->input->post("nombre",true),
                //'ProdImagen'=> $this->input->post("imagen",true),
                'ProdImagen'=>$file_name,
                'ProdCategoria'=>$this->input->post("categoria",true),
                'ProdDescripcion'=>$this->input->post("descripcion",true),
                );

                $insertar=$this->productos_model->insertar($data);
                $this->session->set_flashdata('css','success');
                $this->session->set_flashdata('mensaje','El registro se ha creado exitosamente');
                redirect(base_url()."productos");
            }
        }
        //
		$this->layout->view('add', compact('categorias'));
	}

	public function edit($id=null)
    {
        if(!$id){show_404();}
        $datos=$this->productos_model->getTodosPorId($id);
        if(sizeof($datos)==0){show_404();}
        if($this->input->post())
        {
            if($this->form_validation->run('add_productos'))
            {
                $data=array
                (
                    'ProdNombre'=>$this->input->post('nombre',true),
                    'ProdImagen'=>$this->input->post('imagen',true),
                    'ProdCategoria'=>$this->input->post('categoria',true),
                    'ProdDescripcion'=>$this->input->post('descripcion',true),
                );
                $this->productos_model->update($data,$this->input->post('id',true));
                $this->session->set_flashdata('css','success');
                $this->session->set_flashdata('mensaje','El registro se ha modificado exitosamente');
                redirect(base_url()."productos");
            }
        } 
        $this->layout->view('edit',compact('datos','id'));
    }

    public function delete($id=null)
    {
        if(!$id){show_404();}
        $datos=$this->productos_model->getTodosPorId($id);
        if(sizeof($datos)==0){show_404();}
        $this->productos_model->delete($id);
        $this->session->set_flashdata('css','success');
        $this->session->set_flashdata('mensaje','El registro se ha eliminado exitosamente');
        redirect(base_url()."productos");
    }
}
