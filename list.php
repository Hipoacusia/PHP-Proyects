<?php

//Arrays con php

$meses = array(//$var = array(declarar datos)
  'enero','febrero','marzo','abril',
  'mayo','junio','julio','agosto',
  'septiembre','octubre','noviembre', 'diciembre'
);

?>

<!DOCTYPE html><!--Codigo espagueti con html-->
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Meses del año</title>
</head>
<body>
	 <h1>Meses del año</h1>
	 <ul>
		<?php
		  
		  foreach($meses as $mes){//usamos el foreach para sacar todos los datos del array
			 echo '<li>' . $mes . '</li>';//imprime todos los datos recoriendo un siclo
		  }

		?>
	 </ul>
</body>
</html>
