<!DOCTYPE html>
<html>
<head>
    <title>COVID LIVE TRACKER</title>
    <?php include 'links.php'; ?>
    <?php include 'style.php'; ?>
</head>
<body onload="fetch()">
<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#helplineno">Helpline-No.</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">symptons</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventionid">prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#indiacoronaliveid">India-CoronaLive</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">contact</a>
      </li>
    </ul>
  </div>
  <!---******<a href = "page2.html"> Page 2 </a>***--->
</nav>
<div class="main_header">
<div class="row w-100 h-100">
<div class="col-lg-5 col-md -5 col-12 order-lg-1 order-2">
<div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
<img src = "corona-4942823_1280.png" width="450" height="250">
</div>
</div>

<div class="col-lg-7 col-md -7 col-12 order-lg-2 order-1">
<div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
<h1>Let's Stay Safe & Fight Together Against Cor<span class="corona_rot"><img src = "coronavirus.png" width="60" height="60"></span>na Virus</h1>
</div>
</div>
</div>
</div>

<!--///////////////COVID STATS///////////-->
<header>
<div class="logo">
        <img src="logo.png" alt="" />
        <p>COVID-19<br />STATS</p>
      </div>
      
    </header>

    <main>
      <div class="stats">
        <div class="latest-report">
          <div class="country">
            <div class="name">Loading...</div>
            <div class="change-country">change</div>
            <div class="search-country hide">
              <div class="search-box">
                <input
                  type="text"
                  id="search-input"
                  placeholder="Search Country..."
                />
                <img class="close" src="close.svg" alt="" />
              </div>
              <div class="country-list"></div>
            </div>
          </div>
          <div class="total-cases">
            <div class="title">Total Cases</div>
            <div class="value">0</div>
            <div class="new-value">+0</div>
          </div>
          <div class="recovered">
            <div class="title">Recovered</div>
            <div class="value">0</div>
            <div class="new-value">+0</div>
          </div>
          <div class="deaths">
            <div class="title">Deaths</div>
            <div class="value">0</div>
            <div class="new-value">+0</div>
          </div>
        </div>
        <div class="chart">
          <canvas id="axes_line_chart"></canvas>
        </div>
      </div>
    </main>

    
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"
      integrity="sha256-R4pqcOYV8lt7snxMQO/HSbVCFRPMdrhAFMH+vr9giYI="
      crossorigin="anonymous"
    ></script>
    <script src="countries.js"></script>
    <script src="app.js"></script>

<!--*****************Corona latest Updates****************-->

<section class="corona_update container-fluid">
<div class="mb-5" id = "indiacoronaliveid">
<div class="table-responsive">
<div class="col-lg-12 col-md-8 col-6 mt-5">
<figure class="text-center">
<a href = "index2.php"><h3 class="text-center text -uppercase">FOR COVID-19 LIVE UPDATES CLICK BELOW</h3> </a>
</div>
</figure>
</div>
</div>
</section> 


<!--///////////////HELPLINE NUMBERS///////////-->


<section class="corona_helpline_no container-fluid">
<div class="mb-5" id = "helplineno">
<div class="table-responsive">
<div class="col-lg-12 col-md-8 col-6 mt-5">
<figure class="text-center">

<a href = "coronvavirushelplinenumber.pdf"><h3 class="text-center text -uppercase">FOR EMERGENCY HELPLINE-NUMBERS CLICK BELOW</h3> </a>

</div>
</figure>
</div>
</div>
</section> 



<!-- *********************About section*****************-->
<section class="About_section">
<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
<div class="section_header text-center mb-5 mt-4">
<h1>About COVID-19</h1>
</div>

<div class="row pt-5">
<div class="col-lg-5 col-md-6 col-12 ml-5 about_res">
<span class="corona"><img src="virus-4930122_1920.png" class="img-fluid"></span>
</div>

<div class="col-lg-6 col-md-6 col-12">
<h2>What is COVID-19(Corona-Virus)</h2>
<p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness</p>
<p>The best way to prevent and slow down transmission is to be well informed about the COVID-19 virus, the disease it causes and how it spreads. Protect yourself and others from infection by washing your hands or using an alcohol based rub frequently and not touching your face. 

