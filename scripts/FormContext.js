//Classes
 function FormContext(FormBase){
		this.form = FormBase;
		this.itens = new Array();
		this.vetErro = new Array();
		this.regras = new Array();
		this.listErro = true;
		this.erro = false;
		this.verMsg = true;
		this.campoErro = 0;
		
		this.setVerMsg = setVerMsg;
		this.getVerMsg = getVerMsg;
		this.setListErro = setListErro;
		this.getListErro = getListErro;
		this.getReport = getReport;
		this.getLen = getLen;
		this.addCampo = addCampo;
		this.defineCampos = defineCampos;
		this.verificaCPF = verificaCPF;
		this.setFocus = setFocus;
		this.mostraMensagem = mostraMensagem;
		this.validaForm = validaForm;
		this.limpaErro = limpaErro;
		this.addErro = addErro;
		this.iniciaErro = iniciaErro;
		this.addRegra = addRegra;
 }
	
	function Regra(regra, mensagem){
		this.regra = regra;
		this.mensagem = mensagem;
		this.setMensagem = setMensagem;
		this.getMensagem = getMensagem;
		this.getRegra = getRegra;
	}
	
	function Campo(campo, tipo, label, nulo, formObj){
	/*
	tipos : inteiro, moeda, data, texto
	*/
	
		this.campo = campo;
		this.tipo = tipo;
		this.label = label;
		this.nulo = nulo;
		this.objeto = formObj;
		this.mensagem = "";
	
		this.validaCampo = validaCampo;
		this.getCampo = getCampo;
		this.getTipo = getTipo;
		this.getLabel = getLabel;
		this.getNulo = getNulo;
		this.getMensagem = getMensagem;
		this.getValor = getValor;
		this.setMensagem = setMensagem;
		this.validaCampo = validaCampo;
	}

	function addRegra(regra, mensagem){
		this.regras[this.regras.length] = new Regra(regra, mensagem);
	}

	function getLen(){ return this.itens.length; }
	function setListErro(valor){ this.listErro = valor;	}
	function getListErro(){	return this.listErro; }
	
	function setVerMsg(valor){ this.verMsg = valor; }
	function getVerMsg(){ return this.verMsg; }
	
	function getReport(){
		msg = "Ocorreram os seguintes erros :\n";
		for(i=0; i< this.vetErro.length; i++){
			n = i+1;
			msg += n + " - " + this.vetErro[i];			
		}
		return msg;
	}
	
	function iniciaErro(campo){
		this.erro = true;
		this.campoErro = campo;
	}
	
	function addCampo(campo, label, tipo, nulo){
	      this.itens[this.getLen()] = new Campo(campo, tipo, label, nulo, this.form.elements[campo]);
    }
	
	function defineCampos(campos){
		vetCampos = campos.split(",");
		for(i=0; i<vetCampo.length; i++){
			this.addCampo(vetCampo[i], 'texto', '', false, vetCampo[i]);
		}
	}

	function validaForm(){
		this.limpaErro();
		for(n=0; n < this.getLen(); n++){
			campo = this.itens[n];
			if(!campo.validaCampo()){
				if(this.getListErro()){
					this.addErro(campo.getMensagem()+"\n");
					if(!this.erro){ this.iniciaErro(this.form.elements[campo.getCampo()])};
				}else{
					if(this.getVerMsg()){
						mostraMensagem(campo.getMensagem());
						setFocus(this.form.elements[campo.getCampo()]);
					}
					return false;
				}
			}else{
				if(!campo.getNulo()){
					valor = campo.getValor();
					valor = limpaString(valor," ");
					if(valor.length<1){
						if(this.getListErro()){
							this.addErro("Prenchimento do campo "+campo.getLabel()+" obrigatorio!"+"\n");
							if(!this.erro) this.iniciaErro(this.form.elements[campo.getCampo()]);
						}else{
							if(this.getVerMsg()){
								mostraMensagem("Prenchimento obrigatorio!");
								setFocus(this.form.elements[campo.getCampo()]);
							}
							return false;
						}
					}
				}
			}
		}
		for(i=0; i<this.regras.length; i++){
			Regra = this.regras[i];
			if(!eval(Regra.getRegra())){
				if(this.getListErro()){
					this.addErro(Regra.getMensagem()+"\n");
					if(!this.erro) this.iniciaErro(this.form.elements[0]);
				}else{
					if(this.getVerMsg()){
						mostraMensagem(Regra.getMensagem());
					}
					return false;
				}
			}
		}
		if(this.getListErro() && this.erro){
			if(this.getVerMsg()){
				mostraMensagem(this.getReport());
			}
			return false;
		}else{
			return true;
		}
	}

	
	function addErro(msg){
		this.vetErro[this.vetErro.length] = msg;
	}
	
	function limpaErro(){
		this.vetErro = new Array();
		this.erro = false;
		this.campoErro = 0;
	}
	
