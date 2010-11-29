<?php 
  include_once dirname(__FILE__).'/classes/class.Fachada.php';
  error_reporting(0);
	
  $fachada = new Fachada();
  if($_POST['btnSalvar']){
    $usuario = new Usuario($_POST['txtIdusuario'], $_POST['txtNome'], $_POST['txtEmail'], $_POST['txtLogin'], $_POST['txtSenha'], $_POST['txtTelefone'],2);
    $res = $fachada->inserirUsuario($usuario);
	$pasta = $_POST['txtLogin'];
    mkdir ("e:/wamp/www/sgi/galeria/$pasta", 0700 );
	print "<script>alert('cadastrado com sucesso')</script>";
	print "<script>window.location='admUsuario.php';</script>";
  
  }
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
<script type="text/javascript" src="scripts/funcao.js"></script>

</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<FORM name='frmUsuario' method='POST' action='cadUsuario.php' onSubmit='return formulario.validaForm();'>
<TABLE>
<caption >Cadastro Usuario</caption>
<tr>
<td class='itemForm'>Nome:</td>
<td><INPUT type='text'  name='txtNome' size='60' value='' maxlength='250' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Email:</td>
<td><INPUT type='text'  name='txtEmail' size='60' value='' maxlength='250' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Login:</td>
<td><INPUT type='text'  name='txtLogin' size='20' value='' maxlength='50' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Senha:</td>
<td><INPUT type='password'  name='txtSenha' size='20' value='' maxlength='50' class='textForm'>
</td>
</tr>
<tr>
<td class='itemForm'>Telefone:</td>
<td><INPUT type='text'  name='txtTelefone' size='20' value='' onKeyPress="Mascara(this,Telefone);" maxlength='14' class='textForm'>
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
formulario = new FormContext(document.frmUsuario);
formulario.addCampo('txtNome','nome' , '', false);
formulario.addCampo('txtEmail','email' , '', false);
formulario.addCampo('txtLogin','login' , '', false);
formulario.addCampo('txtSenha','senha' , '', false);
formulario.addCampo('txtTelefone','telefone' , '', false);
</SCRIPT><?php include_once dirname(__FILE__).'/template/templateFim.php';?>

</BODY>
</HTML>