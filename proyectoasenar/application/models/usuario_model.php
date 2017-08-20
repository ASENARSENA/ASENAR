<?php
/**
* 	TRAE LA INFO DE LA BASE DE DATOS
*/
class Usuario_model extends CI_Model{
	
	function __constructs(){
		parent::__construct();
	}

	//LISTAR USUARIOS
	 public function getUsuarios(){

	 	$sql=$this->db
	 			  ->select('*')
	 			  ->from('personas')
	 			  ->order_by('idPersona','asec')
	 			  //->select("CONCAT(PerNombre,' ',PerApellido) as Nombre_Completo")
	 			  ->get();
	 	//echo $this->db->last_query(); exit();
	 	return $sql->result();
	 }
}
