<?php 
include_once dirname(__FILE__).'/class.CadArquivo.php';
include_once dirname(__FILE__).'/class.CadUsuario.php';
include_once dirname(__FILE__).'/class.Conexao.php';
//include_once dirname(__FILE__).'/class.Erro.php';
//include_once dirname(__FILE__).'/class.SMTP.php';
include_once dirname(__FILE__).'/class.Util.php';
include_once dirname(__FILE__).'/class.Paginacao.php';


include_once dirname(__FILE__).'/class.Constante.php';


class Fachada{
  var $conexao;

  function Fachada(){
    $this->conexao = NULL;
  }

  function getConexao(){
    return $this->conexao;
  }

  function iniciarTransacao(){
    $this->conexao = new Conexao();
    $this->conexao->iniciarTrans();
  }

  function commitTransacao(){
    $this->conexao->commitTrans();
    $this->conexao = NULL;
  }

  function rollBackTransacao(){
    $this->conexao->rollBackTrans();
    $this->conexao = NULL;
  }

//Metodos da Classe Arquivo

  function inserirArquivo($arquivo) { 
    $cadArquivo = new CadArquivo($this->getConexao());
    return $cadArquivo->inserirArquivo($arquivo);
  }

  function alterarArquivo($arquivo) { 
    $cadArquivo = new CadArquivo($this->getConexao());
    return $cadArquivo->alterarArquivo($arquivo);
  }

  function excluirArquivo($arquivo) { 
    $cadArquivo = new CadArquivo($this->getConexao());
    return $cadArquivo->excluirArquivo($arquivo);
  }

  function getArquivo($usuario_idusuario) { 
    $cadArquivo = new CadArquivo();
    return $cadArquivo->getArquivo($usuario_idusuario);
  }

  function getAllArquivo($ini = NULL, $num = NULL) { 
    $cadArquivo = new CadArquivo();
    return $cadArquivo->getAllArquivo($ini, $num);
  }

//Metodos da Classe Usuario

  function inserirUsuario($usuario) { 
    $cadUsuario = new CadUsuario($this->getConexao());
    return $cadUsuario->inserirUsuario($usuario);
  }

  function alterarUsuario($usuario) { 
    $cadUsuario = new CadUsuario($this->getConexao());
    return $cadUsuario->alterarUsuario($usuario);
  }

  function excluirUsuario($usuario) { 
    $cadUsuario = new CadUsuario($this->getConexao());
    return $cadUsuario->excluirUsuario($usuario);
  }

  function getUsuario($idusuario) { 
    $cadUsuario = new CadUsuario();
    return $cadUsuario->getUsuario($idusuario);
  }
  function getUsuarioLogin($login,$senha) { 
    $cadUsuario = new CadUsuario();
    return $cadUsuario->getUsuarioLogin($login,$senha);
  }

  function getAllUsuario($ini = NULL, $num = NULL) { 
    $cadUsuario = new CadUsuario();
    return $cadUsuario->getAllUsuario($ini, $num);
  }

}
?>