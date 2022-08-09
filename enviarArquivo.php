<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<?php 
session_start();
include_once ("controle.php");
include ("banco.php");
$b = new database();
$validador;

?>
<html><head>
<meta content="text/html; charset=UTF-8" http-equiv="content-type"><title>Cadastrar Administrador</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<script>

</script>



</head><body><br>

  <div class="content">      
     
      <div id="CriarAdministrador">
		<h1>Enviar arquivos</h1> 
        <form method="post" action="upload.php" name="formenviar" enctype="multipart/form-data">

          <p> 
            <label for="nome">Descrição</label>
            <input  name="descricao" id="descricao" required="required" type="text" placeholder="ex. Rg e CPF"/>
          </p>
          
		  <p> 
          Arquivo:  <input type="file" required="required" name="arquivo"><br> 
          </p>
		  <p> 
            <input type="submit" value="Enviar" ><br> 
          </p>
          </form> 
            <form> 
          <p>Arquivos enviados:</p> 
          
          <?php
            	
            $cns = $_SESSION['cns'];
      	    $stmt = $b -> busca ("select * from documentos where usuario_cns='$cns'");
			
			while($rs = $stmt->fetch(PDO::FETCH_OBJ)){
			    $local = $rs ->nome_doc;
			    $arq = $rs ->descricao.substr($rs -> nome_doc, -4);
			  
			    echo "<a target='_blank' href='documentos/".$local."'>".$arq."</a><br>";
		        $validador=true;
			}
        
          echo "<br>";
          if(isset($validador)){
             ?> <p> <br>
           <a href="gerenciar.php"> <input name="concluir" value="Concluir" type="button" ></a></br> 
          </p>
          <?php 
            unset($validador);
          }
          ?>
          
          </form> 
          <p> 
            <a href="gerenciar.php"><input name="Voltar" value="Voltar" type="button"></a></br> 
          </p>
        

       

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


