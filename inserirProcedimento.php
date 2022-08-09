
<?php
session_start();
include ("banco.php");

	
	$b = new database();
	
	$nome = $_POST['nomeprocedimento'];
    $local = $_POST['local'];
	$descricao=$_POST['descricao'];
	$cns =$_SESSION['cns']; 

	//insere no banco um novo procedimento
	$b -> query("insert into procedimento (usuario_cns, exame, local_exame, descricao) values('$cns', '$nome','$local','$descricao')");
	

	echo"<script type='text/javascript'> alert('Procedimento ou exame cadastrado');</script>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = enviarArquivo.php'>";
	
?>
