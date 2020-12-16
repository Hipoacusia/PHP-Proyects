<?php

$dinero = 5000;
$tengo = true;

echo '<h1> Condicionales if-else </h1></br>';

  if($dinero > 3000){
	 echo 'puedes ir al cine';
  }else{
	 echo 'No puedes ir al cine';
  }

echo '<br>';

$eleccion = 'pizza';

echo '<h1> Condicionales switch </h1></br>';

  switch($eleccion){
  case 'helado':
		echo 'El valor del helado es de $1.000';
	 break;

  case 'pizza':
		echo 'El valor de la pizza es de $5.000';
	 break;

  case 'torta':
		echo 'El valor de la torta es de $10.000';
	 break;

  default:
		echo 'El valor no exite';
	 break;

  }

echo '<h1> Siclo while </h1> <br>';

$i = 1;

while($i < 10){
  echo $i . '</br>';
  $i++;
}

echo '<h1> Siclo Do-while </h1></br>';

$a = 0;

do{
  echo $a . '</br>';
  $a++;
}while($a < 10);

echo '<h1> Siclo for</h1></br>';

for($i = 0; $i < 10; $i++){
  echo $i . '</br>';
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title></title>
</head>
<body>
  <h1>Ingrese una opcion</h1>
  <h2>1) Pizza</h2>
  <h2>2) helado</h2>
  <h2>2) Torta</h2>
</body>
</html>
