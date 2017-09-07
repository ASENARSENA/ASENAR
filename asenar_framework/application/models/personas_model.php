<?php
class Personas_Model extends CI_Model
{
    public function __construct(){
      
        parent::__construct();
    }
    
    
    public function getLogin($correo,$pass){
      
        $query=$this->db
                ->select("*")
                ->from("personas")
                ->where(array('PerEmail'=>$correo,'PerContrasena'=>$pass))
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

     public function getUsuariosPorId($id){

        $query=$this->db
                ->select("*")
                ->from("personas")
                ->where(array("idPersona"=>$id))
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->row();            
    }
    
    public function insertar($data=array()){

        $this->db->insert('personas',$data); 
        return $this->db->insert_id();
    }

    public function update($data=array(),$id){

        $this->db->where('idPersona',$id);
        $this->db->update('personas',$data);
    }
    
}

