<?php 
 


  include_once dirname(__FILE__).'/classes/class.FrontController.php';
  session_start();

  $frontController = new FrontController();
  $vetArquivo = $frontController->iniciarAdm($_GET['pag'],'arquivo','admArquivo.php');
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<?=Util::getMsg($_GET['msg'])?>
<div id='divConteudo'>
<div id='tituloPagina'>
<div id='divImagemMarcador'>
</div>
Ger&ecirc;ncia de Arquivo</div>
<FORM name='formAction' method='POST' action=''>
<TABLE>
<tr>
<th scope='col'>&nbsp;</th>
<th scope='col'>Usuario_idusuario</th>
<th scope='col'>Pasta</th>
<th scope='col'>Diretorio</th>
</tr>
<?
	if ($vetArquivo){
		while ($arquivo = array_shift($vetArquivo)){
?>
<tr>
<td><INPUT type='radio'  name='rdOpcao' value='<?=Util::Encode($arquivo->getIdarquivo(),$arquivo->getUsuario_idusuario())?>' class=''>
</td>
<td><?=$arquivo->getUsuario_idusuario();?></td>
<td><?=$arquivo->getPasta();?></td>
<td><?=$arquivo->getDiretorio();?></td>
</tr>
<?
	}
?>
</TABLE>
<div id='botoesAcao'>
<INPUT type='button'  name='btnExcluir' value='Excluir' class='buttonForm' onClick = 'submitForm(document.formAction, "delArquivo.php",true);'>
<INPUT type='button'  name='btnEditar' value='Editar' class='buttonForm' onClick = 'submitForm(document.formAction, "editArquivo.php",false);'>
<INPUT type='button'  name='btnDetalhes' value='Detalhes' class='buttonForm' onClick = 'submitForm(document.formAction, "detArquivo.php",false);'>
</div>
<?
	}else{
?>
</TABLE>
<strong>N&atilde;o h&aacute; nenhum registro cadastrado!</strong>
<?
	}
?>
</FORM>
<?=$frontController->paginacao->paginas()?>
</div>
<?php include_once dirname(__FILE__).'/template/templateFim.php';?>
</BODY>
</HTML>