<?php 

 class productos_model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();
 	}

 	// metodos de consulta  a la base de datos

    public function getProductos(){
    	$sql=$this->db
    	->select("idProductos,ProdNombre,ProdImagen,CatNombre,ProdDescripcion")
    	->from("Productos")
    	->order_by("idProductos","asc")
    	->join("categorias","productos.ProdCategoria=categorias.idCategoria")
    	->get();
    	return $sql->result();
    }

    public function getCategorias(){
        $this->db->order_by('CatNombre','asc');
        $categorias = $this->db->get('categorias');

        if($categorias->num_rows() > 0)
        {
          return $categorias->result();
        }
    }

    public function getCategoriasId($id){

        $this->db->order_by('CatNombre','asc');
        $categorias = $this->db->get('categorias');

        if($categorias->num_rows() > 0)
        {
          return $categorias->result();
        }
          
    }

     public function getTodosPorId($id)
    {
        $query=$this->db
                ->select("*")
                ->from("productos")
                ->where(array("idProductos"=>$id))
                ->get();
        //echo $this->db->last_query();exit;        
        return $query->row();            
    }

    public function insertar($data=array())
    {
        $this->db->insert('productos',$data);
        return $this->db->insert_id();
    }

    public function update($data=array(),$id)
    {
        $this->db->where('idProductos',$id);
        $this->db->update('productos',$data);
    }

   public function delete($id){
        
        $this->db->where('idProductos',$id);
                       //LA TABLA Y EL DATO POR ARREGLO
                        //EN ESTE NO NECESITAMOS EL DATO
        $this->db->delete('productos');
    }

 }


 ?>