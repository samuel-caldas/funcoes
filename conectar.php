﻿<?php
#Funções de Banco de Dados
	//Conect&&select
	function conectar($servidor,$usuario,$senha,$banco){$conexao=mysql_connect($servidor,$usuario,$senha) or die(myErro("Falha na Conexão com o Banco de Dados")); mysql_select_db($banco,$conexao) or die(myErro("Falha ao selecionar a DB - ".$banco));}
	// insere
	function inserir($tabela,$onde,$valores,$retorno){if ($onde!=""){$onde="(".$onde.")";};$resultado=mysql_query("INSERT INTO ".$tabela." ".$onde." VALUES (".$valores.")") or die (myErro("Falha na inserção dos dados!"));if($resultado){sucesso($retorno);}};
	// Deleta
	function deletar($tabela,$onde,$retorno){$resultado= mysql_query("DELETE FROM ".$tabela." WHERE ".$onde) or die (myErro("Falha ao deletar os dados!"));};
	//seleciona
	function selecionar($oq, $tabela, $onde, $ordenar){if ($ordenar!=""){$add=" order by ".$ordenar;};$sql=MYSQL_QUERY("SELECT ".$oq." FROM ".$tabela." WHERE ".$onde.$add) or die(myErro("Falha ao selecionar os dados!"));$j=1;while ($linha=mysql_fetch_row($sql)){$coluna=contar($linha);for ($i = 0; $i<$coluna; $i++){$resultado[$j][$i]=$coluna[$i];};$j++;};$resultado[0][0]=contar($resultado);$resultado[0][0]=$coluna;return $resultado;};
	//Atualisa
	function update($tabela,$valores,$onde){$valores=implode(', ', $valores);$onde=implode(', ', $onde);$inserir = "UPDATE ".$tabela." SET ".$valores." WHERE ".$onde;$resultado= mysql_query($inserir) or die (myErro("Falha ao atualizar os dados!"));};
	#Conectar#
	#conectar('localhost', 'ednantur', 'ed123', 'ednantur'); #em ordem (servidor, usuario, senha e banco de dados)
	#conectar('dbmy0038.whservidor.com', 'corregonov1', 'corregonovo', 'corregonov1');
	#conectar('localhost', 'dados_criarte', 'dados', '');
	#conectar('localhost', 'root', '', 'local');
	#Imagem no Banco de Dados#
	function dbimg($id, $caminho, $capa){
		$valotres="'', ".$id.", ".$caminho.", ".$capa;
		inserir("imagens","",$valores,"");
	};
	#login#
?>