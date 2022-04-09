<!DOCTYPE html>
<html>
<head>
	<title>Projeto Sábado - Tabela</title>
</head>
<body>
	<table>
			<?php
				for($i=0; $i < 100; $i++){
					echo "<tr>";
					if($i%2==0){
						echo "<td class='col1'>Beatriz</td>";
					}
					else {
						echo "<td class='col2'>Siqueira</td>";
					}
					echo "<tr>";
				}
			/*For: Executa o loop enquanto a condição for verdadeira, porém você pode instanciar as variaveis contadoras dentro da estrutura do loop;
			While: Executa o loop enquanto a condição for verdadeira;
			Do While: Executa o loop primeiro e depois verifica a condição.*/
			?>
		</tr>
	</table>
</body>
</html>