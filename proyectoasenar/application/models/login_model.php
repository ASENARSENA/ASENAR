<?php
class login_model extends CI_Model
{
    public function __construct()
    { 
        parent::__construct();
    }
    
    public function getLogin($nombre,$pass){
    	
    	$query=$this->db
                ->select("*")
                ->from("usuarios")
                ->where(array('usulogin'=>$nombre,'usupassword'=>$pass))
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->row();  
    }
}