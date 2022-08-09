<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php
session_start();
include ("banco.php");
$b = new database();


	
		$nome = $_POST['nome'];
		$cns = $_POST['cns'];
	$idusuario;

	$dtn;
	$telefone;
	$dtentrada;
	$endereco_id;
		
	$msg;
	$sql;
	
	//variaveis endereco
	$tipo;
	$endereco;
	$bairro;
	$cidade;
	$numero;
	
if($_POST['cns']!=""){
		
		$cns = $_POST['cns'];
		$valida = validaCNS($cns);
		
		//valida sus 
		if($valida){
			
			$sql = "select * from usuario where cns ='$cns';";	
						
	
		}else{
			//cartao invalido
			unset($cns);
			unset($_POST['cns']);
			echo"<script type='text/javascript'> alert('Cartão SUS invalido.');</script>";
			
		}
	
	
}elseif($_POST['nome']!=""){ 
			$sql= "select * from usuario where nome LIKE '%$nome%';";	

}
	
	
function validaCNS($param) {
		$sum = 0;
		for ($i = 0, $j = strlen($param), $k = $j; $i < $j; $i++, $k--) {
			$sum += $param[$i] * $k;
		}
		return $sum % 11 == 0 && $j == 15;
		
	}	

	
	 

?>



<html>
<head<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" http-equiv="content-typ">
<title>Lista</title>
	
	<link rel="stylesheet" type="text/css" href="style.css" />
			<!-- Remember to include jQuery :) -->
	<script src="jquery-modal\jquery.min.js"></script>

	<!-- jQuery Modal -->
	<script src="jquery-modal\jquery.modal.min.js"></script>
	<link rel="stylesheet" href="jquery-modal\jquery.modal.min.css" />


</head>
<body>


<br>
<br>
<br>
<br>

		
<br>
<table id="tb1" style="text-align: left;  height: 58px; margin-left: auto; margin-right: auto;" border="1" cellpadding="2" cellspacing="2">

<h1 align="center"> A pesquisa retornou os seguintes dados </h1>
	
	<tr>
	<td style="width: 20px">
			#
		</td>
		<td style="width: 150px">
			CNS
		</td>
		<td style="width: 350px">Nome</td>
		<td style="width: 100px">Data de nascimento</td>
		<td> Ações  </td>
		
	    
	</tr>

 <br>
<?

if(isset($sql)):

		$stmt = $b ->busca($sql);	
		
		$rs = $stmt->fetchAll();
				
		$cont=0;
		if( count($rs)){
			
		foreach($rs as $row) {
			$cont++ ;
			$idusuario = $row['id'];
			$cns= $row['cns'];
			$nome=  $row['nome'];
			$dtn =  $row['dtnasc'];
			$telefone =  $row['telefone'];
			$dtentrada=  $row['data_entrada'];
			$endereco_id=  $row['endereco_id'];
			
			
			
			
				//IMPRIME TABELA
				echo '<tr><td>'.$cont.'</td><td>'.$cns.'</td><td>'.$nome.'</td> 
					<td > '.$dtn.'</td> <td> <a href="#ex1" rel="modal:open"> <Button type="button" >Visualizar</Button></a> </td></tr>' ;
						
			
			
		}
		}else{
			echo"<script type='text/javascript'> alert('Não há usuario cadastrado.');</script>";;
		}
					
	endif;	
   	
	?>
	

 

</table>

				
				<div id="ex1" class="modal">
				  <p> <? include "teste.php"; ?> </p>
				  <a href="#" rel="modal:close">Close</a>
				</div>
				

<br>
<p><?


echo $msg;



?></p>
<br>
<p> 
            <a href="pesquisaUsuario.php"><input name="Voltar" value="Voltar" type="button"></a><br> 
          </p>

<?


echo $msg;



?>


 
</body>
</html>



