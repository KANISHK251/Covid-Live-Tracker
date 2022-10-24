<!DOCTYPE html>
<html>
<head>
    <title>COVID LIVE TRACKER</title>
    <?php include 'links.php'; ?>
    <?php include 'style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg-center nav_style p-3">
  <a class="navbar-brand pr-5"> </a>
  <h2 class="text-center text-uppercase"> COVID-19 LIVE UPDATES OF INDIA</h2> </a>

  <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
  </button>
</nav>
<a href = "index.php"><h4 class="text-center text-uppercase"> Home Page</h4> </a>


<!--*****************Corona latest Updates****************-->

<section class="corona_update container-fluid">
<div class="mb-5" id = "indiacoronaliveid">

<div class="table-responsive">

<table class="table table bordered table-striped text-center">
<tr>
<th class = "text-capitalize" >Lastupdatedtime</th>
<th class = "text-capitalize" >state</th>
<th class = "text-capitalize">confirmed</th>
<th class = "text-capitalize">active</th>
<th class = "text-capitalize">recovered</th>
<th class = "text-capitalize">deaths</th>
</tr>

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data,true);

//echo "<pre>";
//print_r($coronalive);
//echo "</pre>";
$statescount = count($coranalive['statewise']);
$i=1;
while($i < $statescount){

    ?>

    <tr>
    <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime']?></td>
    <td><?php echo $coranalive['statewise'][$i]['state']?></td>
    <td><?php echo $coranalive['statewise'][$i]['confirmed']?></td>
    <td><?php echo $coranalive['statewise'][$i]['active']?></td>
    <td><?php echo $coranalive['statewise'][$i]['recovered']?></td>
    <td><?php echo $coranalive['statewise'][$i]['deaths']?></td>
</tr>
  <!--echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['deaths'] . "<br>"  ; ------>
<?php
  $i++;
}
?>
</table>
</div>
</div>
</section>