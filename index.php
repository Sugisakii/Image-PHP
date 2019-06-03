<?php
if(!isset($_GET['admin']))
{
	$mg = imagecreatefrompng('./resource/test2.png');
	$blanco = imagecolorallocate($mg, 255, 255, 255);
	$arial = __DIR__ .'/fonts/OpenSans-Bold.ttf';
	if(file_exists(__DIR__."/rate.txt"))
	{
		$base = file_get_contents(__DIR__."/rate.txt");
	}
	else
	{
		$base = "0.1";
	}
	imagefttext($mg, 50, 0, 560, 226, $blanco, $arial, number_format ( $base , 3 , "," , "." ) );
	imagefttext($mg, 55, 0, 450, 355, $blanco, $arial, number_format ( 10000 / floatval($base) , 0 , "," , "." ) . "  Bs.S");
	imagefttext($mg, 55, 0, 450, 455, $blanco, $arial, number_format ( 20000 / floatval($base) , 0 , "," , "." ) . "  Bs.S");
	imagefttext($mg, 55, 0, 450, 560, $blanco, $arial, number_format ( 50000 / floatval($base) , 0 , "," , "." ) . " Bs.S");
	imagefttext($mg, 55, 0, 450, 663, $blanco, $arial, number_format ( 70000 / floatval($base) , 0 , "," , "." ) . " Bs.S");
	imagefttext($mg, 55, 0, 450, 760, $blanco, $arial, number_format ( 100000 / floatval($base) , 0 , "," , "." ) . " Bs.S");
	header('Content-Type: image/png');
	imagepng($mg);
	imagedestroy($mg);
	exit();
}
else if(isset($_POST['b']))
{
	file_put_contents(__DIR__."/rate.txt", $_POST['b']);
	header("Location: ./");
	exit();
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Set Base</title>
</head>
<body>
	<form method="post">
		<label>Tasa del dia;</label><br>
		<input type="text" name="b"/><br>
		<button type="Submit">Guardar</button>
	</form>
</body>
</html>
