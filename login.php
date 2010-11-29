<?php
 include_once dirname(__FILE__).'/classes/class.Fachada.php';
  error_reporting(0);

  $fachada = new Fachada();
  if($_POST['enviar']){
  $vetUsuario = $fachada->getUsuarioLogin($_POST['txtLogin'],$_POST['txtSenha']);
		foreach($vetUsuario as $usuario){
		  if($usuario->getNome()=='administrador') {
				  
		  		print "<script>window.location='admUsuario.php';</script>";	
		  }else{
				$id = $usuario->getIdUsuario();
				print "<script>window.location='galeria.php?id=".$id."';</script>";

			}	
	  }
	}	
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<FORM name='login' method='POST' action='login.php' onSubmit='return formulario.validaForm();'>
<TABLE>
<caption >&nbsp;
</caption>


<tr>
<td class='itemForm'>Login:</td>
<td><INPUT type='text'  name='txtLogin' size='20' value='' maxlength='30' class='textForm'></td>
</tr>
<tr>
<td class='itemForm'>Senha:</td>
<td><INPUT type='password'  name='txtSenha' size='20' value='' maxlength='20' class='textForm'></td>
</tr>
<tr>
<td colspan='2'><INPUT type='submit'  name='enviar' value='enviar' class='buttonForm' onClick = ''></td>
</tr>
</TABLE>
<p><a href="formEmail.php" title="Novo cadastro">envio seu pedido de cadastro!</a></p>
</FORM>
</div>
<?php include_once dirname(__FILE__).'/template/templateFim.php';?>
</BODY>
</HTML>