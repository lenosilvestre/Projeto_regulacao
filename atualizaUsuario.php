<?php
session_start();
include ("banco.php");
$b = new database();
$cns =$_SESSION['cns']; 


if(isset($_POST['cns'])){
	$cns =$_POST['cns']; 
	$nome = $_POST['nome'];
	$dtnasc = $_POST['dtnasc'];
	$tel = $_POST['telefone'];
	$tipo = $_POST['tipolog'];
	$ender = $_POST['ende'];
	$num = $_POST['num'];
	$bairro = $_POST['bairro'];
	$cidade = $_POST['cidade'];
	$data_ent = $_POST['dtentr'];
	$endereco_id = $_SESSION['id_end'];
	
	//Update endereco
	$b -> query("update endereco set tipo='$tipo', endereco='$ender', bairro='$bairro', cidade='$cidade', numero='$num' where id='$endereco_id'");
	
	//Update Usuario
	$b -> query("update usuario set nome='$nome', dtnasc='$dtnasc', telefone='$tel', data_entrada='$data_ent' where cns='$cns'");
		
	echo"<script type='text/javascript'> alert('Usuário Atualizado com sucesso!');</script>";
	echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = cadastroProcedimento.php'>";

}else{

						//existe
						unset($_SESSION['existe']);
						
							//variaveis usuario
							
							$idusuario;
							$nome;
							$dtn;
							$telefone;
							$bairro;
							$cidade;
							$dtentrada;
							$procedimento_id;
	
							//variaveis endereco
							$tipo;
							$endereco;
							$bairro;
							$cidade;
							$numero;
							
							//VARIAVEIS PROCEDIMENTO
							
							
									
							//consulta usuario
							$consulta = $b -> busca("select * from usuario where $cns='$cns';");
						
							while($rs = $consulta->fetch(PDO::FETCH_OBJ)){
									
										$idusuario =  $rs -> id;
										$nome=  $rs -> nome;
										$dtn =  $rs -> dtnasc;
										$telefone =  $rs -> telefone;
										$dtentrada=  $rs ->data_entrada;
										$endereco_id=  $rs -> endereco_id;
										
									
							}
							
							//consulta endereco
							$_SESSION['id_end'] = $endereco_id;
							$consulta2 = $b -> busca("select * from endereco where id='$endereco_id';");
							while($rs2 = $consulta2->fetch(PDO::FETCH_OBJ)){

								$tipo		= $rs2 -> tipo;
								$endereco 	= $rs2 -> endereco;
								$bairro		= $rs2 -> bairro ;
								$cidade		= $rs2 -> cidade ;
								$numero		= $rs2 -> numero;
							}
							
						?>
						<form id="form2" method="post" action="atualizaUsuario.php" name="user" onSubmit="return sub();"> 
						<p> 
							<label for="cartaoSUS">Cartão SUS</label>
							<input name="cns" id="cns" value="<?php echo $cns; ?>" type="text" required="required" readonly="readonly" maxlength="15"/>
						</p><br>
						<p>
							<label for="nome">Nome</label>
							<input name="nome" id="nome" value="<?php echo $nome; ?>" required="required" type="text" placeholder="ex. João Reis"/>
						</p>
						<p>
							<label for="dtna">Data de nascimento</label>
							<input name="dtnasc" id="dtnasc" value="<?php echo $dtn; ?>" type="date" placeholder="ex. 03/01/2010" /> 
						</p>
						
						<p>
						<label for="txttelefone">Telefone</label>
						<input type="tel" name="telefone" id="telefone" value="<?php echo $telefone; ?>" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" />
						<script type="text/javascript">$("#telefone").mask("(00) 0000-00009");</script>
						
						</p> 
						
						<p> 
							<label for="tipolog">Tipo de Logradouro</label><br>
							<select name="tipolog" id="tipolog"  size="1" required="required" /> 
							
								<option  <?=($tipo == 'Avenida')?'selected':''?> >Avenida</option>
								<option  <?=($tipo == 'Fazenda')?'selected':''?> >Fazenda</option>
								<option  <?=($tipo == 'Loteamento')?'selected':''?> >Loteamento</option>
								<option  <?=($tipo == 'Povoado')?'selected':''?> >Povoado</option>
								<option  <?=($tipo == 'Rua')?'selected':''?> >Rua</option>
								<option  <?=($tipo == 'Sítio')?'selected':''?> >Sítio</option>
								<option  <?=($tipo == 'Travessa')?'selected':''?> >Travessa</option>
								
							</select>
							
						</p>
						<p> 
							<label for="ende">Endereço</label>
							<input name="ende" id="tel" required="required" value="<?php echo $endereco; ?>" type="text"placeholder="ex. Rui Barbosa"/> 
						</p>
						<p> 
							<label for="num">Número</label>
							<input name="num" id="num" required="required" value="<?php echo $numero; ?>" type="text"placeholder="ex. S/N"/> 
						</p>
						<p> 
							<label for="bair">Bairro</label>
							<input name="bairro" id="bairro" value="<?php echo $bairro; ?>" required="required" type="text"/> 
						</p>
						<p> 
							<label for="cidad">Cidade</label>
							<select name="cidade" id="cidade" size="1">
								<option  <?=($cidade == 'Mutuípe')?'selected':''?> ><?echo $cidade; ?></option>
							</select>
							
						</p>
						
						
						<p> 
							<label for="dt">Data de entrada</label>
							<input name="dtentr" id="dtentr" required="required" type="date" value="<?php echo $dtentrada; ?>" readonly="readonly"/> 
						</p>
						
						<p> 
							<input type="submit" value="Cadastrar" onSubmit="return sub();"></input>
						</p>
						</form>
<? } ?>
