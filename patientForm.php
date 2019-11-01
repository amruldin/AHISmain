<?php include 'head.php'; ?>

<?php 
 

  require "idGen.php";

  $ahisId = createUserId("patient");


 ?>



<?php


// Add data to the database

if(isset($_POST['submit']))

{




$pin = $_POST['pin'];
$fName = $_POST['fName'];
$lName = $_POST['lName'];
$fatherName = $_POST['fatherName'];
$pob = $_POST['pob'];
$dob = $_POST['dob'];
$height = $_POST['height'];
$tazkerah = $_POST['tazkerah'];
//$nationality = $_POST['nationality'];
$age = $_POST['age'];
$house = $_POST['house'];
$occupation = $_POST['occupation'];
$street = $_POST['street'];
$city = $_POST['city'];
$district = $_POST['district'];
$village = $_POST['village'];
$country = $_POST['country'];
$telephone = $_POST['telephone'];
//$cellPhone = $_POST['cellPhone'];
$email = $_POST['email'];
$country = $_POST['country'];
$maritalStatus = $_POST['maritalStatus'];
$sex = $_POST['sex'];
$bloodType = $_POST['bloodType'];
$emContactName = $_POST['emContactName'];
$emConactRela = $_POST['relative'];
$emTelephone = $_POST['emTelephone'];


$query = "INSERT INTO `patient`



  (`pId`, `firstName`, `lastName`, `fatherName`, `idNumber`, `dob`, `pob`, `age`, `height`, `occupation`, `telephone`, `email`, `house`, `district`, `village`, `street`, `city`, `country`, `sex`, `maritalStatus`, `emContactNumber`, `emContactName`, `emContactRelationship`, `regDate`, `bloodType`, `pin`)

   VALUES 

   ('$ahisId','$fName','$lName','$fatherName','$tazkerah','$dob','$pob','$age','$height','$occupation','$telephone','$email','$house','$district','$village','$street','$city','$country','$sex','$maritalStatus','$emTelephone','$emContactName','$emConactRela',NULL,'$bloodType','$pin')";

$runQuery = mysql_query($query);

if($runQuery)
{
  header('Location: wel.php');
}
else
{
  echo "Registration ::".mysql_error();

}

}


  
?>





<form name="patientForm" action="patientForm.php" method="POST">



<h5>ID/PIN Setup </h5>
<p>****************************************************************************</p>
<br>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="">AHIS ID</label>
      <input type="text" class="form-control" id="ahisId" placeholder="AHIS ID" value= "<?php echo $ahisId;?>" disabled>
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Enter Your 4 Digit PIN</label>
      <input type="password" class="form-control" id="pin" placeholder="PIN" name="pin">
        <br> 
      <br>
    </div>

  </div>



  <h5>Enter Patient Info</h5>

  <p>****************************************************************************</p>

  <div class="form-row">

  
    <div class="form-group col-md-6">
    <label>First Name</label>
    <input type="text" name="fName" id="pFName" class="form-control" placeholder="First Name">
    </div>


    <div class="form-group col-md-6">
    <label>Last Name</label>
    <input type="text" name="lName" id="pLName" class="form-control" placeholder="Last Name">
    </div>


    <div class="form-group col-md-6">
    <label>Father's Name</label>
    <input type="text" name="fatherName" id="pLName" class="form-control" placeholder="Father's Name">

    </div>


       <div class="form-group col-md-4">
        <label for="Sex">Sex</label>
        <select id="sex" class="form-control" name="sex">
        <option selected>Choose...</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>

      </select>
    </div>


       <div class="form-group col-md-4">
        <label for="">Marital Status</label>
        <select id="marital" name="maritalStatus" class="form-control">
        <option selected>Choose...</option>
        <option value="Married">Married</option>
        <option value="Single">Single</option>

      </select>
    </div>

     <div class="form-group col-md-6">
    <label>Occupation</label>
    <input type="text" name="occupation" id="occupation" class="form-control" placeholder="i.e Tailor,...">

    </div>


    <div class="form-group col-md-6">
    <label>Tazkerah (ID) Number</label>
    <input type="text" name="tazkerah" id="tazkerah" class="form-control" placeholder="0123456789">

    </div>


     <div class="form-group col-md-6">
    <label>Data Of Birth</label>
    <input type="text" name="dob" id="dob" class="form-control" placeholder="01/02/1980">

    </div>


    <div class="form-group col-md-6">
    <label>Age</label>
    <input type="Number" name="age" id="age" class="form-control" placeholder="20, 25, ...">

    </div>


     <div class="form-group col-md-6">
    <label>Height in Meters</label>
    <input type="text" name="height" id="height" class="form-control" placeholder="1.65 , 1.8 ...">

    </div>

    

    <div class="form-group col-md-6">
    <label>Blood Type</label>
    <input type="text" name="bloodType" id="bloodType" class= "form-control" placeholder="AB+, A+, B+, O- ....">

    <br>
    <br>
    </div> 



  </div>




  <h5>Address and Contact Info</h5>

  <p>****************************************************************************</p>

 <div class="form-row">

    <div class="form-group col-md-6">
    <label>Place Of Birth</label>
    <input type="text" name="pob" id="dob" class="form-control" placeholder="Herat, Kabul,...">

    </div>



    <div class="form-group col-md-6">
    <label>House#/Name</label>
    <input type="text" name="house" id="telephone" class="form-control" placeholder="House # / Name">

  </div>



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
    <input type="Telephone" name="telephone" id="telephone" class="form-control" placeholder="797009001">

    </div>


    <div class="form-group col-md-6">
    <label>Email</label>
    <input type="Email" name="email" id="email" class="form-control" placeholder="email">

    <br>

    <br>


    </div>



   
  </div>

 

  <h5>Emergency Contact Info</h5>

  <p>****************************************************************************</p>


  <div class="form-row">


       <div class="form-group col-md-4">
        <label for="">Relationship</label>
        <select id="relative" name="relative" class="form-control">
        <option selected>Choose...</option>
        <option value="Spouse">Spouse</option>
        <option value="Father">Father</option>
        <option value="Mother">Mother</option>
        <option value="Brother">Brother</option>
        <option value="Sister">Sister</option>
        <option value="Friend">Friend</option>
        <option value="other">Other</option>

      </select>
      </div>





      <div class="form-group col-md-6">
      <label>Name</label>
      <input type="text" name="emContactName" id="emContactName" class="form-control" placeholder="EM. Contact Name">
      </div>




      <div class="form-group col-md-6">
      <label>Contact Number</label>
      <input type="Telephone" name="emTelephone" id="emTelephone" class="form-control" placeholder="EM. Contact#">
      <br>
      <br>


      </div>


  </div>



  <div class="form-row">
      
      
      <button type="submit" class="btn btn-primary" name="submit">Register</button>
      <button type="reset" class="btn btn-danger" name="reset">Reset Form</button>



  </div>


      <br>
     

</form>





<?php include 'foot.php';?>


