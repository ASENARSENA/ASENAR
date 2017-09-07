<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {

	//http://localhost/asenar_framework/principal

	public function __construct()
    {
        parent::__construct();
        $this->layout->setLayout("template1");
    }

    public function gestion()
    {
        if($this->session->userdata('id'))
        {
            $datos=$this->menu_model->getProductos();
            $date = date_default_timezone_get();
            $this->layout->view("gestion", compact('datos', 'date'));
        }
    }
/*public function almuerzo()
{
    if($this->session->userdata('id'))
    {
        $datos=$this->menu_model->getProductos();
        $this->layout->view("almuerzo", compact('datos'));
    }
}
public function comida()
{
    if($this->session->userdata('id'))
    {
        $datos=$this->menu_model->getProductos();
        $this->layout->view("comida", compact('datos'));
    }
}*/
// public function dias()
// {
//     if($this->session->userdata('id'))
//     {
//         $datos=$this->menu_model->getMenuDia();
//         $this->layout->view("dias", compact('datos'));
//     }
// }
    public function registrarMenu(){
        $datos = [
                    "idMenu" => null,
                    "fecha" => $_POST['fecha'],
                    "jornada" => $_POST['jornada']
                ];
        $response = $this->menu_model->insertar($datos);
        echo json_encode($response);
    }

    public function registrarProductosMenu(){
        $datos = [
                    "idMenuProducto" => null,
                    "idProductos" => $_POST["idProductos"],
                    "idMenu" => $_POST["idMenu"],
                    "cantidad" => $_POST["cantidad"]
                ];
        $this->menu_model->insertarProductos($datos);
    }
}
