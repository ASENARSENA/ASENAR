<?php
class usuarios_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }
    
    
    public function getLogin($correo,$pass)
    {
        $query=$this->db
                ->select("*")
                ->from("personas")
                ->where(array('PerNombres'=>$correo,'PerContrasena'=>$pass))
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->row();            
    }
    //LISTAR USUARIOS
     public function getUsuarios(){

        $sql=$this->db
                  ->select('*')
                  ->from('personas')
                  ->get();
        return $sql->result();
     }
    
}

