<?php 

 class productos_model extends CI_Model
 {
 	
 	public function __construct()
 	{
 		parent:: __construct();
 	}

 	// metodos de consulta  a la base de datos

    public function getproductos(){
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

    public function getCategoriasId(){
        $sql = $this->db
        ->select('*')
        ->from('categorias')
        ->order_by('CatNombre','acs')
        ->get();
        return $sql->result();
    }

     public function getTodosPorId($id)
    {
        $query=$this->db
                ->select("idProductos,ProdNombre,ProdImagen,ProdCategoria,ProdDescripcion")
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

    public function delete($id)
    {
        $this->db->where('idProductos',$id);
        $this->db->delete('productos');
    }

 }


 ?>