<?php 
 
// Artefato gerado em 03/07/2009 - 16:13:41

class Arquivo{

  function Arquivo($idarquivo, $usuario_idusuario, $pasta, $diretorio){
   $this->idarquivo = $idarquivo;
   $this->usuario_idusuario = $usuario_idusuario;
   $this->pasta = $pasta;
   $this->diretorio = $diretorio;
  }

  function setAll($pasta = false, $diretorio = false){
    if($pasta !== false)
      $this->setPasta($pasta);
    if($diretorio !== false)
      $this->setDiretorio($diretorio);
  }

  function getIdarquivo(){ return $this->idarquivo;}

  function getUsuario_idusuario(){ return $this->usuario_idusuario;}

  function getPasta(){ return $this->pasta;}

  function getDiretorio(){ return $this->diretorio;}

  function setIdarquivo($x){ $this->idarquivo = $x;}

  function setUsuario_idusuario($x){ $this->usuario_idusuario = $x;}

  function setPasta($x){ $this->pasta = $x;}

  function setDiretorio($x){ $this->diretorio = $x;}

}
?>