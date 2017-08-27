<?php 
class Addcategorias_model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();
 	}

 	// metodos de consulta  a la base de datos
 	 public function getCategorias(){
        
        $sql=$this->db
                  ->select("*")
                  ->from("categorias")
                  ->get();
        return $sql->result();        

    }

    public function insertarcategoria($data=array()){

        $this->db->insert('categorias',$data);

        return $this->db->insert_id();
    }
}