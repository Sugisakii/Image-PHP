<?php
	if(isset($_POST['b']))
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
		<img src="./v2.php">
		<img src="./v1.php">
	</form>
</body>
</html>
