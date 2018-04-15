<?php 
	session_start();
	include "conexao2.php";
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Buscar Destino</title>
</head>
<body>
	<form action="mapa.php" method="post" name="pesquisa">
			<select name="continente">
				<option value="">Continente</option>
				<?php  
					$getcontinente = "SELECT * FROM continente";
					$getcontinentequery = mysql_query($getcontinente) or die(mysql_error());
					while ($getcontinenteline = mysql_fetch_array($getcontinentequery)) {
						$descricao = $getcontinenteline['descricao'];
						$idcontinente = $getcontinenteline['idcontinente'];
						echo "<option value='$idcontinente'>$descricao</option>";

					}

				?>
				
			</select>
				<input type="submit" name="submit" value="pesquisar">

	</form>
</body>
</html>