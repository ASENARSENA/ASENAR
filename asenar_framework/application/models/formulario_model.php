<?php 

 class Formulario_model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();
 	}

 	// metodos de consulta  a la base de datos

    public function getprueba(){
    	$sql=$this->db
    	->select("*")
    	->from("prueba")
    	->get();
    	return $sql->result();
    }

      public function insertar($data=array()){

        $this->db->insert('prueba',$data); 
        return $this->db->insert_id();
    }

}