<?
include_once dirname(__FILE__).'/class.Fachada.php';

class FrontController{

	var $fachada;
	var $paginacao;
	//private $fachada;
	
	function FrontController(){
		$this->fachada = new Fachada();
	}
	
	function iniciarAdm($pag=0,$entidade,$nomePagina,$nomeMetodo=NULL,$parametros=NULL){
		if($nomeMetodo)
			eval("\$vet = \$this->fachada->$nomeMetodo(".(($parametros)?"'".(implode("','",$parametros)."',"):"")."\$pag*Constante::getMaxRegistrosPag(),Constante::getMaxRegistrosPag());");
		else
			eval("\$vet = \$this->fachada->getAll$entidade(\$pag*Constante::getMaxRegistrosPag(),Constante::getMaxRegistrosPag());");
		$this->paginacao = new Paginacao($_SESSION['lastSQL'],$nomePagina,$pag,Constante::getMaxRegistrosPag());
		return $vet;
	}
		
}
?>
