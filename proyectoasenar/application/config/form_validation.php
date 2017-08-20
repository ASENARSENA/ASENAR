<?php
/**
 * Reglas de validacion para formularios
 */
$config = array(
       
        /**
         * add_formulario
         * */
        'add_formulario'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim'),
            array('field' => 'correo','label' => 'E-Mail','rules' => 'required|is_string|trim|valid_email'),
            array('field' => 'telefono','label' => 'Telefono','rules' => 'required|numeric|trim|integer|maxdiez'),
            
        ), 
        
        'add_formulario'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim'),
            array('field' => 'categoria','label' => 'Categoria','rules' => 'required|is_string|trim|max_length[11]'),
            array('field' => 'descripcion','label' => 'Descripcion','rules' => 'required|is_string|trim'),
            
        ), 
        'login'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim'),
            array('field' => 'pass','label' => 'Clave','rules' => 'required|is_string|trim|max_length[11]'),
        ), 
        
        /**
         * elefante
         * */
        'elefante'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[5]'),
            
            
        ), 
        
        
        /**
         * manzana
         * */
        'manzana'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|xss_clean|max_length[5]'),
            array('field' => 'correo','label' => 'E-Mail','rules' => 'required|is_string|trim|xss_clean|valid_email'),
            
        ),
   
   //éste es el final      
);
