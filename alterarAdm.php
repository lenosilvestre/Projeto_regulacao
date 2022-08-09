 
<?php

include ("banco.php");
	
	$b = new database();
	$login = $_POST['login'];
	$senha_atual = $_POST['senha_atual']; 
	$nova_senha = $_POST['nova_senha']; 
	$consulta = $b -> busca("select * from admin where usuario='$login' and senha=md5('$senha_atual');");
	while($rs = $consulta->fetch(PDO::FETCH_OBJ)){
		$b -> query("update admin set usuario='$login', senha=md5('$nova_senha') where usuario='$login' and senha=md5('$senha_atual')");
		break;
	}
	echo"<script type='text/javascript'> alert('Senha modificada com sucesso');</script>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = gerenciar.php'>";
	


?>
