<?php

include ("banco.php");
	
	session_start();
	$b = new database();
	$nome_login = $_POST['nome_login'];
	$senha = $_POST['senha']; 
	$consulta = $b -> busca("select * from admin where usuario='$nome_login' and senha=md5('$senha');");
	$contador=0;
	while($rs = $consulta->fetch(PDO::FETCH_OBJ)){
		$contador++;
	}
	
	if($contador==0){
		unset ($_SESSION['nome_login']);
		unset ($_SESSION['senha']);
		echo"<script type='text/javascript'> alert('Login/senha invalidos');</script>";
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = loginAdm.php'>";
	}else{
		$_SESSION['nome_login'] = $nome_login;
		$_SESSION['senha'] = $senha;
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = gerenciar.php'>";	
	}

#$stmt = $con->prepare("INSERT INTO pessoa(nome, email) VALUES(?, ?)");
#$stmt->bindParam(1,”Nome da Pessoa”);
#$stmt->bindParam(2,”email@email.com”);
#$stmt->execute();

?>


