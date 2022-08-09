<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><meta content="text/html; charset=UTF-8" http-equiv="content-type"><title>gerenciar</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include_once ("controle.php");
?>


</head><body><br>



  <tbody>
  	 <div class="content">      
     
      <div id="login">
        <form method="post" action="verificaLogin.php" name="loginAdm" onSubmit="return sub();"> 
			<div id="gerenciador"> <h1  align= "center">Gerenciador de documentos de Usuários do Sistema Único de Saúde - Mutuípe</h1> 
			</div>
		
  
    <a href="cadastrousuario.php"><input name="Cadastrodeusuario" value="Cadastro de Usuário" type="button"><a/><br/> 
     	<a href="pesquisausuario.php"><input name="Pesquisarporusuario" value="Pesquisar por Usuário" type="button"><a/><br/> 
		
<br>
<h1></h1>
<br>
     <a href="telaNovoAdministrador.php"><input name="Cadastrar Administrador" value="Cadastrar Administrador" type="button"><a/><br/> 


     
<a href="telaAlterarAdm.php"><input name="Alterar Senha" value="Alterar Senha" type="button"><a/><br/>

<a href="sair.php"><input name="Sair do Sistema" value="Sair do Sistema" type="button"><a/><br/>
   
 
     </form>
      </div>
    
  </tbody>


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

</body></html>
