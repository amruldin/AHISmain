<?php include 'head.php'; ?>




<?php 

  require "idGen.php";

  $ahisId = createUserId("pharmacy");


 ?>

 <?php


// Add data to the database

if(isset($_POST['submit']))

{

$cellPhone2 = $_POST['cellPhone2'];
$pin = $_POST['pin'];
$pharmacistName = $_POST['pharstName'];
$mgName = $_POST['mgName'];
$lNumber = $_POST['lNumber'];
$phName = $_POST['phName'];
$street = $_POST['street'];
$city = $_POST['city'];
$district = $_POST['district'];
$village = $_POST['village'];
$country = $_POST['country'];
$telephone = $_POST['telephone'];
$cellPhone = $_POST['cellPhone'];
$email = $_POST['email'];
$website = $_POST['website'];
$employeeCount = $_POST['empNumber'];
$hours = $_POST['operation'];


$query = "INSERT INTO `pharmacy`


        (`phId`, `pharmacyName`, `licNumber`, `street`, `district`, `village`, `city`, `country`, `telephone1`, `telephone2`, `mobilePhone`, `email`, `website`, `hours`, `pharmacistName`, `employeeCount`, `managerNamer`, `regDate`, `pin`) 



VALUES (



        '$ahisId','$phName','$lNumber','$street','$district','$village','$city','$country','$telephone','$cellPhone2','$cellPhone','$email','$website','$hours','$pharmacistName','$employeeCount','$mgName',NULL,'$pin')";


$runQuery = mysql_query($query);

if($runQuery)
{
  header('Location: wel.php');
}
else
{
  echo mysql_error();

}

}


  
?>





<form name="phForm" action="pharmacyForm.php" method="POST">


<h5>Pharmacy ID/PIN Setup </h5>
<p>****************************************************************************</p>
<br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">AHIS ID</label>
      <input type="text" class="form-control" id="ahisId" placeholder="AHIS ID" disabled value="<?php echo $ahisId ?>">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enter Your 4 Digit PIN</label>
      <input type="password" class="form-control" id="pin" placeholder="PIN" name="pin" required>
        <br> 
      <br>
    </div>

  </div>



  <h5>Pharmacy Primary Info.</h5>

  <p>****************************************************************************</p>

  <div class="form-row">

  
    <div class="form-group col-md-6">
    <label>Pharmacy Name</label>
    <input type="text" name="phName" id="phName" class="form-control" placeholder="Watan, Rahat" required>
    </div>


     <div class="form-group col-md-6">
    <label>Pharmacist Name</label>
    <input type="text" name="pharstName" id="pFName" class="form-control" placeholder="First Name" required>
    </div>


         <div class="form-group col-md-6">
    <label>Manager Name</label>
    <input type="text" name="mgName" id="mgName" class="form-control" placeholder="i.e Aziz Ahmadi...." required>
    </div>




    <div class="form-group col-md-6">
    <label>License Number</label>
    <input type="text" name="lNumber" id="lNumber" class="form-control" placeholder="Gov. License#" required>
    </div>


    <div class="form-group col-md-6">
    <label># Of Employee(s)</label>
    <input type="number" name="empNumber" id="lNumber" class="form-control" placeholder="1,2,3..." required>
    </div>




       <div class="form-group col-md-4">
        <label for="Sex">Hours Of Operation</label>
        <select id="sex" class="form-control" name="operation">
        <option selected>Choose...</option>
        <option value="day">6AM-6PM SAT-THU</option>
        <option value="247">24/7</option>
        <option value="day2">8AM-8PM/7</option>


        </select>
      </div>

    </div>

    <br>


  <h5>Pharmacy Address and Contact Info.</h5>

  <p>****************************************************************************</p>
<br>


 <div class="form-row">



    <div class="form-group col-md-6">
    <label>Street</label>
    <input type="text" name="street" id="street" class="form-control" placeholder="i.e Darb Malik,...">
    </div>


    <div class="form-group col-md-6">
    <label>City</label>
    <input type="text" name="city" id="city" class="form-control" placeholder="i.e Herat, Kabul, ...">
    </div>


     <div class="form-group col-md-6">
    <label>District</label>
    <input type="text" name="district" id="district" class="form-control" placeholder="9, 8, or enjil,...">
    </div>



    <div class="form-group col-md-6">
    <label>Village</label>
    <input type="text" name="village" id="district" class="form-control" placeholder="i.e Ganj, Shiwan,...">
    </div>


    <div class="form-group col-md-6">
    <label>Country</label>
    <input type="text" name="country" id="city" class="form-control" placeholder="i.e Afghanistan...">
    </div>



    <div class="form-group col-md-6">
    <label>Telephone Number</label>
    <input type="Telephone" name="telephone" id="telephone" class="form-control" placeholder="040-222333">
    </div>


      <div class="form-group col-md-6">
    <label>Cell Phone 1</label>
    <input type="Telephone" name="cellPhone" id="telephone" class="form-control" placeholder="040-222333">
    </div>


    <div class="form-group col-md-6">
    <label>Cell Phone 2</label>
    <input type="Telephone" name="cellPhone2" id="cellPhone2" class="form-control" placeholder="797009001">
    </div>


    <div class="form-group col-md-6">
    <label>Email</label>
    <input type="Email" name="email" id="email" class="form-control" placeholder="email">
  </div>


  <div class="form-group col-md-6">
    <label>Website</label>
    <input type="website" name="website" id="occupation" class="form-control" placeholder="www.xyz.com">
    </div>




 </div>



 <br>




  <div class="form-row">
      
      
      <button type="submit" class="btn btn-primary" name="submit">Register</button>
      <button type="reset" class="btn btn-danger" name="reset">Reset Form</button>



  </div>


      <br>
     

</form>



<?php include 'foot.php';?>




