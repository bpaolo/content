<?php 
 


  include_once dirname(__FILE__).'/classes/class.Fachada.php';
  session_start();

  $fachada = new Fachada();
    list($idarquivo, $usuario_idusuario) = Util::decode($_POST['rdOpcao']);
    $arquivo = $fachada->getArquivo($idarquivo, $usuario_idusuario);
    if(!$arquivo)
      header("location:admArquivo.php?msg=3");
?>
<HTML>
<HEAD>
<?php include_once dirname(__FILE__).'/template/templateHeaders.php';?>
</HEAD>
<BODY>
<?php include_once dirname(__FILE__).'/template/templateComeco.php';?>
<div id='divConteudo'>
<TABLE>
<caption >Detalhe Arquivo</caption>
<tr>
<td class='itemForm'>Idarquivo:</td>
<td><?=$arquivo->getIdarquivo()?></td>
</tr>
<tr>
<td class='itemForm'>Usuario_idusuario:</td>
<td><?=$arquivo->getUsuario_idusuario()?></td>
</tr>
<tr>
<td class='itemForm'>Pasta:</td>
<td><?=$arquivo->getPasta()?></td>
</tr>
<tr>
<td class='itemForm'>Diretorio:</td>
<td><?=$arquivo->getDiretorio()?></td>
</tr>
<tr>
<td colspan='2'><a href='admArquivo.php'>Voltar</a></td>
</tr>
</TABLE>
</div>
<?php include_once dirname(__FILE__).'/template/templateFim.php';?>
</BODY>
</HTML>