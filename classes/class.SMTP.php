<?
class SMTP{
	
	var $conexao;

	function SMTP(){
	}
	
	function enviaEmail($dominio,$ip,$remetente,$receptor,$assunto,$mensagem){
		$dados = 	"From: $remetente\r\n". 
					"To: $receptor\r\n".
					"Subject: $assunto\r\n". 
					"Reply-To: $remetente\r\n".
					"Content-Type: text/html; charset=iso-8859-15\r\n".
					"\r\n".
					"<html><body>$mensagem</body></html>\r\n";
					//"$mensagem\r\n";
		$codigo = $this->criaConexao($dominio);
		if($codigo != "220")
			return $this->erro($codigo);
		$codigo = $this->helo($ip);
		if($codigo != "250")
			return $this->erro($codigo);
		return $this->cabecalho($remetente,$receptor,$dados);
	}
	
	function criaConexao($dominio){
		$this->conexao = @socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
		@socket_connect($this->conexao,$dominio,25); 
		return $this->getCodigo();
	}
	
	function helo($ip){
		@socket_write($this->conexao,"HELO $ip\r\n");
		return $this->getCodigo();
	}
	
	function cabecalho($remetente,$receptor,$dados){
		$codigo = $this->cabMAIL($remetente);
		if($codigo != "250")
			return $this->erro($codigo);
		$codigo = $this->cabRCPT($receptor);
		if(($codigo != "250")&&($codigo != "251"))
			return $this->erro($codigo);
		$codigo = $this->cabDATA($dados);
		if($codigo != "250")
			return $this->erro($codigo);
		$codigo = $this->quit();
		if($codigo != "221")
			return $this->erro($codigo);
		$codigo = $this->close();
		return "O E-mail foi enviado com sucesso!";
	}
	
	function cabMAIL($remetente){
		@socket_write($this->conexao,"MAIL FROM:<$remetente>\r\n");
		return $this->getCodigo();
	}
	
	function cabRCPT($receptor){
		@socket_write($this->conexao,"RCPT TO:<$receptor>\r\n");
		return $this->getCodigo();
	}
	
	function cabDATA($dados){
		@socket_write($this->conexao,"DATA\r\n");
		$this->getCodigo();
		@socket_write($this->conexao,$dados."\r\n.\r\n");
		return $this->getCodigo();
	}
	
	function quit(){
		@socket_write($this->conexao,"QUIT\r\n");
		return $this->getCodigo();
	}
	
	
	function close(){
		@socket_close($this->conexao);
	}
	
	function getCodigo(){
		$linha = @socket_read($this->conexao,512);
		$palavras = explode(" ",$linha);
		return $palavras[0];
	}
	
	function erro($codigo){
		switch ($codigo){
			case 211: 
				return "System status, or system help reply";
         	case 214:  
				return "Help message";
         	case 220:  
				return "Service ready";
	        case 221:  
				return "Service closing transmission channel";
    	   	case 250:  
				return "Requested mail action okay, completed";
         	case 251:  
				return "User not local; will forward to <forward-path>";
         	case 354:  
				return "Start mail input; end with <CRLF>.<CRLF>";
         	case 421:  
				return "Service not available, closing transmission channel";
         	case 450:  
				return "Requested mail action not taken: mailbox unavailable";
         	case 451:  
				return "Requested action aborted: local error in processing";
         	case 452:  
				return "Requested action not taken: insufficient system storage";
         	case 500:  
				return "Syntax error, command unrecognized";
         	case 501:  
				return "Syntax error in parameters or arguments";
         	case 502:  
				return "Command not implemented";
         	case 503:  
				return "Bad sequence of commands";
         	case 504:  
				return "Command parameter not implemented";
         	case 550:  
				return "Requested action not taken: mailbox unavailable";
         	case 551:  
				return "User not local; please try <forward-path>";
         	case 552:  
				return "Requested mail action aborted: exceeded storage allocation";
         	case 553:  
				return "Requested action not taken: mailbox name not allowed";
         	case 554:  
				return "Transaction failed";
			default:
				return "O Serviço falhou";
		}
		
		
	}
	
}

?>