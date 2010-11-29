<?
class Util{
	function Util(){}
	function getMsg($mod= NULL,$msg=NULL){
		if($mod){
			$vetMensagem = array();
			$vetMensagem[1][1] = "A opera&ccedil;&atilde;o foi realizada com sucesso!";
			$vetMensagem[1][2] = 1;
			$vetMensagem[2][1] = "A opera&ccedil;&atilde;o n&atilde;o foi realizada com sucesso!";
			$vetMensagem[2][2] = 2;
			$vetMensagem[3][1] = "O registro nao foi encontrado, verifique os dados informados!";
			$vetMensagem[3][2] = 2;
		
	
			$vetAlerta = array();
			$vetAlerta[1] = "divMensagemNormal";
			$vetAlerta[2] = "divMensagemDuvida";
			$vetAlerta[3] = "divMensagemExclamacao";
			$alerta = $vetAlerta[$vetMensagem[$mod][2]];
			$msg = ($vetMensagem[$mod][1])?$vetMensagem[$mod][1]:"Problemas durante a execu&ccedil;&atilde;o!";
	
			return "<div id='$alerta'><br>$msg</div><br>";
		}
	}
		
	function getDataAtual(){
		return date("Y-m-d");
	}
	
	function getHoraAtual(){
		return date("H:i:s");
	}
	
	function converteData($data){
		//return $this->converteAmdParaDma($data);
		return Util::converteAmdParaDma($data);
	}
	
	function converteDataBanco($data){
		//return $this->converteDmaParaAmd($data);
		return Util::converteDmaParaAmd($data);
	}
	
	function converteMdaParaDma(&$data){
		$data = substr($data,0,10);    
		list($mes,$dia,$ano) = explode("/",$data);
		$data = $dia."/".$mes."/".$ano;
		return $data;
	}
	
	function converteDmaParaMda(&$data){
		$data = substr($data,0,10);    
		list($dia,$mes,$ano) = explode("/",$data);
		$data = $mes."/".$dia."/".$ano;
		return $data;
	}	

	function converteDmaParaAmd(&$data){
		$data = substr($data,0,10);    
		list($dia,$mes,$ano) = explode("/",$data);
		$data = $ano."-".$mes."-".$dia;
		return $data;
	}	
	
	function converteAmdParaDma(&$data){
 		$data = substr($data,0,10);    
		list($ano,$mes,$dia) = explode("-",$data);
		$data = $dia."/".$mes."/".$ano;
		return $data;
	}	

	## funções de formatação e tratamento de strings
	function forValorBanco($valor){
		return str_replace(",",".",$valor);
	}
	
	function forValor($valor){
		return str_replace(".",",",$valor);
	}
	
	function forStringBanco($str){
		$str = addslashes($str);
		return $str;
	}
	
	function forString($str){
		$str = stripslashes($str);
		return $str;
	}
	
	function encode(){
		$vetParametros = func_get_args();
		while($parametro = array_shift($vetParametros)){
			$vetEncode[] .= urlencode($parametro);
		}
		return implode("|",$vetEncode);
	}
	
	function decode($codigo){
		$vetVarDecode = explode("|",$codigo);
		while($varDecode = urldecode(array_shift($vetVarDecode))){
			 $vetVar[] = $varDecode;
		}
		return $vetVar;
	}
	
	function iterateMenu($vetor,$atributoLabel,$atributoValor=false,$valorPadrao=false){
	  	foreach ($vetor as $objeto){
	  		$strValor = "\$objeto->get".(($atributoValor)?$atributoValor:$atributoLabel)."()";
	  	    if(is_array($atributoLabel))
	  	    	for ($i=0;$i<count($atributoLabel);$i++) 
	  	    		$strLabel .= "\$objeto->get".$atributoLabel[$i]."()".(($i == count($atributoLabel)-1)?'':'." - ".');
	  		else
	  			$strLabel = "\$objeto->get".$atributoLabel."()";
	  		
	  		eval("\$strValor = $strValor;");
	  		eval("\$strLabel = $strLabel;");
	  		print "<option value='".$strValor."'".(($valorPadrao)?(($strValor == $valorPadrao)?"selected ":""):'')." >".
	  			$strLabel."</option>\n";
	  		$strLabel = '';
	  	}
  	}
  	
  	function viewAgregation($pk,$nameObject,$property){
  	 if(is_array($pk))
  	 	$pk = implode(",",$pk);
  	 eval("\$object = Fachada::get$nameObject($pk);");
  	 if($object)
  	 	eval("\$valor = \$object->get$property();");
  	 return $valor;
  	}
}
?>