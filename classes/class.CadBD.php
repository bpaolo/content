<?
include_once dirname(__FILE__).'/class.Conexao.php';

class CadBD{

	var $con;
	
  function CadBD($conexao){
    if($conexao)
      $this->con = $conexao;
    else
      $this->con = new Conexao();
  }
  
  function executarIUD($sql){
    if($rs = $this->con->execute($sql)){
      $rs->Close();
	  if($this->con->getAutoCommit())
        $this->con->close();
      return true;
    }else
      return false;
  }
  
  
  function executarInsAuto($sql){
    if($rs = $this->con->execute($sql)){
      $id = $this->con->insertId();
      $rs->Close();
	  if($this->con->getAutoCommit())
        $this->con->close();
      return $id;
    }else
      return false;
  }

}
?>