<?php
$numero1 =$_REQUEST["numero1"];


if($numero1 >=0 ){
    $negativo = $numero1;
}else{
    if($numero1 < 0){
        $positivo = $numero1;
    }
    
}
$retornoJson = array();

$retornoJson["numero1"] =$numero1;
$retornoJson["resultado"] =$positivo;
$retornoJson["resultado"] =$negativo;
  

echo json_encode($retornoJson);