//M�todos da Classe Regra
	function getRegra(){
		return this.regra;
	}
//M�todos Classe Campo

	function validaCampo(){
		switch(this.getTipo()){
			case "numero":
				if(isNaN(this.getValor())){
					this.setMensagem('O campo '+this.getLabel()+' deve conter um numero valido!');
					return false;
				}
			break;
			case "moeda":
				if(!isMoeda(this.getValor())){
					this.setMensagem('O campo '+this.getLabel()+' deve conter um valor de moeda valido!');
					return false;
				}
			break;
			case "data":
				if(!isData(this.getValor())){
					this.setMensagem('O campo '+this.getLabel()+' deve conter uma data valida!');
					return false;
				}
			break;
			case "cpf":
				if(!verificaCPF(this.getValor())){
					this.setMensagem('O campo '+this.getLabel()+' deve conter um CPF valido!');
					return false;
				}
			break;
			default:
				return true;
			break
		}
		return true;
	}
	
	function getCampo(){ return this.campo; }
	function getTipo(){ return this.tipo; }
	function getLabel(){ return this.label; }
	function getNulo(){ return this.nulo; }
	function getMensagem(){ return this.mensagem; }
	function getValor(){ return this.objeto.value; }
	
	function setMensagem(mensagem){ this.mensagem = mensagem; }

