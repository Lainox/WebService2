<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript" src="jquery-1.11.3.js"></script>
	<script type="text/javascript">
	$(document).ready(function(){
		$("#boton").click(function(){
			var libro = $("#libro").val();
			$("input").focus(function(){
				this.value = "";
			});
			
			$.ajax({
				url: "procesar.php",
				data: {
					"libro": libro
				},
				type:"POST",
				datatype: "json",
				async: true,

				success: function(respuesta){

					var dato = JSON.parse(respuesta);
					$("#ajax").html("");
					$("#ajax").append(dato['status_message']+"<br>");
					$("#ajax").append("Precio: "+dato['data']);
				}


			});
		});
	});
</script>
</head>

<body>
	<div id="ingresar">
		<div id="ajax"></div>
		<input type="text" id="libro" placeholder="Ingrese libro" required>
		<button id="boton">Buscar</button>
	</div>
</body>
</html>