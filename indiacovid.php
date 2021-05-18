<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include 'link/links.php'; ?>
     <?php include 'css/style.php'; ?>
    </head>
    <body onload="fetch()">
        
      <nav class="navbar navbar-expand-lg nav_style p-3 ">
  <a class="navbar-brand  pl-5" href="#">COVID-19 LIVE TRACKER</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#indaicovid.php">India Liveupdate</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#worldid">World Liveupdates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">about</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symid">symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">preventions</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#disid">Distribution Model</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
      
      
    </ul>

  </div>
</nav>
<!--*********************INDIALIVE UPDATE***********************8*-->
<section class="worldupdate container-fluid">
  <div class="mb-3">
    <h3 class="text text-center">INDIA LIVE UPDATE OF COVID-19</h3>
</div>
<div class="table-responsive">
  <table class=" table table-bordered table-striped text-center">
    <tr>
      <th>Last update</th>
      <th>State</th>
      <th>Confirmed</th>
      <th>Active</th>
       <th>Recovered</th>
      <th>Deaths</th>
      
    </tr>

<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);

 

$i=1;
while($i < $statescount){
?><tr>
  <td> <?php echo $coranalive['statewise'][$i]['lastupdatedtime'] 
  ?></td>
   <td> <?php echo $coranalive['statewise'][$i]['state'] ?></td>
   <td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
   <td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
   <td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
  <td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
</tr>

<!--  echo $coranalive['statewise'][$i]['lastupdatedtime'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['state'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['confirmed'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['active'] . "<br>"  ;
  echo $coranalive['statewise'][$i]['recovered'] . "<br>"  ;
  c . "<br>"  ; -->

<?php
  $i++;
}


?>


  </table>
</div>


</section>





<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="mybut"></i>
  
</div>

<!--*************fotter*****************-->

<footer class="mt-5">
  <div class="footer_style text-white text-center container-fluid">
    <p> Copyright © by IT DEPARTMENT,AITR Indore</p>
  </div>
</footer>


<script type="text/javascript">
 
 mybutton = document.getElementById("mybut");
window.onscroll = function() {scrollFunction()};
function scrollFunction(){
  if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
  {
mybutton.style.display= "block";
  }else {
mybutton.style.display= "none";

  }
} 

function topFunction(){
document.body.scrollTop=0;
document.documentElement.scrollTop=0;
}



</script>


</body>
</html>