//Fun��es de Formata��o

	function formataData(obj){
		// dd/mm/aaaa =>10 D�gitos
		var valor = obj.value;
		if(valor.length == 2) valor = valor + '/';
		if(valor.length == 5) valor = valor + '/';
		obj.value = valor;
	}
	
	function formataCpf(obj){
		//518.257.162-34 =>12 D�gitos
		var valor = obj.value;
		if(valor.length == 3) valor = valor + '.';
		if(valor.length == 7) valor = valor + '.';
		if(valor.length == 11) valor = valor + '-';
		obj.value = valor;
	}
	
	//Fun��es Gen�ricas
	
	function mostraMensagem(msg){	alert(msg);	}
	function isVazio(str){	return (str.length==0)?true:false;	}
	function setFocus(campo){	campo.focus();	}
	
	function space(num){
		str = "";
		for(i=0; i<num; i++){
			str = str + " ";
		}
		return str;
	}
	
	function limpaString(str, caracteres){
		for(i=0; i<caracteres.length; i++){
			while(str.indexOf(caracteres.charAt(i))>0) {str = str.replace(caracteres.charAt(i),""); }
		}
		return str;
	}
	
	function isData(Valor) {
	/* Fun��o de valida��o de data que utiliza express�o
	regular. Aceita qualquer data no formato dd/mm/aaaa ou
	dd/mm/aa */
		var Er = /^(?:(?:31(\/|-|\.)(?:0?[13578]|1[02]))\1|(?:(?:29|30)(\/|-|\.)(?:0?[1,3-9]|1[0-2])\2))(?:(?:1[6-9]|[2-9]\d)?\d{2})$|^(?:29(\/|-|\.)0?2\3(?:(?:(?:1[6-9]|[2-9]\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\d|2[0-8])(\/|-|\.)(?:(?:0?[1-9])|(?:1[0-2]))\4(?:(?:1[6-9]|[2-9]\d)?\d{2})$/;
		if (Er.test( Valor )){
			return true;
		}else{
			return false;
		}
	}
	
	function isMoeda(str) {
		str = limpaString(str,".,");
		if(isNaN(str)){
			return false;
		}else{
			return true;
		}
	}
	function verificaCPF (CPF) {
		if(CPF=='')
		 return true;
		if (CPF == "00000000000" || CPF == "11111111111" ||
			CPF == "22222222222" ||	CPF == "33333333333" || CPF == "44444444444" ||
			CPF == "55555555555" || CPF == "66666666666" || CPF == "77777777777" ||
			CPF == "88888888888" || CPF == "99999999999")
			return false;
		soma = 0;
			
		for (i=0; i < 9; i ++)
			soma += parseInt(CPF.charAt(i)) * (10 - i);
		resto = 11 - (soma % 11);
		if (resto == 10 || resto == 11)
			resto = 0;
		if (resto != parseInt(CPF.charAt(9)))
			return false;
		soma = 0;
		for (i = 0; i < 10; i ++)
			soma += parseInt(CPF.charAt(i)) * (11 - i);
		resto = 11 - (soma % 11);
		if (resto == 10 || resto == 11)
			resto = 0;
		if (resto != parseInt(CPF.charAt(10)))
			return false;
		return true;
	 }
	 

function DivideData(sData){
	aData = new Array();
	aData[0] = sData.substr(0,2);
	aData[1] = sData.substr(3,2);
	aData[2] = sData.substr(6,4);
	return aData;
}

function VerificaData(aData){
	if(aData[0]>31||aData[1]>12){
		return false;
	} else {
		return true;
	}
}

function ComparaData(Data1,Data2,i){
	if(i>=0){
		if(Data1[i]<Data2[i]){
			return false;//Data2 � maior que a data1
		} else if(Data1[i]==Data2[i]){
			return ComparaData(Data1,Data2,i-1);
		} else {
			return true;//Data1 � maior que a data2
		}
	} else {
		return true;//Data1 � igual a data2
	}
}
	 
/*	 
	function FormataMoeda(fld, milSep, decSep, e) {
		//onkeypress="return(FormataMoeda(this,'.',',',event));"
		var sep = 0;
		var key = '';
		var i = j = 0;
		var len = len2 = 0;
		var strCheck = '0123456789';
		var aux = aux2 = '';
		var whichCode = (window.Event) ? e.which : e.keyCode;
		if (whichCode == 13) return true;  // Enter
		key = String.fromCharCode(whichCode);  // Get key value from key code
		if (strCheck.indexOf(key) == -1) return false;  // Not a valid key
		len = fld.value.length;
		for(i = 0; i < len; i++)
				if ((fld.value.charAt(i) != '0') && (fld.value.charAt(i) != decSep)) break;
		aux = '';
		for(; i < len; i++){
			if (strCheck.indexOf(fld.value.charAt(i))!=-1) aux += fld.value.charAt(i);
		aux += key;
		len = aux.length;
		if (len == 0) fld.value = '';
		if (len == 1) fld.value = '0'+ decSep + '0' + aux;
		if (len == 2) fld.value = '0'+ decSep + aux;
		if (len > 2) {
		aux2 = '';
		for (j = 0, i = len - 3; i >= 0; i--) {
			if (j == 3) {
				aux2 += milSep;
				j = 0;
			}
			aux2 += aux.charAt(i);
			j++;
		}
		fld.value = '';
		len2 = aux2.length;
		for (i = len2 - 1; i >= 0; i--)
			fld.value += aux2.charAt(i);
			fld.value += decSep + aux.substr(len - 2, len);
		}
		return false;
}
*/