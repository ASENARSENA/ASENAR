/* Variables Gloales */
var base_url = "http://[::1]/asenar_framework/";

$(document).ready(function(){	
	$("#crearMenuDia").click(function(event){
		event.preventDefault();

		var opcJornada = $("#opcJornada").val();
		var fechaMenu = $("#fechaMenu").val();

		$.ajax({
			url : base_url+"menu/registrarMenu",
			method : "POST",
			data : {fecha:fechaMenu,jornada:opcJornada},
			type : "json",
			success($data){
				var idMenu = $data;

				$(".opcMenu").each(function(){
					var idProducto = $(this).val();
					var cantidad = $("#cantOpc"+idProducto).val();
					if(this.checked){
						$.ajax({
							url : base_url+"menu/registrarProductosMenu",
							method : "post",
							data : {idProductos:idProducto, idMenu:idMenu, cantidad:cantidad},
						});
					}
				});
				/*Redirección*/
				alert("Se registro el menu correctamente");
				location.reload(base_url+"menu/gestion");
			},
			error($error){
				console.log($error);
			}
		});
	});
});