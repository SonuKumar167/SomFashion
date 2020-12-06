
<?php 
  // error_reporting(0);     
  
  include_once("func.php");
  foreach($_REQUEST as $key=>$value)
   {
    $$key=$value; 
   }      
    $commandData['devicecode'] = $devicecode; 
    $commandData['dtype'] = $dtype; 
     $commandData['parse'] = $parse;         
    $module       = "DeviceIntegration";
    $command      = "AddDevice";
    $responseDataArray    = exchangeJson($module,$command,$commandData);
     // print_r($responseDataArray); 
    $resultImei           = $responseDataArray['responseDataArr'];
    header('location:index.php');
  

  ?>