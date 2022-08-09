<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head>

<meta content="text/html; charset=UTF-8" http-equiv="content-type"><title>Modificar Senha</title>

<?php
include_once ("controle.php");
?>

<link rel="stylesheet" type="text/css" href="style.css" />
 <script>
  function sub()
  {
    login=document.getElementById("login").value;
    senha_atual=document.getElementById("senha_atual").value;
    nova_senha=document.getElementById("nova_senha").value;
    msg="";
    flag=true;
    if(login == "")
    {
      msg+="Preencha o campo Login \n";
      flag=false;
    }
    if(senha_atual == "")
    {
      msg+="Preencha o campo Senha Atual \n";
      flag=false;
    }
    if(nova_senha == "")
    {
      msg+="Preencha o campo Nova Senha \n";
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
     
      <div id="Alterarsenha">
    
       <form method="post" action="alterarAdm.php" name="alterarSenha"  onSubmit="return sub();">
          <h1>Alterar senha</h1> 
       
           
          <p> 
            <label for="login">Login</label>
            <input name="login" id="login1" required="required" type="text" placeholder="ex. jsalmeida" /> 
          </p>
           
          <p> 
           <label for="senha">Senha atual</label>
            <input name="senha_atual" id="senha_atual" required="required" type="password" placeholder="ex. 1234" /> 
          </p>

          <p> 
           <label for="senha">Nova senha</label>
            <input name="nova_senha" id="nova_senha" required="required" type="password" placeholder="ex. 5678" /> 
          </p>
           
          <p> 
            <input name="enviar" value="Salvar" type="submit"><br/> 
          </p>
          <p> 
            <a href="gerenciar.php"><input name="Voltar" value="Voltar" type="button"><a/><br/> 
          </p>
        

      </form>  

      </div><p>
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

