<?php 
 
// Artefato gerado em 03/07/2009 - 16:13:41

  include_once dirname(__FILE__).'/classes/class.Fachada.php';
  session_start();

  $fachada = new Fachada();
  if($_POST['btnSalvar']){
    $arquivo = new Arquivo($_POST['txtIdarquivo'], $_POST['txtUsuario_idusuario'], $_POST['txtPasta'], $_POST['txtDiretorio']);
    $res = $fachada->inserirArquivo($arquivo);
    $msg =($res)?1:2;
    header('location:admArquivo.php?msg='.urlencode($msg));
  }
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<FORM name='frmArquivo' method='POST' action='cadArquivo.php' onSubmit='return formulario.validaForm();'>
<TABLE>
<caption >Cadastro Arquivo</caption>
<tr>
<td class='itemForm'>Usuario_idusuario:</td>
<td><INPUT type='text'  name='txtUsuario_idusuario' size='10' value='' maxlength='10' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Pasta:</td>
<td><INPUT type='text'  name='txtPasta' size='60' value='' maxlength='250' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Diretorio:</td>
<td><INPUT type='text'  name='txtDiretorio' size='60' value='' maxlength='250' class='textForm'>
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