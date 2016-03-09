<?php 


  function get_precio($valor)
  {
  	  $libros = array(
  	  	"java" => 430,
  	  	"ruby" => 320,
  	  	"redes" => 567,
  	  	"php" => 768
  	  	);

  	  foreach($libros as $libro=>$precio)
  	  {
  	  	  if($libro==$valor)
  	  	  {
  	  	  	 return $precio;
  	  	  	 break;
  	  	  }
  	  }
  }
 ?>