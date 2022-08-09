<?php
    session_start();
	include ("banco.php");
	$b = new database();
   
    $cns = $_SESSION['cns'];
    $descricao = $_POST['descricao'];
 
  if(isset($_FILES['arquivo'])){
     
      
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4)); //pega a extensao do arquivo
    
   
    $novo_nome =md5(time())."_".date("Ymd"). $extensao; //define o nome do arquivo
    $diretorio = "documentos/"; //define o diretorio para onde enviaremos o arquivo
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio.$novo_nome); //efetua o upload
    
	$b -> query( "INSERT INTO documentos ( id, usuario_cns, nome_doc, descricao, data) VALUES('null','$cns', '$novo_nome','$descricao', NOW())");
   
    
	echo"<script type='text/javascript'> alert('Arquivo enviado');</script>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = enviarArquivo.php'>";
  }
  
?>
