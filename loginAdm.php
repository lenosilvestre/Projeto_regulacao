<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"><link rel="shortcut icon" href="img/favicon.ico" />
<html><head><meta content="text/html; charset=UTF-8" http-equiv="content-type"><title>Login</title>
<link rel="stylesheet" type="text/css" href="style.css" />
 <script>
	function sub()
	{

		nome_login=document.getElementById("nome_login").value;
		senha=document.getElementById("senha").value;
		msg="";
		flag=true;
		if(nome_login == "")
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
<br>
<br>
<br>
<br>
<br>
 <div class="content">      
     
      <div id="login">
        <form method="post" action="verificaLogin.php" name="loginAdm" onSubmit="return sub();"> 
          <h1>Login</h1> 
          <p> 
            <label for="nome_login">Seu nome</label>
            <input id="nome_login" name="nome_login" required="required" type="text" placeholder="ex. João"/>
          </p>
           
          <p> 
            <label for="senha">Sua Senha</label>
            <input name="senha" id="senha" required="required" type="password" placeholder="ex. senha" /> 
          </p>
           
         
           
          <p> 
            <input value="Efetuar Login" name="enviar" type="submit"><br/> 
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
