

<?php

session_start();

include 'func.php';
include "head.php";

$pId = $_SESSION['pId'];




?>












    <div>
      


    </div>




	<div class="container">


<?php echo patientInfo($pId); ?>


<form method="Post" action="docPortal.php">

   <input type="submit" name="home" value="Home">
    <input type="submit" name="logout" value="logout">
</form>



<br>
<br>
<br>
<br>
<br>

  <div class="row">


    <form name="controls" action="docPortal.php" method="POST">



 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  

   <a class="navbar-brand" href="#">Options</a>

   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav modifiedBar">


        <button type="submit" class="dropdown-item" name="patientInfo">Patient Info</button>


        <button type="submit" class="dropdown-item" name="search">Search Prescription</button>


        <button type="submit" name="drugs" class="dropdown-item">Drugs</button>



         <a href="prescribe.php"><button type="button" name="prescribe" class="dropdown-item">Prescribe</button></a>









    </div>
  </div>
</nav>








</form>



    <div class="col-xl-">



      

      <?php


      if(isset($_POST['logout']))
      {
        logout();


      }

      if(isset($_POST['drugs']))
      {
        listAllDrugs($pId);

      }


      if(isset($_POST['home']))
      {
        $_SESSION['pcID'] = null;
        header("location:docHome.php");
      }

      if(isset($_POST['patientInfo']))
      {
        echo patientInfo($pId);

      }

       ?>




    </div>




  </div>

</div>




<?php include "foot.php";?>