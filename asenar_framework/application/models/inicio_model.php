<?php 

 class Inicio_model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();
 	}
	public function getproductosusuario(){
    	$sql=$this->db
    	->select("idProductos,ProdNombre,ProdImagen,CatNombre,ProdDescripcion")
    	->from("Productos")
    	->order_by("idProductos","asc")
    	->join("categorias","productos.ProdCategoria=categorias.idCategoria")
    	->get();
    	return $sql->result();
    }
      public function getUsuarios(){

        $sql=$this->db
                  ->select('*')
                  ->from('personas')
                  ->get();
        return $sql->result();
     }
    
}