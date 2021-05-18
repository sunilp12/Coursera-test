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
        <a class="nav-link" href="#indid">India Liveupdate</a>
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
        <a class="nav-link" href="#preventid">WHO Guidline's</a>
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

<div class="main">
  <div class="row w-100 h-100s">
<div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
  <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
    <img src="images/unity.jpg" width="300" height="300">
  </div>
</div>
<div class="col-lg-5 col-md-7 col-12 order-lg-2 order-1">
  <div class="rigthside w-100 h-100 d-flex justify-content-center align-items-center">
  <h1>Live Dashboard of C<span class="virusrot"> <img src="images/virus1.jfif" width="100" height="50"></span>VID-19 and Vaccine Model</h1>
  </div>
</div>
</div>
</div>      


<!--*********************INDIALIVE UPDATE***********************8*-->
<section class="worldupdate container-fluid" id="indid">
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






<!--*********************WORLDLIVE UPDATE***********************8*-->

<section class="worldupdate container-fluid">
  <div class="mb-3">
    <h3 class="text text-center">WORLD LIVE UPDATE OF COVID-19</h3>
</div>
<div class="table-responsive">
  <table class=" table table-bordered table-striped text-center" id="worldid">
    <tr>
      <th>Country</th>
      <th>TotalConfirmed</th>
      <th>TotalRecovered</th>
      <th>TotalDeaths</th>
       <th>NewConfirmed</th>
      <th>NewRecovered</th>
      <th>NewDeaths</th>
    </tr>


  </table>
</div>


</section>





<!--*********************about************************-->






<div class="container-fluid sub_section pt-5 pb-5" id="aboutid">
  <div class="section text-center mb-5 mt-4">
    <h1> ABOUT COVID-19</h1>
  </div>
  <center>
<div class="row pt-5"
    <div class="col-lg-5 col-md-6 col-12 ml-5">
         <img src="images/coronaim.jpg" width="700" height="500" class="img-fluid">
    </div>

<div class="col-lg-6 col-md-6 col-12 ">
<h2>WHAT IS COVID-19(CORONA VIRUS)?</h2>
<p3>The coronavirus family causes illnesses ranging from the common cold to 
more severe diseases such as severe acute respiratory syndrome (SARS) 
and Middle East respiratory syndrome (MERS), according to the WHO.
They circulate in animals and some can be transmitted between animals and humans. 
Several coronaviruses are circulating in animals that have not yet infected humans.
The new coronavirus, the seventh known to affect humans, has been named COVID-19.</p3>
        </div>
      </center>
   </div>
</div>






<!--******symptoms*****-->
<div class="container-fluid  pt-5 pb-5" id="symid">
  <div class="section text-center mb-5 mt-4">
    <h1> COVID-19 SYMPTOMS</h1>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-4 col-md-4 col-12 ">
      <figure class="text-center">
      <img src="images/cough1.jfif" class="img-fluid" width="120 height="120">
    <figcaption>COUGH</figcaption>
    </figure>
    </div>
   
    <div class="col-lg-4 col-md-4 col-12 ">
      <figure class="text-center">
      <img src="images/cold.jfif" class="img-fluid" width="120 height="120">
    <figcaption>COLD</figcaption>
    </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <figure class="text-center">
      <img src="images/breathing.jfif" class="img-fluid" width="120 height="120">
    <figcaption>BREATHING</figcaption>
    </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <figure class="text-center">
      <img src="images/fever.jfif" class="img-fluid" width="120 height="120">
    <figcaption>FEVER</figcaption>
    </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <figure class="text-center">
      <img src="images/tire.png" class="img-fluid" width="120 height="50">
    <figcaption>TIREDNESS</figcaption>
    </figure>
    </div>
    <div class="col-lg-4 col-md-4 col-12 ">
      <figure class="text-center">
      <img src="images/noisi.jfif" class="img-fluid" width="120 height="120">
    <figcaption>NOISI</figcaption>
    </figure>
    </div>
    
  </div>
</div>
<!--******prevention*****-->
<div class="container-fluid sub_section pt-5 pb-5" id="preventid">
  <div class="section text-center mb-5 mt-4">
    <h1> PREVENTION STEPS OF COVID-19</h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
      <img src="images/hand.jfif" class="img-fluid" width="90 height="90">
    </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Wash your hands regularly for 20 sec with soop and water or alcohol-based hand rub</p>
    </div>  
    </div>
  </div>

  <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
      <img src="images/mask.png" class="img-fluid" width="90 height="90">
    </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Clean your hands before you put your mask on, as well as before and after you take it off.
Make sure it covers both your nose, mouth and chin.</p>
    </div>  
    </div>
  </div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
      <img src="images/fever1.jfif" class="img-fluid" width="90 height="90">
    </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>if you have fever,cough and difficulty breathing,seek medical care early</p>
    </div>  
    </div>
  </div>
  <div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
      <img src="images/contact.jfif" class="img-fluid" width="90 height="90">
    </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Avoid touching your eyes, nose and mouth.
