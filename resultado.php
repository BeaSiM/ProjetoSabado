<!DOCTYPE html>
<html>
<head>
	<title>Resultado</title>
</head>
<body>
	<?php
		$nome= $_GET["nome"];
		$idade= $_GET["idade"];
	?>
	<h1>
		<?php
		echo "$nome tem $idade anos.";
		?>
	</h1>
</body>
</html>