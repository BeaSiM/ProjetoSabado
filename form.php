<!DOCTYPE html>
<html>
	<head>
		<title>Formulário</title>
	</head>
	<body>
		<form name="frm" action="resultado.php" method="get">
			<div>
				Name:<input type="text" name="nome">
			</div>
			<div>
				Idade:
				<select name="idade">
					<?php
						for($i=0; $i < 121; $i++) {
							echo "<option value='$i'>$i</option>";
						}
					?>
				</select>
			</div>
			<div>
				<input type="submit" value="Enviar">
			</div>
		</form>
	</body>
</html>