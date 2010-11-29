<?php 
 
  include_once dirname(__FILE__).'/classes/class.Fachada.php';
   @session_start();
   error_reporting(0);
  $fachada = new Fachada();
  if($_POST['btnSalvar']){
    $usuario = $_SESSION['usuario'];
    $usuario->setAll($_POST['txtNome'], $_POST['txtEmail'], $_POST['txtLogin'], $_POST['txtSenha'], $_POST['txtTelefone'], $_POST['txtPermissao']);
    $res = $fachada->alterarUsuario($usuario);
     print "<script>window.location='admUsuario.php';</script>";
  }else{
    list($idusuario) = Util::decode($_POST['rdOpcao']);
    $usuario = $fachada->getUsuario($idusuario);
    if(!$usuario)
      print "<script>window.location='admUsuario.php';</script>";
    $_SESSION['usuario'] = $usuario;
  }
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<FORM name='frmUsuario' method='POST' action='editUsuario.php' onSubmit='return formulario.validaForm();'>
<TABLE>
<caption >Edi&ccedil;&atilde;o Usuario</caption>
<tr>
<td class='itemForm'>Nome:</td>
<td><INPUT type='text'  name='txtNome' size='60' value='<?=$usuario->getNome()?>' maxlength='250' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Email:</td>
<td><INPUT type='text'  name='txtEmail' size='60' value='<?=$usuario->getEmail()?>' maxlength='250' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Login:</td>
<td><INPUT type='text'  name='txtLogin' size='60' value='<?=$usuario->getLogin()?>' maxlength='50' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Senha:</td>
<td><INPUT type='text'  name='txtSenha' size='60' value='<?=$usuario->getSenha()?>' maxlength='50' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Telefone:</td>
<td><INPUT type='text'  name='txtTelefone' size='60' value='<?=$usuario->getTelefone()?>' maxlength='50' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Permissao:</td>
<td><INPUT type='text'  name='txtPermissao' size='10' value='<?=$usuario->getPermissao()?>' maxlength='10' class='textForm'>
</td>
</tr>
<tr>
<td colspan='2'><INPUT type='submit'  name='btnSalvar' value='Salvar' class='buttonForm' onClick = ''>
</td>
</tr>
</TABLE>
</FORM>
</div>
<?php include_once dirname(__FILE__).'/template/templateFim.php';?>
</BODY>
</HTML>