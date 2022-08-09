<?php
session_start();
if((!isset ($_SESSION['nome_login']) == true) and (!isset ($_SESSION['senha']) == true))
{
  unset($_SESSION['nome_login']);
  unset($_SESSION['senha']);
  echo"<script type='text/javascript'> alert('Você precisa realizar o Login');</script>";
  echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = loginAdm.php'>";
} 
$logado = $_SESSION['nome_login'];
?>
