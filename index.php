<?php
if(isset($_POST['b']))
{
	file_put_contents(__DIR__."/rate.txt", $_POST['b']);
	header("Location: ./");
	exit();
}
?>
<!doctype html>
<html lang="es">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="resource/favicon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

	<title>Generador Exchange Is'May</title>
</head>
<body>
	<style type="text/css" media="screen">
		.oculto {
			display: none;
		}
		.padding {
			padding-top: 1em;
		}
	</style>
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="text-center p-3 border bg-info text-white">Por favor indroduzca la tasa del día</h1> 
			</div>
		</div>		 		
	</div>

	<div class="container">
		<div class="row">
			<div class="col">
				<form method="post">
					<div class="form-group">
						<input class="form-control form-control-lg" type="text" placeholder="0.10 - 0.59" name="b" class="generar">
					</div>
					<button type="submit" class="btn btn-danger btn-lg btn-block">Generar plantilla</button>
				</form>
			</div>
		</div>
	</div>

	<div class="container oculto padding">
		<div class="row">
			<div class="col-md-6">
				<img src="" alt="" class="img-fluid">
			</div>
			<div class="col-md-6">
				<img src="" alt="" class="img-fluid">
			</div>
		</div>
	</div>
<!--- KRYTO MAMALO -->
	<script>
		$('form').submit(function(event){
			event.preventDefault();
			$.post('', $(this).serialize(), function(data, textStatus, xhr) {
				$('img').eq(0).attr("src", "v1.php");
				$('img').eq(1).attr("src", "v2.php");
				$('.oculto').removeClass('oculto')
			});
			
			return false;
		});
	</script>




	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>