$(document).on("ready");

function eliminar(url)
{
    if(confirm('Realmente desea eliminar este registro?'))
    {
        window.location=url;
    }
}

//BUSQUEDA

function inicio() {
	mostardatos("");
	$(#buscar).keyup(function(event) {
		
		buscar=$(#buscar).val();
		mostardatos(buscar);

	});
}

 function validarForm(formulario){
        if(formulario.palabra.value.length==0) 
        { //¿Tiene 0 caracteres?
            formulario.palabra.focus();  // Damos el foco al control
            alert('Debes rellenar este campo'); //Mostramos el mensaje
            return false; 
         } //devolvemos el foco  
         return true; //Si ha llegado hasta aquí, es que todo es correcto 
     }   