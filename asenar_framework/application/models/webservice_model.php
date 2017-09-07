<?php
class Webservice_model extends CI_Model
{
    public function __construct()
    { 
        parent::__construct();
    }
    
     public function getProductos(){
        $query=$this->db->get('productos');
        //$query=$this->db->get('PerTipoUsuario');
        //echo $this->db->last_query();exit;        
        return $query->result_array();  
    }

    public function getLogin(){
        
        //$this->db->where('PerTipoUsuario'==2);
        $query=$this->db->get('personas');
        //echo $this->db->last_query();exit;        
        //return $query->row();
         return $query->result_array(); 

    }
}