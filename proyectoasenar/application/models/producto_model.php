<?php
/**
* 	TRAE LA INFO DE LA BASE DE DATOS
*/
class Producto_model extends CI_Model{

function __constructs(){
	parent::__construct();
}
//METODOS DE CONSULTA Y USAS EL ACTIVE RECODS QUE ES UNA CLASE PARA HACER EL CRUD MAS FACIL

	public function getProductos(){ 
		
		$query=$this->db
					->select("*")
			 		->from("productos")
					->order_by("idProductos","asec")
					->join('categorias','productos.ProdCategoria=categorias.CatNombre')
					->get();
		
		//HELPER PARA VER LA SENTENCIA QUE SE ESTA REALIZANDO=last_query
		#echo $this->db->last_query(); exit();
		return $query->result();
	}	

	public function listar()
	{
		$sql=$this->db->query('SELECT idCategoria,CatNombre from categorias');
		return $sql->result_array();
		foreach ($sql -> result() as $reg) {
			$data[$reg->idCategoria]=$reg->CatNombre;
		}
		return $data;
	}

	 public function getCategoriaId(){
	 	$sql=$this->db
	 			  ->select("*")
	 			  ->from('categorias')
	 			  ->order_by('CatNombre','asec')
	 			  ->get();
	 			  return $sql->result();
	 }
	public function insertar($data=array()){
		
 		 $this->db->insert('productos',$data);
 		 return $this->db->insert_id();
    }
    
   /* public function categorias(){
    	$sql=$this->db->query('SELECT idCategoria,CatNombre from categorias');
		foreach ($sql -> result() as $cat) {
			$menu[$cat->idCategoria]=$cat->CatNombre;
		}
 		return $menu;
    }*/

	public function update($data=array(),$id){

		$this->db->where('idProductos',$id);
					   //LA TABLA Y EL DATO POR ARREGLO
		$this->db->update('productos',$data);
		
	} 

	public function obtenerporid($id){

		$query=$this->db
					->select("*")
					->from("productos")
								//id= al id de la URL
					->where(array("idProductos"=>$id))
					->join('categorias','productos.ProdCategoria=categorias.CatNombre')
					->get();
		
		//HELPER PARA VER LA SENTENCIA QUE SE ESTA REALIZANDO=last_query
		#echo $this->db->last_query(); exit();
		return $query->row();		

	}
/*
			****AGREGADO POR DYEGO
		*/
	 public function getFotosProductos($id){
        $query=$this->db
                ->select("ProdImagen")
                ->from("productos")
                ->where(array("idProductos"=>$id))
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->result();            
    }

     public function insertarFoto($data=array()){

        $this->db->insert('productos',$data);
        return $this->db->insert_id();
    }
    /*
			****HAZTA AQUI
		*/
	public function delete($id){
		
		$this->db->where('idProductos',$id);
					   //LA TABLA Y EL DATO POR ARREGLO
						//EN ESTE NO NECESITAMOS EL DATO
		$this->db->delete('productos');
	}
}