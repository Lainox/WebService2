<?php 

 include('funciones/functiones.php');

 if(!empty($_POST['libro']))
 {
 	$libro = $_POST['libro'];
 	$precio = get_precio($libro);
   
 	if(empty($precio))
 	{
 		entrega_respuesta(200, "Libro no encontrado", "$0");
 	}
 	else
 	{
 		entrega_respuesta(200, "Libro encontrado", $precio);
 	}
 }
 else
 {
 	entrega_respuesta(400, "Solicitud invalida", NULL);
 }

 function entrega_respuesta($status, $status_message, $data)
 {
 	header("HTTP/1.1 $status $status_message");

 	$resp['status'] = $status;
 	$resp['status_message'] = $status_message;
 	$resp['data'] = $data;

 	echo json_encode($resp);


 }

 ?>