Limit social gatherings and time spent in crowded places.
Avoid close contact with someone who is sick.
Clean and disinfect frequently touched objects and surfaces.</p>
    </div>  
    </div>
  </div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
      <img src="images/home.jfif" class="img-fluid" width="90 height="90">
    </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Being in a group or gathering makes it more likely that you’ll be in close contact with someone.
This includes avoiding all religious places of worship, as you may have to sit or stand too close to another congregant. It also includes not congregating at parks or beaches.stay home stay safe</p>
    </div>  
    </div>
  </div>
<div class="col-lg-4 col-md-4 col-12 mt-5">
        <div class="row">
          <div class="col-lg-4 col-md-4 col-12">
           <figure class="text-center">
      <img src="images/news.jfif" class="img-fluid" width="90 height="90">
    </figure>
      </div>
      <div class="col-lg-8 col-md-8 col-12">
        <p>Stay informed by watching news and follow the recommended practices</p>
    </div>  
    </div>
  </div>




<!--******CONTACT *****-->
<div class="container-fluid  pt-5 pb-5" id="contactid">
  <div class="section text-center mb-5 mt-4">
    <h1> CONTACT US </h1>
  </div>
<div class="container">
  <div class="row">
    <div class="col-lg-8 offset-lg-2 col-12">
      <form action="" method="POST">



        <div class="form-group">
    <label >username</label>
    <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
  </div>
  <div class="form-group">
    <label >Email.</label>
    <input type="Email" class="form-control" name="email" placeholder="name@example.com" autocomplete="off" required>
  </div>


  <div class="form-group">
    <label >Mobile</label>
    <input type="number" class="form-control" name="mobile" placeholder="Mobile" required autocomplete="off">
  </div>

   <div class="form-group">
    <label >Select Symptoms</label> <br>





  <div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox"  id="customcheckbox1" name="coronasym[]" value="cold">
    <label  for="customcheckbox1">cold</label>
  </div>
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox"  id="customcheckbox2" name="coronasym[]" value="fever">
    <label  for="customcheckbox2">fever</label>
  </div>

<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox"  id="customcheckbox3" name="coronasym[]" value="breath">
    <label  for="customcheckbox3">difficult in breath</label>
  </div>
  
  
<div class="custom-control custom-checkbox custom-control-inline text-capitalize">
    <input type="checkbox"  id="customcheckbox4" name="coronasym[]" value="tired">
    <label  for="customcheckbox4">weak feeling</label>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="msg"></textarea>
     </div>
<button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>
      </div>
   </div>
 </div>
<!--*******************8top cursor*************8-->
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

function fetch(){
  $.get("https://api.covid19api.com/summary",
    function(data){
              //console.log(data['Countries'].length)
                var worldid=document.getElementById('worldid');
                for(var i=1;i<(data['Countries'].length); i++){

                  var x=worldid.insertRow();

                  x.insertCell(0);

                  worldid.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                  worldid.rows[i].cells[0].style.background='#7a4a91';
                  worldid.rows[i].cells[0].style.color='#fff';
                  

                x.insertCell(1);     
                 worldid.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];              
                  worldid.rows[i].cells[1].style.background='#4bb7d8';
                
                x.insertCell(2);     
                 worldid.rows[i].cells[2].innerHTML=data['Countries'][i-1]['TotalRecovered'];              
                  worldid.rows[i].cells[2].style.background='#4bb7d8';

                x.insertCell(3);     
                 worldid.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];              
                  worldid.rows[i].cells[3].style.background='#f36e23';
                

                x.insertCell(4);     
                 worldid.rows[i].cells[4].innerHTML=data['Countries'][i-1]['NewConfirmed'];              
                  worldid.rows[i].cells[4].style.background='#4bb7d8';
                

                x.insertCell(5);     
                 worldid.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewRecovered'];                                worldid.rows[i].cells[5].style.background='#9cc850';
                

                x.insertCell(6);     
                 worldid.rows[i].cells[6].innerHTML=data['Countries'][i-1]['NewDeaths'];              
                  worldid.rows[i].cells[6].style.background='#f36e23';


                }    
    }


    )
}


</script>


</body>
</html>

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
$username=$_POST['username'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$symp=$_POST['coronasym'];
$message=$_POST['msg'];
$chk="";
foreach ($symp as $chk1) {
$chk.=$chk1.",";
}
$insertquery="insert into coronacase(username,email,mobile,symptoms,message) values('$username', '$email', '$mobile', '$chk', '$message')";
$query= mysqli_query($con, $insertquery);
  if($query){
    ?>
    <script >
      alert("inserted successful");
    </script>
    <?php
  }else{
    ?>
    <script >
      alert("no inserted ");
    </script>
      <?php
}
}
?>