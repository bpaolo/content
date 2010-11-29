<?php
session_start();
  include_once dirname(__FILE__).'/classes/class.Fachada.php';
  error_reporting(0);
  $fachada = new Fachada();
  $_SESSION['id'] = $_REQUEST['id'];
  $vetArquivo = $fachada->getArquivo($_SESSION['id']);
  
if(isset($_POST["imagem"]))
{
$emailPhoto ='bpaolo@gmail.com';
$usuario = $_SESSION['cliente'];
//---------------------------------------ENVIO DE EMAIL OK----------------------------------
// multiple recipients
$to  = '$emailPhoto' . ', '; // note the comma
// subject
$subject = 'Pedido de Fotos';
//campos

// message

$message .= "<html>";
$message .= "<head>";
$message .= "<title>Imagens Escolhidas</title>";
$message .= "</head>";
$message .= "<body>";
$message .= "<table>";
$message .= "<tr>";
$message .= "<td>Cliente:</td>";
$message .= "<td>$usuario</td>";
$message .= "</tr>";
foreach($_POST["imagem"] as $imagem)
{
$message .= "<tr>";
$message .= "<td>Foto:</td>";
$message .= "<td>$imagem</td>";
$message .= "</tr>";
}
$message .= "</tr>";
$message .= "</table>";
$message .= "</body>";
$message .= "</html>";
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// Additional headers
$headers .= 'To: Bruno <'.$emailPhoto.'>' . "\r\n";
$headers .= 'From: Pedido de Cadastro<$email>' . "\r\n";
$headers .= 'Cc: '.$emailPhoto.'' . "\r\n";
$headers .= 'Bcc: '.$emailPhoto.'' . "\r\n";

// Mail it
mail($to, $subject, $message, $headers);
			print "<script>alert('Fotos Enviadas com sucesso!')</script>";
			print "<script>window.location='login.php';</script>";
}
#---------------------------------FIM DE ENVIO DE EMAIL--------------------------

else
{
echo "";
}

?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<?
$vetUser = $fachada->getUsuario($_SESSION['id']);
$cliente = $vetUser->getLogin();		  
$i = 0;
$_SESSION['cliente'] = $cliente;
foreach($vetArquivo as $arquivo){
$imagem = $arquivo->getDiretorio();
$i++;
?>
<form name="" method="post" action="">
  <label>
<input type="checkbox" name="imagem[]" id="img" value="<?=$imagem;?>">
<input type="hidden" name="cliente" id="cliente" value="<?=$_SESSION['cliente'];?>">
<img src="galeria/<?=$cliente;?>/<?=$imagem;?>"/><?=$imagem;?><br>  
  </label>
<?}?>  
 <?=($vetArquivo)?"<input type='submit' name='button' id='button' value='enviar'>":"Não há registro no Banco da sua Galeria"?> 
  
</form>


  
</div>
<?php include_once dirname(__FILE__).'/template/templateFim.php';?>
</BODY>
</HTML>