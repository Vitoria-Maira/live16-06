<?php
$numero1 =$_REQUEST["numero1"];
$numero2 =$_REQUEST["numero2"];




if($numero1 > $numero2){
    $maior=$numero1;
}else{
    if($numero1 < $numero2){
        $menor=$numero1;
    }
    
}
$retornoJson = array();
$retornoJson["numero1"] =$numero1;
$retornoJson["numero2"] =$numero2;
$retornoJson["resultado"] =$maior;
  

echo json_encode($retornoJson);

    