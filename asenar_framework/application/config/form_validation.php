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
            
            array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[50]'),
            // array('field' => 'imagen','label' => 'Imagen','rules' => 'required|is_string|trim'),
            array('field' => 'categoria','label' => 'Categoria','rules' => 'required|is_string|trim'),
            array('field' => 'descripcion','label' => 'Descripcion','rules' => 'required|is_string|trim'),
            
        ), 
        
        // <!--'add_formulario_prueba'
        // => array(

        //     array('field' => 'nombre','label' => 'Nombre','rules' => 'required|is_string|trim|max_length[50]'),
        //     // array('field' => 'imagen','label' => 'Imagen','rules' => 'required|is_string|trim'),
        //     array('field' => 'categoria','label' => 'Categoria','rules' => 'required|is_string|trim'),
        //     array('field' => 'descripcion','label' => 'Descripcion','rules' => 'required|is_string|trim'),    

        //     ),-->
        /**
         * elefante
         * */
        'add_personas'
        => array(
            
            array('field' => 'nombre','label' => 'nombre','rules' => 'required|is_string|trim'),
            array('field' => 'apellido','label' => 'apellido','rules' => 'required|is_string|trim'),
            array('field' => 'identificacion','label' => 'identificacion','rules' => 'required|is_string|trim'),
            array('field' => 'correo','label' => 'correo','rules' => 'required|trim'),
            array('field' => 'telefono','label' => 'telefono','rules' => 'trim'),
            array('field' => 'pass','label' => 'pass','rules' => 'required|trim'),
            
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
        
            array('field'=>'categorias','rules'=>'required|is_string|trim'),
        ),
   //éste es el final      
);
