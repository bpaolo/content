<?php 
class Usuario{

  function Usuario($idusuario, $nome, $email, $login, $senha, $telefone, $permissao){
   $this->idusuario = $idusuario;
   $this->nome = $nome;
   $this->email = $email;
   $this->login = $login;
   $this->senha = $senha;
   $this->telefone = $telefone;
   $this->permissao = $permissao;
  }

  function setAll($nome = false, $email = false, $login = false, $senha = false, $telefone = false, $permissao = false){
    if($nome !== false)
      $this->setNome($nome);
    if($email !== false)
      $this->setEmail($email);
    if($login !== false)
      $this->setLogin($login);
    if($senha !== false)
      $this->setSenha($senha);
    if($telefone !== false)
      $this->setTelefone($telefone);
    if($permissao !== false)
      $this->setPermissao($permissao);
  }

  function getIdusuario(){ return $this->idusuario;}

  function getNome(){ return $this->nome;}

  function getEmail(){ return $this->email;}

  function getLogin(){ return $this->login;}

  function getSenha(){ return $this->senha;}

  function getTelefone(){ return $this->telefone;}

  function getPermissao(){ return $this->permissao;}

  function setIdusuario($x){ $this->idusuario = $x;}

  function setNome($x){ $this->nome = $x;}

  function setEmail($x){ $this->email = $x;}

  function setLogin($x){ $this->login = $x;}

  function setSenha($x){ $this->senha = $x;}

  function setTelefone($x){ $this->telefone = $x;}

  function setPermissao($x){ $this->permissao = $x;}

}
?>