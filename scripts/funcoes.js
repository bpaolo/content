// ============= FUN��O PARA SUBMETER OS DADOS DA TELA ADM ===================	
	function submitForm(form,url,confirmar){
		form.action = url;
		vetItens = form.rdOpcao;
		bolChecked = false;
		for(i=0; i<vetItens.length; i++){
			if(vetItens[i].checked){
				bolChecked = true;
				break;
			}
		}
		
		if(bolChecked || (form.rdOpcao.checked)){
			if(confirmar){
				if(confirm('Deseja realmente executar a operacao?'))
					form.submit();
			}else{
				form.submit();
			}
		}else{
			alert('Escolha um Item!');
		}
	}
// ============= FUN��O PARA ABRIR JANELAS ===================

function abrirJanela(url){
	window.open(url, 'janela', 'toolbar=no, location=no, status=no, menubar=no, scrollbars=no, resizable=no, width=750, height=300, left=20, top=20, screenX=20, screenY=20');
}

// ============= FUN��O PARA PASSAR VALORES PARA UMA P�GINA ===================

function passaValoresfrmAgendanavio(valor1, valor2){
	window.opener.document.frmAgendanavio.txtVeiculoTransporte.value 	= valor1;
	window.opener.document.frmAgendanavio.txtCodVeiculoTransporte.value	= valor2;
	window.opener.focus();
	close();
}



// ============= FUN��O PARA PASSAR VALORES PARA UMA P�GINA ===================

function passaValores(oForm,array1,array2){
	for(i=0;i<array1.length;i++){
       window.opener.document[oForm].elements[array1[i]].value	= array2[i];
    }
	window.opener.focus();
	close();
}

// ============= FUN��O PARA FECHAR JANELAS ===================

function fechaJanela(){
	window.close();
}