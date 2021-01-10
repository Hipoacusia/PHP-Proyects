<?php

  $array["jan"] = 10;
  $array["feb"] = 90;
  $array["mar"] = 30;
  $array["apr"] = 53;		
  $array["may"] = 20;
  $array["jun"] = 72;
  $array["jul"] = 40;
  $array["ago"] = 10;
  $array["sept"] = 100;		
  $array["oct"] = 23;

  $max_data = max($array) + 50;

  $max_width = 500;
  $max_height = 200;

  $xgap = $max_width / (count($array) + 1);
  $ygap = $max_height / (count($array) + 1);

  $one_unit = $max_height / $max_data;
?>

  <svg viewBox="0 0 <?php echo $max_width  . " " . $max_height; ?>" style="font-size: 12px; font-family: Tahoma; background-color: #4CAF50; ">
  <style type="text/css">

	 @keyframes animate
	 {
		0%{transform: rotate(180deg);opacity:0;}
		100%{transform: rotate(0deg);opacity:1;}
	 }
  
	 @keyframes animate2
	 {
		0%{transform: translateX(200px);opacity:0;}
		100%{transform: translateX(0px);opacity:1;}
	 }

	 circle{
		fill:grey;
	 }
	 circle:hover
	 {
		fill:pink;
		stroke-width: 5px;
	 }
  </style>
	 

	 <?php

	 $num = $xgap;
	 $num2 = $ygap;

	 $points = "";
	 $elements = "";
	 
	 foreach ($array as $key => $value){

		$y = $max_height - ($value * $one_unit);

		$elements .= "<polyline points='$num,0 $num,$max_height' style='stroke:#ffffff25;'/>";
		$elements .= "<polyline points='0,$num2 $max_width,$num2' style='stroke:#ffffff25;'/>";

		$elements .= "<text x='$num' y='12' style='fill:white;'>$key</text>";
		$elements .= "<text x='$num' y='".($y - 10)."' style='fill:white;'>$value</text>";

		$points .= " $num,$y ";
		echo "<polyline  points='$points' style='animation: animate 1.".rand(0,9) ."s ease; stroke:white;'/>";
		$points = " $num,$y ";

		echo "<a href=''><circle r='5' cx='$num' cy='$y' style='animation: animate2 1.".rand(0,9) ."s ease; stroke: white';fill:grey;/></a>";

		$num += $xgap;
		$num2 += $ygap;
	 }
	 
	 echo $elements;

  ?>

</svg>

