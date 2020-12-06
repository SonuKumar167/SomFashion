
<!DOCTYPE html>
<html>
<head>
  <title>Integration</title>
  <!-- <link rel="stylesheet" href="style.css"> -->
  <!-- <link rel="stylesheet" type="text/css" href="style.css"> -->
   <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body class='container'>
  <div class="header">
    <h3>Device Integration</h3>
  </div>
  <hr>
  <form class='form-inline'method="post" action="device_integration.php">
    <div class="form-group">
      <input type="text" name="devicecode" class='form-control' required placeholder="Enter Device Code">

    </div>
    &nbsp;
    <div class="form-group">
        <select name="dtype" id="dtype" required class='form-control'>
          <option>Choose Device Type</option>
          <option value="consumer">consumer</option>
          <option value="bulk">bulk</option>
          <option value="quality">quality</option>
        </select>
    </div>
    &nbsp;
    <div class="form-group">
      <input type="text" name="parse" class='form-control' require placeholder="Enter Parse Logic">
    </div>
    <div class="input-group">
      &nbsp;&nbsp;
      <button type="submit" class="btn btn-default" name="intg_submit">Save</button>&nbsp;
        <a href='#' type='button' class='btn btn-default' onClick="window.location.reload();">Cancle</a>
    </div>
    
  </form>
 <!-- <button class="btn btn-default" name="intg_clear" onClick="window.location.reload();">Cancle</button> -->
  
</br></br>

<?php
        error_reporting(0);     
  
  include_once("func.php");
             
                $module       = "DeviceIntegration";
    $command      = "GetData";
    $responseDataArray          = exchangeJson($module,$command,$commandData);
                $resultImei           = $responseDataArray['responseDataArr'];
                // echo "<pre>"; print_r($resultImei); echo "</pre>";
                //
                ?>
                 <table class="table table-hover">
                 <thead>
                   <tr>
                   <th>ID</th>
                     <th>Device Code</th>
                     <th>Device Type</th>
                     <th>Parse Logic</th>
                   </tr>
                 </thead>
                 <tbody>
                 <?php $n=0; while($n<count($resultImei)){ ?>
                   <tr>
                     <td><?php echo $n+1 ; ?></td>
                     <td><?php echo $resultImei[$n]['device_code'] ;?></td>
                     <td><?php echo $resultImei[$n]['device_type'] ; ?></td>
                     <td><?php echo $resultImei[$n]['parse_logic'] ; ?></td>
                   </tr>
                   <?php  $n++; } ?>
                 </tbody>
               </table>