<?php
// desativando todos os erros, para que o usu�rio n�o os veja.
error_reporting(0);

//mudando a fun��o que ir� gerenciar os erros a partir de agora.
$old_error_handler = set_error_handler("erros");

/**
 * @return void
 * @param int 		$errno 		numero do erro
 * @param string 	$errmsg 	mensagem de erro
 * @param string 	$filename	nome do arquivo
 * @param int 		$linenum 	n�mero da linha
 * @param array 	$vars 		n�o sei
 * @desc fun�ao que servir� de callBack
*/
function erros($errno, $errmsg, $filename, $linenum, $vars) {
	$erro = new Erro($errno, $errmsg, $filename, $linenum, $vars);
}
/**
 * @return void
 * @param int 		$nErro 			numero do erro
 * @param string 	$msgErro 		mensagem de erro
 * @param string 	$nomeArquivo	nome do arquivo
 * @param int 		$numLinha 		n�mero da linha
 * @param array 	$vars 			n�o sei
 * @desc fun�ao que servir� de callBack
*/
function erros($nErro,$msgErro,$nomeArquivo,$numLinha, $vars) {
	$erro = new Erro($nErro,$msgErro,$nomeArquivo,$numLinha, $vars);
}



class Erro{	
	var $nErro;
	var $msgErro;
	var $nomeArquivo;
	var $numLinha;
	var $vars;
	
	function Erro($nErro,$msgErro,$nomeArquivo,$numLinha, $vars){
		$this->nErro 		= $nErro;
		$this->msgErro 		= $msgErro;
		$this->nomeArquivo	= $nomeArquivo;
		$this->numLinha		= $numLinha;
		$this->vars			= $vars;
		$this->logErro();
   		$this->fluxoNavegacao();
	}
	
	/**
	* @return void
	* @desc Cria a mensagem de Log, chama o m�todo de grava��o e envio de email.
	*/
	function logErro(){
		$dt = date("d-m-Y H:i:s");
		// Define uma matriz associativa com as strings dos erros
   		$desErro = array (	1   =>  "Error",		2   =>  "Warning",
               				4   =>  "Parsing Error",8   =>  "Notice",
               				16  =>  "Core Error",	32  =>  "Core Warning",
               				64  =>  "Compile Error",128 =>  "Compile Warning",
               				256 =>  "User Error",	512 =>  "User Warning",
               				1024=>  "User Notice"
               			  );

        //$user_errors = array(E_USER_ERROR, E_USER_WARNING);
		$mensagem = str_replace("\n","",$this->msgErro);
   		$msgLog = "Erro aconteceu no dia $dt.<q>
	 			O n�mero do erro � ".$this->nErro.".<q>
	 			O Tipo do Erro � ".$desErro[$this->nErro]."
   		   		O arquivo que acontece o erro � ".$this->nomeArquivo.".<q>
				A linha que acontece o erro � ".$this->numLinha.".<q><q>
				A mensagem do erro � $mensagem.<q>";
   		
   		// nome do arquivo 
   		$dirBase = dirname(__FILE__)."/logErros/";
   		$nome = $dirBase.$dt.".txt";
		clearstatcache();
		   		
		//gravando no arquivo de log
   		$this->grava($nome,$msgLog);
   		
   		//enviar somente um e-mail de aviso por dia que acontecer algum erro
   		if(!(file_exists($nome)))
   			$this->enviaEmail($msgLog);
	}
	
	/**
	* @return void
	* @param string $nome 		Nome do arquivo
	* @param string $msgLog		Mensagem de Log
	* @desc Grava no arquivo o erro gerado
	*/
	function grava($nome,$msgLog){
		$msgLog = str_replace("<q>","\n",$msgLog);
		$id = fopen($nome, "a");
		fwrite($id,$msgLog);
	}
	
	/**
	* @return void
	* @param string $msgLog		Mensagem de Log
	* @desc Envia o E-mail.
	*/
	function enviaEmail($msgLog){
		$msgLog = str_replace("<q>","<br>",$msgLog);
		mail("erro@servidor.com.br","Erro no Sistema",$msgLog,"from:....");
	}
   	
	/**
	* @return void
	* @desc Redireciona o usu�rio se necess�rio e poss�vel
	*/
	function fluxoNavegacao(){
		if($this->nErro == 256)
			header("location:erro.php".
					urlencode("Desculpe, o sistema gerou um erro inesperado 
					e sua opera��o n�o foi executada.<br>
					Este erro foi enviado ao(s) administrador(es) do sistema,
					em breve ser� corrigido, se necess�rio entre em contato
					com o setor respons�vel.")
				  );
	}	
}
?>