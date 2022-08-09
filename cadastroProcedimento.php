<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html><head><meta content="text/html; charset=UTF-81" http-equiv="content-type"><title>Cadastrar procedimento</title>
<link rel="stylesheet" type="text/css" href="style.css" />
<?php
include_once ("controle.php");
?>


</head><body><br>

 <div class="content">      
     
      <div id="Cadastrarevento">
        <form method="post" action="inserirProcedimento.php" name="formProcedimento" onSubmit="return sub();">
          <h1>Cadastrar procedimento</h1> 
          <p> 
            <label for="nomeProcedimento">Nome do Procedimento</label>
            <input name="nomeprocedimento" id="nomeprocedimento" required="required" type="text" placeholder="ex. Cirurgia ortopédica "/>
          </p>
           
                     
           <p> 
            <label for="local">Local do procedimento</label>
            <input name="local" id="local" required="required" type="text" placeholder="ex. Salvador" /> 
          </p>

 <p> 
            <label for="descricao">Descrição/Observações</label>
           <textarea  name="descricao" id="descricao" style="margin: 0px; height: 70px; width: 435px;"></textarea>
          </p>

          <p> 
           <input name="enviar" value="Gravar" type="submit"></input>
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
