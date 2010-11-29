<?php 
 
include_once dirname(__FILE__).'/class.CadBD.php';
class CadUsuarioBD extends CadBD{

  function CadUsuarioBD($conexao = ""){
    $this->CadBD($conexao);
  }

  function inserirUsuario($idusuario, $nome, $email, $login, $senha, $telefone, $permissao) { 
    $sql = " INSERT INTO usuario
                  VALUES('$idusuario', '$nome', '$email', '$login', '$senha', '$telefone', '$permissao')";
    return $this->executarInsAuto($sql);
  }

  function alterarUsuario($idusuario, $nome, $email, $login, $senha, $telefone, $permissao) { 
    $sql = " UPDATE usuario
              SET
               nome = '$nome',
               email = '$email',
               login = '$login',
               senha = '$senha',
               telefone = '$telefone',
               permissao = '$permissao'
              WHERE
               idusuario = '$idusuario'";
    return $this->executarIUD($sql);
  }

  function excluirUsuario($idusuario) { 
    $sql = " DELETE FROM usuario
              WHERE
               idusuario = '$idusuario'";
    return $this->executarIUD($sql);
  }

  function getUsuario($idusuario) { 
    $sql = " SELECT * FROM usuario
               WHERE
                 idusuario = '$idusuario'";
    $rs = $this->con->execute($sql);
    return $this->con->fetch_array($rs);
  }

  function getUsuarioLogin($login,$senha) { 
    $sql = " SELECT * FROM usuario
               WHERE
                 login = '$login' AND
				 senha = '$senha'
				 ";
    $rs = $this->con->execute($sql);
    return $this->con->fetch_array($rs);
  }
  function getAllUsuario($ini,$num) { 
    $sql = " SELECT * FROM usuario
      ORDER BY
                    idusuario";
    if(($ini !== NULL) && ($num !== NULL))
	    $sql .=" LIMIT $ini,$num ";
    $rs = $this->con->execute($sql);
    return $this->con->fetch_array($rs);
  }

}
?>