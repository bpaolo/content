<?php 
 


  include_once dirname(__FILE__).'/classes/class.Fachada.php';
  session_start();

  $fachada = new Fachada();
    list($idarquivo, $usuario_idusuario) = Util::decode($_POST['rdOpcao']);
    $arquivo = $fachada->getArquivo($idarquivo, $usuario_idusuario);
    if(!$arquivo)
      header("location:admArquivo.php?msg=3");
    $res = $fachada->excluirArquivo($arquivo);
    $msg =($res)?1:2;
  header("location:admArquivo.php?msg=$msg");
?>
