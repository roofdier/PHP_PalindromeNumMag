<?php
	$n = 7;
	$GLOBALS["pasos"] = "";

	function doMagic($n)
	{
		if($n%2==0)
		{	
			$x = $n/2;

			$GLOBALS["pasos"] .= "<br /> Par y ".$n." != 1 || Operacion: (" . $n . "/2) =  " . $x;

			if($x==1){
				$GLOBALS["pasos"] .= " <br /> El numero es maravilloso" ;
				return false;
			}

			doMagic($x);
		}else{
			$x = ($n*3)+1;

			$GLOBALS["pasos"] .= "<br /> Impar  y ".$n." != 1 // Operacion: (" . $n . "*3)+1 =  " . $x;

			if($x == 1){
				$GLOBALS["pasos"] .= "<br /> El numero es maravilloso";
				return false;
			}

			doMagic($x);
		}

	}

?>


<html>
<head>
	<meta charset="utf-8"/>
	<title>Numero Maravilloso</title>
</head>
<body>
	<?php
		doMagic($_POST["num"]);
		echo $pasos;
	?>
</body>
</html>