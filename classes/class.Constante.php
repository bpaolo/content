<?php

class Constante{

	var $valores;

	function Constante(){}

	function setValores(){
	//todos os valores nao sao acentuados e sempre em minusculo
		$valores = Array();
		//--------------------------------------------------------------------
//		$valores[''][''] = ;
		return $valores;
	}
	
	function getValor($entidade,$nome){
		$valores = Constante::setValores();
		return $valores[$entidade][$nome];
	}
	
	function getLabel($entidade,$valor){
		$valores = Constante::setValores();
		$res = array_keys($valores[$entidade],$valor);
		return $res[0];
	}

	function getMaxRegistrosPag(){
		return 15;
	}
}
?>