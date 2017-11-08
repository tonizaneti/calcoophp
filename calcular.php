<?php
	require_once 'Calculadora.php';

	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacao = $_POST['operacao'];

	$calculadora = new Calculadora();

	//Setar Valores	
	$calculadora->setNumero1( $numero1);
	$calculadora->setNumero2( $numero2);

	if($operacao == "somar")
	{
		$calculadora->somar();		
	}
	if($operacao == "subtrair")
	{
		$calculadora->subtrair();		
	}
	if($operacao == "multiplicar")
	{
		$calculadora->multiplicar();		
	}
	if($operacao == "dividir")
	{
		$calculadora->dividir();		
	}

	echo $calculadora->getTotal();



?>