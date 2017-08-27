<?php
/**
 * Reglas de validacion para formularios
 */
$config = array(
       
        /**
         * add_formulario
         * */
        'add_productos'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[50]'),
            // array('field' => 'imagen','label' => 'Imagen','rules' => 'required|is_string|trim'),
            array('field' => 'categoria','label' => 'Categoria','rules' => 'required|is_string|trim'),
            array('field' => 'descripcion','label' => 'Descripcion','rules' => 'required|is_string|trim'),
            
        ), 
        
        
        /**
         * elefante
         * */
        'elefante'
        => array(
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[5]'),
            array('field' => 'correo','label' => 'E-Mail','rules' => 'required|is_string|trim|valid_email'),
            
        ), 
        
        
        /**
         * login
         * */
        'login'
        => array(
            
           array('field' => 'correo','rules' => 'required|is_string|trim'),
            array('field' => 'pass','rules' => 'required|is_string|trim'),
            
        ),  

        'add_categoria'
        => array(
        
            array('field'=>'categoria','rueles'=>'required|is_string|trim'),
        ),
   //éste es el final      
);
