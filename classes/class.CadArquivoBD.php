<?php 
include_once dirname(__FILE__).'/class.CadBD.php';
class CadArquivoBD extends CadBD{

  function CadArquivoBD($conexao = ""){
    $this->CadBD($conexao);
  }

  function inserirArquivo($idarquivo, $usuario_idusuario, $pasta, $diretorio) { 
    $sql = " INSERT INTO arquivo
                  VALUES('$idarquivo', '$usuario_idusuario', '$pasta', '$diretorio')";
    return $this->executarInsAuto($sql);
  }

  function alterarArquivo($idarquivo, $usuario_idusuario, $pasta, $diretorio) { 
    $sql = " UPDATE arquivo
              SET
               pasta = '$pasta',
               diretorio = '$diretorio'
              WHERE
               idarquivo = '$idarquivo' AND 
               usuario_idusuario = '$usuario_idusuario'";
    return $this->executarIUD($sql);
  }

  function excluirArquivo($idarquivo, $usuario_idusuario) { 
    $sql = " DELETE FROM arquivo
              WHERE
               idarquivo = '$idarquivo' AND 
               usuario_idusuario = '$usuario_idusuario'";
    return $this->executarIUD($sql);
  }

  function getArquivo($usuario_idusuario) { 
    $sql = " SELECT * FROM arquivo
               WHERE
                 usuario_idusuario = '$usuario_idusuario'";
    $rs = $this->con->execute($sql);
    return $this->con->fetch_array($rs);
  }

  function getAllArquivo($ini,$num) { 
    $sql = " SELECT * FROM arquivo
      ORDER BY
                    idarquivo, usuario_idusuario";
    if(($ini !== NULL) && ($num !== NULL))
	    $sql .=" LIMIT $ini,$num ";
    $rs = $this->con->execute($sql);
    return $this->con->fetch_array($rs);
  }

}
?>