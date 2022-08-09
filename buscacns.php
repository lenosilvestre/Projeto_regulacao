
<?php
	session_start();
	include ("banco.php");
	$b = new database();
	
	$cns = $_POST['csus1'];
	
	$valida = validaCNS($cns);

	if($valida){
		
		$_SESSION['cns'] = $cns;
		
		//consulta se já existe no banco
		$consulta1 = $b -> busca("select * from usuario where cns='$cns'");
		$cont=0;
		while($rs1 = $consulta1 ->fetch(PDO::FETCH_OBJ)){
					$cont++ ;
					
		}
		if($cont==0){
			$_SESSION['existe'] = FALSE;
			
			echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = cadastroUsuario.php'>";
			
		}else{
			$_SESSION['existe'] = TRUE;
			
			echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = cadastroUsuario.php'>";
		}
		
	}else{
		echo"<script type='text/javascript'> alert('Cartão SUS invalido.');</script>";
		echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL = cadastroUsuario.php'>";
	}
	


function validaCNS($param) {
    $sum = 0;
    for ($i = 0, $j = strlen($param), $k = $j; $i < $j; $i++, $k--) {
        $sum += $param[$i] * $k;
    }
    return $sum % 11 == 0 && $j == 15;
	
}



?>



