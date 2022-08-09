<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php 
include_once ("controle.php");
?>
<html><head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type"><title>Cadastrar Administrador</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script>
	function sub()
	{
		login=document.getElementById("login").value;
		senha=document.getElementById("senha").value;
		msg="";
		flag=true;
		if(login == "")
		{
			msg+="Preencha o campo Login \n";
			flag=false;
		}
		if(senha == "")
		{
			msg+="Preencha o campo Senha \n";
			flag=false;
		}
		
		if(!flag)
		{
			alert(msg);
		}
		return flag;
}
</script>



</head><body><br>

  <div class="content">      
     
      <div id="CriarAdministrador">
    
       <form method="post" action="inserirNovoAdministrador.php" name="novoAdministrador" onSubmit="return sub();">
          <h1>Cadastrar Administrador</h1> 
          <p> 
            <label for="nome">Nome</label>
            <input  name="nome" id="nome" required="required" type="text" placeholder="ex. João Santos de Almeida"/>
          </p>
           
          <p> 
            <label for="login">Login</label>
            <input name="login" id="login1" required="required" type="text" placeholder="ex. jsalmeida" /> 
          </p>
           
          <p> 
           <label for="senha">Senha</label>
            <input name="senha" id="senha" required="required" type="password" placeholder="ex. 1234" /> 
          </p>
           
          <p> 
            <input name="enviar" value="Salvar" type="submit"><br/> 
          </p>
          <p> 
            <a href="gerenciar.php"><input name="Voltar" value="Voltar" type="button"><a/><br/> 
          </p>
        

      </form>  

      </div>
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


