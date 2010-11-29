<?php 

  include_once dirname(__FILE__).'/classes/class.Fachada.php';
  $fachada = new Fachada();
    list($idusuario) = Util::decode($_POST['rdOpcao']);
    $usuario = $fachada->getUsuario($idusuario);
    if(!$usuario)
      header("location:admUsuario.php?msg=3");
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<TABLE>
<caption >Detalhe Usuario</caption>
<tr>
<td class='itemForm'>Idusuario:</td>
<td><?=$usuario->getIdusuario()?></td>
</tr>
<tr>
<td class='itemForm'>Nome:</td>
<td><?=$usuario->getNome()?></td>
</tr>
<tr>
<td class='itemForm'>Email:</td>
<td><?=$usuario->getEmail()?></td>
</tr>
<tr>
<td class='itemForm'>Login:</td>
<td><?=$usuario->getLogin()?></td>
</tr>
<tr>
<td class='itemForm'>Senha:</td>
<td><?=$usuario->getSenha()?></td>
</tr>
<tr>
<td class='itemForm'>Telefone:</td>
<td><?=$usuario->getTelefone()?></td>
</tr>
<tr>
<td class='itemForm'>Permissao:</td>
<td><?=($usuario->getPermissao()=='1')?'administrador':'cliente'?></td>
</tr>
<tr>
<td colspan='2'><a href='admUsuario.php'>Voltar</a></td>
</tr>
</TABLE>
</div>
<?php include_once dirname(__FILE__).'/template/templateFim.php';?>
</BODY>
</HTML>