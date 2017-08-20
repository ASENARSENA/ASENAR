<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Producto extends CI_Controller {
	public function __construct(){
		
		parent::__construct();	
		$this->layout->setLayout("frontendamdim");
		
	}

	public function index(){

			 		//MODELO->METODO			
		$datos=$this->producto_model->getProductos();
		//print_r($datos);exit();

		$this->layout->view("index",compact('datos'));
	}

	public function add(){
			
		$categorias=$this->producto_model->getCategoriaId();
		/*
			****AGREGADO POR DYEGO
		*/	
		$fotos=$this->producto_model->getFotosProductos();	
		if ($this->input->post()) {
				
			if ($this->form_validation->run('add_formulario')) {
				
				//REGLA DE VALIDACION
				$data=array(
						//PASAMOS PALAMETROS
					'ProdNombre'=>$this->input->post('nombre',true),
					'ProdCategoria'=>$this->input->post('categoria',true),
					'ProdDescripcion'=>$this->input->post('descripcion',true),
					'ProdImagen'=>$this->input->post('idProducto',true)
				);
				//IMBOCAMOS EL METODO
				$insertar=$this->producto_model->insertar($data);
				//echo $insertar;
				//exit();
				 $this->producto_model->insertarFoto($data);
				$this->session->set_flashdata('css','success');
				$this->session->set_flashdata('mensaje','El registro se realizo correctamente :D');
				//LO REDIRECIONAMOS
				redirect(base_url()."Producto");
			}
		}
		$this->layout->view('add',compact('categorias','foto'));
	}
	 public function fotos($id=null)
    {
        if(!$id){show_404();}
        $datos=$this->productos_model->obtenerporid($id);
        if(sizeof($datos)==0){show_404();}
        if($this->input->post())
        {
            //primero subimos el archivo
            $config['upload_path'] = './public/uploads/productos';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            //$config['max_size']	= '100';
            //$config['max_width'] = '1024';
            //$config['max_height'] = '768';
            //PARA GENERAR UN NOMBRE DINAMICO ENCRIPTADO AL ARCHIVO 
            $config['encrypt_name'] = true;
            $this->load->library('upload', $config);
            //EJECUTA EL UPLOAD DEL ARCHIVO
            if ( ! $this->upload->do_upload('file'))
                {
                $error = array('error' => $this->upload->display_errors());
                   
                }
            
            //obtenemos el nombre del archivo
            $ima = $this->upload->data();
            $file_name = $ima['file_name'];
            //generamos el insert en la tabla respectiva
            $data=array
            (
                                                // ES DEL CAMPO OCULTO DE  FOTOS
                'id_producto'=>$this->input->post('id',true),
                'foto'=>$file_name,
            );
            $this->productos_model->insertarFoto($data);
            $this->session->set_flashdata('css','success');
            $this->session->set_flashdata('mensaje','El registro se ha insertado exitosamente');
            redirect(base_url()."productos/fotos/".$this->input->post('id',true)."/".$this->input->post('pagina',true));
            
        }
        
        $fotos=$this->productos_model->getFotosProductos($id);
        $this->layout->view('fotos',compact('datos','id','fotos'));
    
    }/*
			****HAZTA AQUI
		*/

	public function editar($id=null){

		if (!$id) {			
			show_404();
		}
		//CARGAMOS EL MODELO
		$datos=$this->producto_model->obtenerporid($id);
		
		/******NO FUNCIA
		if (sizeof($datos==0)) {
			show_404();
		}*/
		
		if ($this->input->post()) {
			
			if ($this->form_validation->run('add_formulario')) {
				
				//REGLA DE VALIDACION
				$data=array(
						//PASAMOS PALAMETROS
					'ProdNombre'=>$this->input->post('nombre',true),
					'ProdCategoria'=>$this->input->post('categoria',true),
					'ProdDescripcion'=>$this->input->post('descripcion',true),
					);
				//LLAMAMOS LA FUNCION DEL MODELO PARA EDITAR
				$this->producto_model->update($data,$this->input->post('id',true));
				$this->session->set_flashdata('css','success');
				$this->session->set_flashdata('mensaje','El registro se ha modificado  correctamente :D');
				//LO REDIRECIONAMOS
				redirect(base_url()."producto"); 
			}
		}
		$this->layout->view('editar',compact('datos','id'));

	}
	public function delete($id=null){
		
		if (!$id) {
			show_404();
		}
		$datos=$this->producto_model->obtenerporid($id);
			/******NO FUNCIA
			if (sizeof($datos==0)) {
				show_404();
			}*/
		$this->producto_model->delete($id);
		$this->session->set_flashdata('css','danger');
		$this->session->set_flashdata('mensaje','El registro se ha elimino satisfactoriamente :D');
		redirect(base_url()."producto");
	}
}