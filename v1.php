<?php
if(!isset($_GET['admin']))
{
	$mg = imagecreatefromjpeg('./resource/v1.jpg');
	$color = imagecolorallocate($mg, 255, 255, 255);
	$fuente = __DIR__ .'/fonts/OpenSans-ExtraBold.ttf';
	if(file_exists(__DIR__."/rate.txt"))
	{
		$base = file_get_contents(__DIR__."/rate.txt");
	}
	else
	{
		$base = "0.1";
	}
	imagefttext($mg, 69.9, 0, 889, 351, $color, $fuente, number_format ( $base , 3 , "," , "." ) );
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
