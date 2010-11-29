<?php 
 include_once dirname(__FILE__).'/classes/class.Fachada.php';
  session_start();

  $fachada = new Fachada();
  if($_POST['btnSalvar']){
    $arquivo = $_SESSION['arquivo'];
    $arquivo->setAll($_POST['txtPasta'], $_POST['txtDiretorio']);
    $res = $fachada->alterarArquivo($arquivo);
    $msg =($res)?1:2;
    unset($_SESSION['arquivo']);
    header('location:admArquivo.php?msg='.urlencode($msg));
  }else{
    list($idarquivo, $usuario_idusuario) = Util::decode($_POST['rdOpcao']);
    $arquivo = $fachada->getArquivo($idarquivo, $usuario_idusuario);
    if(!$arquivo)
      header("location:admArquivo.php?msg=3");
    $_SESSION['arquivo'] = $arquivo;
  }
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<FORM name='frmArquivo' method='POST' action='editArquivo.php' onSubmit='return formulario.validaForm();'>
<TABLE>
<caption >Edi&ccedil;&atilde;o Arquivo</caption>
<tr>
<td class='itemForm'>Usuario_idusuario:</td>
<td><INPUT type='text'  name='txtUsuario_idusuario' size='10' value='<?=$arquivo->getUsuario_idusuario()?>' maxlength='10' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Pasta:</td>
<td><INPUT type='text'  name='txtPasta' size='60' value='<?=$arquivo->getPasta()?>' maxlength='250' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Diretorio:</td>
<td><INPUT type='text'  name='txtDiretorio' size='60' value='<?=$arquivo->getDiretorio()?>' maxlength='250' class='textForm'>
</td>
</tr>
<tr>
<td colspan='2'><INPUT type='submit'  name='btnSalvar' value='Salvar' class='buttonForm' onClick = ''>
</td>
</tr>
</TABLE>
</FORM>
</div>
<SCRIPT language='javascript'>
formulario = new FormContext(document.frmArquivo);
formulario.addCampo('txtUsuario_idusuario','Usuario_idusuario' , 'numero', true);
</SCRIPT><?php include_once dirname(__FILE__).'/template/templateFim.php';?>
</BODY>
</HTML>