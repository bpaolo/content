<?
class Paginacao{

	var $max;
	var $link;
	var $maxReg;
	var $numPagina;
	
	/*
	sql 		= SQL Padrão, com somente o *
	link 		= a pagina que será chamada
	numPagina 	= número da página
	maxReg 	= maximo de registros por pagina
	*/
	function Paginacao($sql,$link,$numPagina=0,$maxReg=30){
		$this->maxReg = $maxReg;
		$this->numPagina = $numPagina;
		$conexao = new Conexao();
		$vet = $conexao->fetch_array($conexao->execute($this->SQLCount($sql)));
		$this->max = $vet[0]['count(*)'];
		if(stristr($link,"?"))
			$this->link = $link."&";
		else
			$this->link = $link."?";
	}
	
	function SQLCount($sql){
		$aux = explode("FROM",$sql);
		$sql =  "SELECT count(*) FROM".$aux[1];
		//$sql  = str_replace('*','count(*)',$sql);
		$pos = strpos($sql, "LIMIT");
		if($pos)
			return substr($sql, 0,$pos);
		else 
			return $sql;
	}
	
	function paginas(){
		$totalPaginas = floor($this->max/$this->maxReg);
		$resto = $this->max % $this->maxReg;
		if($resto>=1)
			$totalPaginas++;
		
		if($totalPaginas >1){
			$str = "<div id='pag'>";
			for($i=0;$i<$totalPaginas;$i++){
				if($this->numPagina != $i)
					$str .= "<a href='".$this->link."pag=$i'>".($i+1)."</a>";
				else
					$str .= $i+1;
				if($i < ($totalPaginas -1))
					$str .= " - ";
			}
			$str .= "</div>";
		}
		return $str;
	}
}
?>