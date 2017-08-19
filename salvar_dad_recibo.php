<?php
	
	require_once 'conexao.php';
	
		$Num_recibo = trim(addslashes(strip_tags($_POST['NUM_RECIBO'])));
		$CPF_CNPJ = trim (addslashes(strip_tags($_POST['CPF_CNPJ'])));
		$Pagante =	trim(addslashes(strip_tags($_POST['PAGANTE'])));
		$Valor =	trim(addslashes(strip_tags($_POST['VALOR'])));
		$Referência =	trim(addslashes(strip_tags($_POST['REFERÊNCIA'])));
		$Nota_fiscal =	trim(addslashes(strip_tags($_POST['NOTA_FISCAL'])));
		
		$dados_recibo = " insert into dad_recib VALUES 
		('$Num_recibo','$CPF_CNPJ','$Pagante','$Valor','$Referência','$Nota_fiscal') ";
		$Result_recibo = mysql_query ($dados_recibo);

		if($Result_recibo == TRUE){
			ECHO "DADOS INSERIDOS";
		} ELSE {
			ECHO "DADOS NÃO INSERIDOS";
		}
?>