<?php #Diversos#
	//conta array
	function contar($array){return count($array);};
#Funções de navegação
	//Historico
	function historico($go){echo "<script>history.go(".$go.");</script>";}
	//Redireciona
	function redirecionar($pagina){echo"<meta http-equiv='refresh' content='0;URL=".$pagina."' />";}
	//Alerta
	function alerta($msg){echo "<script>alert('".$msg."');</script>";}
	//Eerro
	function myErro($erro){alerta($erro);historico("-1");}
	//Sucesso
	function sucesso($pagina){alerta("Sucesso!");historico("-1");}
?>