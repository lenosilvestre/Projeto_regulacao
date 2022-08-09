
<?php

include ("banco.php");
	
	$b = new database();
	$nome = $_POST['nome'];
	$login = $_POST['login'];
	$senha = $_POST['senha']; 
	$b -> query("insert into admin (nome, usuario,senha) values('$nome','$login',md5('$senha'))");	
	echo"<script type='text/javascript'> alert('Administrador inserido com sucesso');</script>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = gerenciar.php'>";
	


?>
