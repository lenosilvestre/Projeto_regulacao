<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">

<?php
session_start();
include_once ("controle.php");

$cns;



?>

<html><head>
  
  <meta content="text/html; charset=UTF-8" http-equiv="content-type">
  <title>Cadastro Usuário SUS</title>
  <link rel="stylesheet" type="text/css" href="style.css" />
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  
  <script>
  
	function sub()
	{
		nome=document.getElementById("nome").value;
		evento=document.getElementById("evento").value;
		tipo=document.getElementById("tipolog").value;
		msg="";
		flag=true;
		if(nome == "")
		{
			msg+="Preencha o campo nome \n";
			flag=false;
		}
		if(nome == "Selecione o tipo de logradouro")
		{
			msg+="Selecione um tipo de logradouro \n";
			flag=false;
		}
		if(!flag)
		{
			alert(msg);
		}
		return flag;
}
</script>
		

</head>
<body><br>

	<div class="content">      

		<div id="Cadastroparticipante">
			<h1>Informações do Usuários do Sistema Único de Saúde </h1> 

			<?php
				if(!isset($_SESSION['existe'])){
					
					?>
					<form id="form" method="post" action="buscacns.php" name="form1" onSubmit="return sub();"> 
					
					<p>
					<label for="cns1" >Cartão SUS</label>
					<input name="csus1" id="csus1" required="required"  onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" maxlength="15"/>
						</p>
						<p>
						<input type="submit" value="Pesquisar"></input>
						
					</p>
					</form>

				<?php
				}else{
					$cns =$_SESSION['cns'];
					
					if($_SESSION['existe']){
						//existe
						unset($_SESSION['existe']);
						include "atualizaUsuario.php";
						
						
					}else{
						//não existe
					
					
					?>
					
					<form id="form2" method="post" action="inserirUsuario.php" name="user" onSubmit="return sub();"> 
					<p> 
						<label for="cartaoSUS">Cartão SUS</label>
						<input name="cns" id="cns" value="<?php echo $cns; ?>" type="text" required="required" readonly="readonly" maxlength="15"/>
					</p><br>
					<p>
						<label for="nome">Nome</label>
						<input name="nome" id="nome" required="required" type="text" placeholder="ex. João Reis"/>
					</p>
					<p>
						<label for="dtna">Data de nascimento</label>
						<input name="dtnasc" id="dtnasc" type="date" placeholder="ex. 03/01/2010" /> 
					</p>
					
					<p>
					<label for="txttelefone">Telefone</label>
					<input type="tel" name="telefone" id="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
					<script type="text/javascript">$("#telefone").mask("(00) 0000-00009");</script>
					
					</p> 
					
					<p> 
						<label for="tipolog">Tipo de Logradouro</label><br>
						<select name="tipolog" id="tipolog" size="1" required="required" type="input"> 
							<option></option>
							<option>Avenida</option>
							<option>Fazenda</option>
							<option>Loteamento</option>
							<option>Povoado</option>
							<option>Rua</option>
							<option>Sítio</option>
							<option>Travessa</option>
						</select>
						
					</p>
					<p> 
						<label for="ende">Endereço</label>
						<input name="ende" id="tel" required="required" type="text"placeholder="ex. Rui Barbosa"/> 
					</p>
					<p> 
						<label for="num">Número</label>
						<input name="num" id="num" required="required" type="text"placeholder="ex. S/N"/> 
					</p>
					<p> 
						<label for="bair">Bairro</label>
						<input name="bairro" id="bairro" required="required" type="text"/> 
					</p>
					<p> 
						<label for="cidad">Cidade</label>
						<select name="cidade" id="cidade" size="1">
							<option>Mutuípe</option>
						</select>
						
					</p>
					
					
					<p> 
						<label for="dt">Data de entrada</label>
						<input name="dtentr" id="dtentr" required="required" type="date" value="<?php echo date("Y-m-d");?>"/> 
					</p>
					
					<p> 
						<input type="submit" value="Cadastrar" onSubmit="return sub();"></input>
					</p>
					</form>
				<?php
					}
				}
				unset($_SESSION['existe']);

				?>

				<p> 
				<a href="gerenciar.php"><input name="Voltar" value="Voltar" type="button"></a><br/> 
				</p>

				
		</div>
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