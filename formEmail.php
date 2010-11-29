<?php
  include_once dirname(__FILE__).'/classes/class.Fachada.php';
  #error_reporting(0);

if($_POST){
$nome = $_REQUEST['nome'];
$email = $_REQUEST['email'];
$login = $_REQUEST['login'];
$senha = $_REQUEST['senha'];
$telefone = $_REQUEST['telefone'];
$emailAdm = 'bpaolo@gmail.com';
//---------------------------------------ENVIO DE EMAIL OK----------------------------------
// multiple recipients
$to  = ''.$emailAdm.'' . ', '; // note the comma
// subject
$subject = 'Pedido de Cadastro ';

//campos


// message

$message .= "<html>";
$message .= "<head>";
$message .= "<title>Pedido de Cadastro</title>";
$message .= "</head>";
$message .= "<body>";
$message .= "<table>";
$message .= "<tr>";
$message .= "<td>Nome:</td>";
$message .= "<td>$nome</td>";
$message .= "</tr>";
$message .= "<tr>";
$message .= "<td>E-mail:</td>";
$message .= "<td>$email</td>";
$message .= " </tr>";
$message .= "<tr>";
$message .= "<td>Login:</td>";
$message .= "<td>$login</td>";
$message .= " </tr>";
$message .= "<tr>";
$message .= "<td>Senha:</td>";
$message .= "<td>$senha</td>";
$message .= " </tr>";
$message .= "<tr>";
$message .= "<td >Telefone:</td>";
$message .= "<td>$telefone</td>";
$message .= "</tr>";
$message .= "</table>";
$message .= "</body>";
$message .= "</html>";

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Admnistrador <'.$emailAdm.'>' . "\r\n";
$headers .= 'From: Pedido de Cadastro<$email>' . "\r\n";
$headers .= 'Cc: '.$emailAdm.'' . "\r\n";
$headers .= 'Bcc: '.$emailAdm.'' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
			print "<script>alert('Dados enviados com sucesso!')</script>";
			print "<script>window.location='login.php';</script>";
}
#---------------------------------FIM DE ENVIO DE EMAIL--------------------------
	
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
<script type="text/javascript" src="scripts/funcao.js"></script>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<FORM name='formEmail' method='POST' action='formEmail.php'  enctype="multipart/form-data">
<TABLE>
<caption >&nbsp;
</caption>


<tr>
<td class='itemForm'>Nome:</td>
<td><INPUT type='text'  name='nome' size='40' value='' maxlength='30' class='textForm'></td>
</tr>
<tr>
<td class='itemForm'>Email:</td>
<td><INPUT type='text'  name='email' size='40' value='' maxlength='20' class='textForm'></td>
</tr>
<tr>
<td class='itemForm'>Login:</td>
<td><INPUT type='text'  name='login' size='20' value='' maxlength='20' class='textForm'></td>
</tr>
<tr>
<td class='itemForm'>Senha:</td>
<td><INPUT type='password'  name='senha' size='20' value='' maxlength='20' class='textForm'></td>
</tr>
<tr>
<td class='itemForm'>Telefone:</td>
<td><INPUT type='text'  name='telefone' size='20' value='' onKeyPress="Mascara(this,Telefone);" maxlength='14' class='textForm'></td>
</tr>
<tr>
<td colspan='2'><INPUT type='submit'  name='enviar' value='enviar' class='buttonForm' onClick = ''></td>
</tr>
</TABLE>
<p><a href="login.php" title="login">voltar</a></p>
</FORM>
</div>
<SCRIPT language='javascript'>
formulario = new FormContext(document.formEmail);
formulario.addCampo('nome','nome' , '', false);
formulario.addCampo('email','email' , '', false);
formulario.addCampo('login','login' , '', false);
formulario.addCampo('senha','senha' , '', false);
formulario.addCampo('telefone','telefone' , '', false);
</SCRIPT>
<?php include_once dirname(__FILE__).'/template/templateFim.php';?>
</BODY>
</HTML>
