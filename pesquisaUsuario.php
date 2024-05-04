<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
session_start();
?>
<html>

<head>

	<meta content="text/html; charset=UTF-8" http-equiv="content-type">
	<title>Pesquisa</title>
	<link rel="stylesheet" type="text/css" href="style.css" />

	<script>
		function sub() {
			buscar = document.getElementById("").value;
			msg = "";
			flag = true;
			if (buscar == "") {
				msg += "Informe um nome para reallizar a busca\n";
				flag = false;
			}
			if (!flag) {
				alert(msg);
			}
			return flag;
		}
	</script>

</head>

<body><br>



	<div class="content">

		<div id="buscarcertificado">

			<h1>Buscar Usuário</h1>
			<tbody>
				<form method="post" action="listar.php" name="buscar" onSubmit="return sub();">
					<p>
						<label for="cartaoSUS">Cartão SUS:</label>
						<input name="cns" id="cns" type="text" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="15" />
					</p><br>

					<p>
						<label for="nome">Buscar por nome:</label>
						<input name="nome" id="nome"><br>
					</p>

					<p>
						<label for="dtna">Data de nascimento:</label>
						<input name="dtnasc" id="dtnasc" type="date" placeholder="ex. 03/01/2010" />
					</p>

					<p>
						<label for="proc">Buscar por procedimento:</label>
						<input name="procedimento" id="procedimento"><br>
					</p>

					<p>
						<label for="localexame">Buscar por local do Procedimento/Exame:</label>
						<input name="local" id="local"><br>
					</p>

					<p>
						<label for="entrada">Buscar por data de entrada:</label>
						<input name="dtentrada" id="dtentrada" type="date" placeholder="ex. 03/01/2019" /> <br>
					</p>

					<p>
						<label for="setor">Buscar por setor responsavel:</label>
						<input name="setor" id="setor" /> <br>
					</p>

					<p>
						<input value="Pesquisar" type="submit">
					</p>

				</form>
				<p>
					<a href="gerenciar.php"><input name="Voltar" value="Voltar" type="button"><a /><br />
				</p>


			</tbody>



</body>

</html>