The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).</p>
</div>
</div>
</div>


 <!--///////////////corona symptons///////////-->

 <div class="container-fluid pt-5 pb-5" id="sympid">
<div class="section_header text-center mb-5 mt-4">
<h1>Coronavirus symptons</h1>
</div>

<div class="container">
<div class="row">
<div class="col-lg-12 col-md-8 col-6 mt-5">
<figure class="text-center">
<img src="symptons.png" class="img-fluid" width="600" height="650">
</figure>
</div>

<div class="col-lg-12 col-md-8 col-6 mt-5">
<figure class="text-center">
<img src="symptons2.png" class="img-fluid" width="650" height="700">
</figure>
</div>
</div>
</div>
</div>
</section>

<!--///////////////PREVENTION///////////-->
<section class="Prevention">
<div class="container-fluid pt-5 pb-5" id="preventionid">
<div class="section_header text-center mb-5 mt-4">
<h1>Prevention</h1>
</div>

<div class="container">
<div class="row">
<div class="col-lg-12 col-md-8 col-12 mt-5">
<figure class="text-center">
<img src="prevention3.png" class="img-fluid" width="600" height="650">
</figure>
</div>

<div class="col-lg-12 col-md-8 col-6 mt-5">
<figure class="text-center">
<img src="prevention2.png" class="img-fluid" width="600" height="600">
</figure>
</div>
</div>
</div>
</div>
</section>

<!--///////////////Contact us///////////-->
<section class="Contact us">
<div class="container-fluid pt-5 pb-5" id="contactid">
<div class="section_header text-center mb-5 mt-4">
<h1>Contact us</h1>
</div>
</div>

<div class="container">
<div class = "row">
<div class="col-lg-8 offset-lg-2 col-12">
<form action="" method="POST">
  <div class="form-group">
    <label>Patient-name</label>
    <input type="text" class="form-control" name="username" placeholder="name"autocomplete="off">
  </div>

  <div class="form-group">
    <label>Email</label>
    <input type="email" class="form-control" name="email" placeholder="email" required autocomplete="off" >
  </div>

  <div class="form-group">
    <label>Mobile no.</label>
    <input type="number" class="form-control" name="mobile" placeholder="mobile" required autocomplete="off">
  </div>

<div class="form-group">
<label>Select Symptons</label><br>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id="customcheckbox1" name = "coronasym[]" value="cold">
<label class="custom-control-label" for="customcheckbox1">Cold</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id="customcheckbox2" name = "coronasym[]" value="Dry Cough">
<label class="custom-control-label" for="customcheckbox2">Dry cough</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id="customcheckbox3" name = "coronasym[]" value="Shortness of breath">
<label class="custom-control-label" for="customcheckbox3">Shortness of breath</label>
</div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
<input type="checkbox" class="custom-control-input" id="customcheckbox4" name = "coronasym[]" value="Sneezing ">
<label class="custom-control-label" for="customcheckbox4">Sneezing</label>
</div>
 
 
  <div class="form-group">
    <label for="exampleformControlTextarea1"></label>Describe more about yourself:
    <textarea class="form-control" id="exampleFormControlTextarea1" name = "message" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>

</div>
</div>
</div>
</div>


<?php
include 'dbcon.php';

if(isset($_POST['submit'])){
  $username = $_POST['username'];
  $email = $_POST['email'];
  $mobile = $_POST['mobile'];
  $symp = $_POST['coronasym'];
  $message = $_POST['message'];

$chk = "";

foreach($symp as $chk1){
  $chk .= $chk1.",";
}
$insertquery = " insert into coronacase (username, email, mobile, symp, message) values('$username', '$email', '$mobile', '$chk', '$message' ) ";
$query = mysqli_query($con, $insertquery);

if($query){ 
  ?>
  <script>
  alert("inserted successfully");
  </script>
  <?php
} else{
  ?>
  <script>
  alert("No insertion");
  </script>
  <?php
}
}
?>


<!--////////////////////////Footer//////////////-->



<footer class="mt-5">
<div class="footer_style text-white text-center container-fluid">
<p>copyright by Kanishk & Devashish</p>
</div>
</footer>


</body>
</html> 



