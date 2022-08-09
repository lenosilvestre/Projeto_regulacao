<?php
//include ("banco.php");
//$b = new database();
//
	$nome;
	$cns = "131042880160002"; //$_GET['cns'];
	$idusuario;

	$dtn;
	$telefone;
	$dtentrada;
	$endereco_id;
	
	
	//variaveis endereco
	$tipo;
	$endereco;
	$bairro;
	$cidade;
	$numero;


?>



<?
//busca cns
	$stmt = $b ->busca("select * from usuario where cns ='$cns';");	
	$rs = $stmt->	fetch(PDO::FETCH_OBJ);

	$idusuario = $rs->id;
	$cns= $rs->cns;
	$nome=  $rs->nome;
	$dtn =  $rs->dtnasc;
	$telefone =  $rs->telefone;
	$dtentrada=  $rs->data_entrada;
	$endereco_id=  $rs->endereco_id;
	$qtd_procedimento = $rs -> procedimento_qtd	;

//busca endereco_id
	$stmt2 = $b ->busca("select * from endereco where id='$endereco_id';");
	$rs = $stmt2->fetch(PDO::FETCH_OBJ);

	$tipo = $rs->tipo;
	$endereco = $rs->endereco;
	$bairro = $rs->bairro;
	$cidade =$rs->cidade;
	$numero =$rs->numero;

	
?>


	<label>CNS:					</label> <b> <? echo $cns; ?> 		</b><br>
	<label> Nome: 				</label> <b> <? echo $nome;?> 		</b><br>
	<label>Data de nascimento: 	</label> <b> <? echo $dtn; ?>		</b><br>
	<hr>
	<label>Endereço:			</label> <b> <? echo $tipo." ".$endereco; ?> </b><br>  
	<label> Nº: 				</label> <b> <? echo $numero; ?> 	</b><br>
	<label>Bairro: 				</label> <b> <? echo $bairro; ?>	</b><br>
	<label>Cidade: 				</label> <b> <? echo $cidade; ?> 	</b><br>
	<hr>
	<label>Procedimentos:		</label> <b> <? echo $qtd_procedimento; ?> </b><br>
	
	<table>
		<tr>
		<td style="width: 15px">#		</td>
		<td>Exame	</td>
		<td>Local	</td>
		<td>Descrição</td>
		</tr>
	
<? 
	
	$consulta2 = $b  ->busca("select * from procedimento where usuario_cns='$cns';");
	$cont=0;
	$tamCelula = 'style="width: 100px"';
	while($rs2 = $consulta2->fetch(PDO::FETCH_OBJ)){
			$cont++;
			$exame		= $rs2 -> exame;
			$local		= $rs2 -> local_exame;
			$descricao	= $rs2 -> descricao ;
			
			echo'<tr><td style="width: 15px">'.$cont.'</td><td '.$tamCelula.' >'.$exame.'</td><td '.$tamCelula.'>'.$local.'</td><td '.$tamCelula.'>'.$descricao.'</td></tr>';
	}
?>			
	</table>
	<hr>
	
	



