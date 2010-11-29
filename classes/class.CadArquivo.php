          <?php 
 
// Artefato gerado em 03/07/2009 - 16:13:41

include_once dirname(__FILE__).'/class.CadArquivoBD.php';
include_once dirname(__FILE__).'/class.Arquivo.php';

class CadArquivo{
  var $cadArquivoBD;

  function CadArquivo($conexao = ''){
    $this->cadArquivoBD = new CadArquivoBD($conexao);
  }

  function inserirArquivo($arquivo) { 
    return $this->cadArquivoBD->inserirArquivo($arquivo->getIdarquivo(), $arquivo->getUsuario_idusuario(), $arquivo->getPasta(), $arquivo->getDiretorio());
  }

  function alterarArquivo($arquivo) { 
    return $this->cadArquivoBD->alterarArquivo($arquivo->getIdarquivo(), $arquivo->getUsuario_idusuario(), $arquivo->getPasta(), $arquivo->getDiretorio());
  }

  function excluirArquivo($arquivo) { 
    return $this->cadArquivoBD->excluirArquivo($arquivo->getIdarquivo(), $arquivo->getUsuario_idusuario());
  }

  function arrayToObject($va){ 
    return new Arquivo($va['idarquivo'], $va['usuario_idusuario'], $va['pasta'], $va['diretorio']);
  }

  function getArquivo($usuario_idusuario) { 
    if($rs = $this->cadArquivoBD->getArquivo($usuario_idusuario))
      while($va = array_shift($rs))
        $vet[] = $this->arrayToObject($va);
    else
      return false;
    return $vet;
  }

  function getAllArquivo($ini,$num) { 
    if($rs = $this->cadArquivoBD->getAllArquivo($ini,$num))
      while($va = array_shift($rs))
        $vet[] = $this->arrayToObject($va);
    else
      return false;
    return $vet;
  }

}
?>