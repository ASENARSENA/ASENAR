<?php 
class categorias_model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();
 	}

    public function getcate(){
        $sql=$this->db
        ->select("*")
        ->from("categorias")
        ->get();
        return $sql->result();
    }

 	// metodos de consulta  a la base de datos
 	 public function getCategorias(){
        $this->db->order_by('CatNombre','asc');
        $categorias = $this->db->get('categorias');

        if($categorias->num_rows() > 0)
        {
          return $categorias->result();
        }
    }

    public function add($data=array()){
      
        $this->db->insert('categorias',$data);
        return $this->db->insert_id();
    }

     public function getCatePorId($id){
        
        $query=$this->db
                ->select("*")
                ->from("categorias")
                ->where(array("idCategoria"=>$id))
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->row();            
    }
     public function update($data=array(),$id){
        
        $this->db->where('idCategoria',$id);
        $this->db->update('categorias',$data);
    }
     public function delete($id){
        
        $this->db->where('idCategoria',$id);
                       //LA TABLA Y EL DATO POR ARREGLO
                        //EN ESTE NO NECESITAMOS EL DATO
        $this->db->delete('categorias');
    }
}