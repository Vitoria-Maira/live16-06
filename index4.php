<?php
$numero1 =$_REQUEST["numero1"];
$numero2 =$_REQUEST["numero2"];


$divisor = $numero1 / $numero2 ;
$divisor= >0

$retornoJson = array();
$retornoJson["operacao"] ="divisor";
$retornoJson["numero1"] =$numero1;
$retornoJson["numero2"] =$numero2;
$retornoJson["resultado"] =$divisor;

echo json_encode($retornoJson);