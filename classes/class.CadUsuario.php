<?php 
 
include_once dirname(__FILE__).'/class.CadUsuarioBD.php';
include_once dirname(__FILE__).'/class.Usuario.php';

class CadUsuario{
  var $cadUsuarioBD;

  function CadUsuario($conexao = ''){
    $this->cadUsuarioBD = new CadUsuarioBD($conexao);
  }

  function inserirUsuario($usuario) { 
    return $this->cadUsuarioBD->inserirUsuario($usuario->getIdusuario(), $usuario->getNome(), $usuario->getEmail(), $usuario->getLogin(), $usuario->getSenha(), $usuario->getTelefone(), $usuario->getPermissao());
  }

  function alterarUsuario($usuario) { 
    return $this->cadUsuarioBD->alterarUsuario($usuario->getIdusuario(), $usuario->getNome(), $usuario->getEmail(), $usuario->getLogin(), $usuario->getSenha(), $usuario->getTelefone(), $usuario->getPermissao());
  }

  function excluirUsuario($usuario) { 
    return $this->cadUsuarioBD->excluirUsuario($usuario->getIdusuario());
  }

  function arrayToObject($va){ 
    return new Usuario($va['idusuario'], $va['nome'], $va['email'], $va['login'], $va['senha'], $va['telefone'], $va['permissao']);
  }

  function getUsuario($idusuario) { 
    if($rs = $this->cadUsuarioBD->getUsuario($idusuario))
      return $this->arrayToObject(array_shift($rs));
    else
      return false;
  }
  function getUsuarioLogin($login,$senha) { 
    if($rs = $this->cadUsuarioBD->getUsuarioLogin($login,$senha))
      while($va = array_shift($rs))
        $vet[] = $this->arrayToObject($va);
    else
      return false;
    return $vet;
  }

  function getAllUsuario($ini,$num) { 
    if($rs = $this->cadUsuarioBD->getAllUsuario($ini,$num))
      while($va = array_shift($rs))
        $vet[] = $this->arrayToObject($va);
    else
      return false;
    return $vet;
  }

}
?>