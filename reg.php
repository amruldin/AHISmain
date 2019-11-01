<?php include "head.php";?>


<form name="register" action="<?php $_PHP_SELF ?>" method="POST" >


  <div class="form-row">
  	<a href="login.php"><input type="button" name="login" value="Back to Login"></a>

  	  <div class="form-group col-md-4">
   
      <select id="inputState" class="form-control" name="accountType">
        <option selected value="-1">Choose Account Type...</option>
        <option value="doctor" >Doctor</option>
        <option value="patient">Patient</option>
        <option value="pharmacy">Pharmacy</option>
        <option value="reciptionist">Reciptionist</option>
      </select>
   
    </div>


    <div class="form-group">

    	
    		   <button type="submit" class="btn btn-primary" name="go">Go</button>
    	</div>

</div>

</form>


<?php

if(isset($_POST["go"]))
{
	$error = "Please Select Account Type";
	
	if(isset($_POST['accountType'])){
		
		$selectedAccount = $_POST['accountType'];

		if($selectedAccount == "doctor"){
			include "doctorForm.php";
		}
		elseif ($selectedAccount == "patient") {
			include "patientForm.php";
		}
		elseif ($selectedAccount == "pharmacy") {
			include "pharmacyForm.php";
		}
		elseif ($selectedAccount == "reciptionist") {
			include "reciptionistForm.php";
		}
		else
		{
			echo $error;

		}



	}
	else{
		echo "False";
	}





}


	







?>














<?php include "foot.php";?>
