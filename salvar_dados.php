<?php
	require_once 'conexao.php';
	
		$CPF_CNPJ = trim(addslashes(strip_tags($_POST['CPF_CNPJ'])));
		$Nome = trim(addslashes(strip_tags($_POST['NOME'])));
		$CEP = trim(addslashes(strip_tags($_POST['CEP'])));
		$Endereço = trim(addslashes(strip_tags($_POST ['ENDEREÇO'])));
		$Numero = trim(addslashes(strip_tags($_POST ['NUMERO'])));
		$Complemento = trim(addslashes(strip_tags($_POST ['COMPLEMENTO'])));
		$Cidade = trim(addslashes(strip_tags($_POST ['CIDADE'])));
		$UF = trim(addslashes(strip_tags($_POST ['ESTADO'])));
		$Telefone = trim(addslashes(strip_tags($_POST ['TELEFONE'])));
		$E_mail = trim(addslashes(strip_tags($_POST ['E_MAIL'])));
	
		$dado_Cliente = "insert into cliente VALUES ('$CPF_CNPJ', '$Nome', '$CEP', '$Endereço', '$Numero', '$Complemento', '$Cidade', '$UF', '$Telefone', '$E_mail')";
		$resultado = mysql_query($dado_Cliente);
	
	if($resultado == TRUE){
		ECHO "DADOS INSERIDOS";
	} ELSE {
		ECHO "DADOS NÃO INSERIDOS";
		
		}
?>