<?php
		
	$host = 'localhost';
	$usuario ='root';
	$senha ='';
	$database ='recibo';

	 $conexao = mysql_connect($host, $usuario,$senha);
			
		$selecao = mysql_select_db($database, $conexao);

		if ($selecao == TRUE){
		echo "conexão conectada";
		}
?>
