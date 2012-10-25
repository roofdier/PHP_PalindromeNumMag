
<?php 
	function palindrome($v){
		$v = str_replace(' ','',strtolower($v));

		$mp = str_split($v,1);
		$lp = count($mp);
		$i = 0;
		$l = 0;

		$flag = true;

		while($i<$lp){
			$l = ($lp - 1) - $i;
			if($mp[$i] != $mp[$l]){
				$flag = false;
				break;
			} else if($i == $l || ($l-$i) == 1){
				break;
			}

			$i++;
		}

		if($flag){
			echo "Palabra palíndrome";
		}else{
			echo "Palabra no palíndrome";
		}
	}


?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Palabras pa...</title>
</head>
<body>

	<?php palindrome($_POST["word"]);?>

</body>
</html>