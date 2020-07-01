<?php
$numero1 =$_REQUEST["numero1"];
$numero2 =$_REQUEST["numero2"];

$subtrair = $numero1 - $numero2;

$retornoJson = array();
$retornoJson["operacao"] ="subtrair";
$retornoJson["numero1"] =$numero1;
$retornoJson["numero2"] =$numero2;
$retornoJson["resultado"] =$subtrair;

echo json_encode($retornoJson);

/*Professor eu não conseguir muito fazer todos os exercicios,mais eu tentei fazer todos
com o pouco que entende na aula,meu maior problema é não sabe como eu faço para funcionar no chrone pelo localhost */
