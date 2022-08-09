<?php

    include ("banco.php");
	session_start();
	unset ($_SESSION['nome_login']);
	unset ($_SESSION['senha']);
	echo"<script type='text/javascript'> alert('Logout Efetuado com sucesso');</script>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = loginAdm.php'>";
?>

