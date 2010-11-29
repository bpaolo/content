<?php 
  include_once dirname(__FILE__).'/classes/class.FrontController.php';
  $frontController = new FrontController();
  $vetUsuario = $frontController->iniciarAdm($_GET['pag'],'usuario','admUsuario.php');
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
<a href="cadUsuario.php" title="cadastrar usuario">cadastrar usuario</a></div>
<FORM name='formAction' method='POST' action=''>
<TABLE>
<tr>
<th scope='col'>&nbsp;</th>
<th scope='col'>Nome</th>
<th scope='col'>Id</th>
<th scope='col'>Email</th>
<th scope='col'>Login</th>
<th scope='col'>Senha</th>
<th scope='col'>Telefone</th>
<th scope='col'>Permissao</th>
</tr>
<?
	if ($vetUsuario){
		while ($usuario = array_shift($vetUsuario)){
?>
<tr>
<td><INPUT type='radio'  name='rdOpcao' value='<?=Util::Encode($usuario->getIdusuario())?>' class=''>
</td>
<td><a href="galeria.php?id=<?=$usuario->getIdusuario()?>"><?=$usuario->getNome();?></a></td>
<td><?=$usuario->getIdusuario();?></td>
<td><?=($usuario->getEmail()=='')?'sem registro':$usuario->getEmail();?></td>
<td><?=$usuario->getLogin();?></td>
<td><?=$usuario->getSenha();?></td>
<td><?=($usuario->getTelefone()=='')?'sem registro':$usuario->getTelefone();?></td>
<td><?=($usuario->getPermissao()=='1')?'administrador':'cliente'?></td>
</tr>
<?
	}
?>
</TABLE>
<div id='botoesAcao'>
<INPUT type='button'  name='btnExcluir' value='Excluir' class='buttonForm' onClick = 'submitForm(document.formAction, "delUsuario.php",true);'>
<INPUT type='button'  name='btnEditar' value='Editar' class='buttonForm' onClick = 'submitForm(document.formAction, "editUsuario.php",false);'>
<INPUT type='button'  name='btnDetalhes' value='Detalhes' class='buttonForm' onClick = 'submitForm(document.formAction, "detUsuario.php",false);'>
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