<?php 
  include_once dirname(__FILE__).'/classes/class.Fachada.php';
    $fachada = new Fachada();
    list($idusuario) = Util::decode($_POST['rdOpcao']);
    $usuario = $fachada->getUsuario($idusuario);
    if(!$usuario)
      print "<script>window.location='admUsuario.php';</script>";
    $res = $fachada->excluirUsuario($usuario);
    
  print "<script>window.location='admUsuario.php';</script>";
?>
