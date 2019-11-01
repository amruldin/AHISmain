<?php

require 'connect.inc.php';


function logout()
{

	// Initialize the session
session_start();
 
// Unset all of the session variables
$_SESSION = array();
 
// Destroy the session.
session_destroy();
 
// Redirect to login page
header("location: login.php");
exit;

}

function pExist($id)
{

	$query = "SELECT 'pId' from patient where pId = '$id' ";

	if($runQuery = mysql_query($query))
	{
		if(mysql_num_rows($runQuery) == 1)
		{
			return true;

		}
		else
		{
			return false;
		}

	}
	else
	{
		echo mysql_error();;
	}


}




function prescExist($id)
{

	$query = "SELECT 'pcId' from prescription where pcId = '$id' ";

	if($runQuery = mysql_query($query))
	{
		if(mysql_num_rows($runQuery) == 1)
		{
			return true;

		}
		else
		{
			return false;
		}

	}
	else
	{
		echo mysql_error();;
	}


}


function getAllDrugs($id)
{


}


function getallDiag()
{

}

function getAllPresc()
{

}


function addDrugs($pcId, $pId, $dId,$type,$genName, $tradeName, $instruction,$quantity)
{
	// $sql = "INSERT INTO `drug`

	// (`pcId`,'phId',`pId`, `dId`, `drugType`, `drugGenericName`, `drugTradeName`, `instructions`,'quantity','unitCost','totaCost')


	//  VALUES 

	//  ('$pcId',NULL,'$pId','$dId','$type','$genName','$tradeName','$instruction','$quantity',NULL,NULL)";



	 $sql = "INSERT INTO `drug`(`id`, `pcId`, `phId`, `pId`, `dId`, `drugType`, `drugGenericName`, `drugTradeName`, `instructions`, `quantity`, `unitCost`, `totalCost`) VALUES

	  (NULL,'$pcId',NULL,'$pId','$dId','$type','$genName','$tradeName','$instruction','$quantity',NULL,NULL)";


	 if($mysqlRun = mysql_query($sql))
	 {
	 	echo "Added";
	 }
	 else
	 {
	 	echo 'Adding Drugs'. mysql_error();
	 }


}



function pcIdGen()
{

	$id  = rand(1000000,3000000);
	$pcId = 'pcId'.$id;
	$exist = false;

	$sql = "SELECT pcId from prescription where pcId = '$pcId'";

	if($run = mysql_query($sql))
	{
		if(mysql_num_rows($run) == 1)
		{
			return "PcId Taken";
		}
		else
		{
			return $pcId;
		}
	}
	else
	{
		echo 'pciD generetor'.mysql_error();

	}

}



function docInfo($dId)
{
	$sql = "SELECT 'dId',`firstName`, `lastName`, `speciality1`, `speciality2`, `speciality3`,`officeName`, `district`, `street`, `city`, `villiage`, `country`, `telephone`, `cellPhone`, `emContactNumber` FROM `doctor` WHERE dId = '$dId'";



	$sqlRun = mysql_query($sql);


	if($sqlRun)
	{

		while ($row = mysql_fetch_array($sqlRun)) {
			$firstName = $row['firstName'];
			$lastName = $row['lastName'];
			$spec1 = $row['speciality1'];
			$spec2 = $row['speciality2'];
			$spec3 = $row['speciality3'];
			$office = $row ['officeName'];
			$district = $row['district'];
			$street = $row['street'];
			$city = $row['city'];
			$villiage = $row ['villiage'];
			$country = $row['telephone'];
			$cellPhone = $row['cellPhone'];
			$emContact = $row['emContactNumber'];

		}

		return "<div id ='infoBox'> ". "Doctor:"."<br>".$firstName." ".$lastName."<br>". "Speciality : "."<br>".$spec1.",".$spec2.",".$spec3."<br>"."Address :". "<br>".$office."<br>"."district ".$district."<br>".$street." ". $city. " ".$villiage."<br>".$country."<br>"."Cell Phone: ".$cellPhone."<br>"."Emergency : ".$emContact."</div>";


		
	}
	else
	{
		echo mysql_error();
	}



}


function patientInfo($pId)
{

	$sql = "SELECT `pId`, `firstName`, `lastName`, `age`, `telephone`, `bloodType` FROM `patient` WHERE pId = '$pId'";



	$sqlRun = mysql_query($sql);


	if($sqlRun)
	{

		while ($row = mysql_fetch_array($sqlRun)) {
			$firstName = $row['firstName'];
			$lastName = $row['lastName'];
			$age = $row['age'];
			$telephone = $row['telephone'];
			$bloodType = $row['bloodType'];

		}

		return "<div id ='infoBox'>"."Patient :". "<br>".$firstName." ".$lastName."<br>"."Age : ".$age."<br>"."Cell Phone: ".$telephone."</div>";


		
	}
	else
	{
		echo mysql_error();
	}



}


function addPrescription($pcId,$pId,$dId)
{
	$date = date("F j, Y, g:i a");

	$sql = "INSERT INTO `prescription`

	(`pcId`, `pId`, `dId`, `date`, `pickUpBy`, `receiverIdNumber`, `receiverTiesToPatient`, `issuedBy`, `preparedBy`, `refillAllowed`, `totalCost`) VALUES 

		('$pcId','$pId','$dId','$date',NULL,NULL,NULL,NULL,NULL,NULL,NULL)";

	if($runSql = mysql_query($sql))
	{
		//echo "New Prescription Added ";
	}
	else
	{
		echo mysql_error();
	}

}


function listAllDrugs($id)
{


	$query = "SELECT `pcId`, `drugGenericName`, `drugTradeName`, `instructions`, `quantity` FROM `drug` WHERE pId = '$id'";


	$queryRun = mysql_query($query);

	if(mysql_num_rows($queryRun) > 0)
	{

		echo "<table class=resultsT>";
            echo "<tr>";
                echo "<th>Prescription ID </th>";
                echo "<th>Drug Generic Name</th>";
                echo "<th>Drug Trade Name</th>";
                echo "<th>Instructions</th>";
                echo "<th>Quantity</th>";


            echo "</tr>";
        while($row = mysql_fetch_array($queryRun))
        {

            	echo "<tr>";
                echo "<td>".$row['pcId']."</td>";
                echo "<td>".$row['drugGenericName']."</td>";
                echo "<td>".$row['drugTradeName']."</td>";
                echo "<td>".$row['instructions']."</td>";
                echo "<td>".$row['quantity']."</td>";


            echo "</tr>";
        }
        echo "</table>";



	}
	else
	{
		echo "<br><br><br>"."No Drugs Found!";
	}
	
}





function docName($dId)
{
	$sql = "SELECT 'dId',`firstName`, `lastName`, `speciality1`, `speciality2`, `speciality3`,`officeName`, `district`, `street`, `city`, `villiage`, `country`, `telephone`, `cellPhone`, `emContactNumber` FROM `doctor` WHERE dId = '$dId'";



	$sqlRun = mysql_query($sql);


	if($sqlRun)
	{

		while ($row = mysql_fetch_array($sqlRun)) {
			$firstName = $row['firstName'];
			$lastName = $row['lastName'];
			$spec1 = $row['speciality1'];
			$spec2 = $row['speciality2'];
			$spec3 = $row['speciality3'];
			$office = $row ['officeName'];
			$district = $row['district'];
			$street = $row['street'];
			$city = $row['city'];
			$villiage = $row ['villiage'];
			$country = $row['telephone'];
			$cellPhone = $row['cellPhone'];
			$emContact = $row['emContactNumber'];

		}

		return "<div id ='infoBox'> "."<br>"."Dr. ".$firstName." ".$lastName."<br><br>". " Speciality : "."<br>".$spec1.", ".$spec2.", ".$spec3."<br><br>"."Cell Phone: ".$cellPhone."<br>"."Emergency : ".$emContact."</div>";


		
	}
	else
	{
		echo mysql_error();
	}



}




function searchPres($id)
{

	$queryPresc = "SELECT `pcId`, `pId`, `dId`, `date`, `refillAllowed` FROM `prescription` WHERE pcId = '$id'";


	$run = mysql_query($queryPresc);

	if($run)
	{
		while ($item = mysql_fetch_array($run)) {

			$prescriptionId = $item['pcId'];
			$patientId = $item['pId'];
			$doctorId = $item['dId'];
			$date = $item['date'];
			$refill = $item['refillAllowed'];

			
		}

		echo "<h2> ID: ".$prescriptionId ."</h2>";
		echo "<h3> Date :".$date."</h3>";
		echo "<h3> Refill :".$refill."</h3>";


	}

}



function pcExist($id)
{

	$query = "SELECT 'pcId' from prescription where pcId = '$id' ";

	if($runQuery = mysql_query($query))
	{
		if(mysql_num_rows($runQuery) == 1)
		{
			return true;

		}
		else
		{
			return false;
		}

	}
	else
	{
		echo mysql_error();;
	}


}


function listDrugs($id)
{


	$query = "SELECT `pcId`, `drugGenericName`, `drugTradeName`, `instructions`, `quantity` FROM `drug` WHERE pcId = '$id'";


	$queryRun = mysql_query($query);

	if(mysql_num_rows($queryRun) > 0)
	{

		echo "<table class=resultsT>";
            echo "<tr>";
                
                echo "<th>Drug Generic Name</th>";
                echo "<th>Drug Trade Name</th>";
                echo "<th>Instructions</th>";
                echo "<th>Quantity</th>";


            echo "</tr>";
        while($row = mysql_fetch_array($queryRun))
        {

            	echo "<tr>";
   
                echo "<td>".$row['drugGenericName']."</td>";
                echo "<td>".$row['drugTradeName']."</td>";
                echo "<td>".$row['instructions']."</td>";
                echo "<td>".$row['quantity']."</td>";


            echo "</tr>";
        }
        echo "</table>";



	}
	else
	{
		echo "<br><br><br>"."";
	}
	
}


function deletePres($id) {

	$query = "DELETE from prescription where pcId = '$id'";

	if(mysql_query($query))
	{
		//echo "deleted!";
	}
	else
	{
		echo mysql_error();
	}

}



function deleteDrugs($id) {

	$query = "DELETE from drug where pcId = '$id'";

	if(mysql_query($query))
	{
		//echo "deleted!";
	}
	else
	{
		echo mysql_error();
	}

}

// fullfilling a prescription

function updatePresc($count, $drugsId, $uCost, $phId,$instructions, $totalCost)
{
	$query = "update drug
			  SET phId = '', instructions = '' , unitCost = '', totalCost =''
			  WHERE id = ''";


	for($i = 0; $i < $count;$i++)
	{
		$query = "UPDATE `drug`
		 SET `phId`= '$phId',`instructions`='$instructions[$i]',`unitCost`= '$uCost[$i]' ,`totalCost` = '$totalCost[$i]' WHERE `id` = '$drugsId[$i]'";

		 if(!mysql_query($query))
		 {
		 	echo mysql_error();
		 }
		 else
		 {
		 	echo "Success";
		 }


	}


}


function pharmacyInfo($phId){

	$sql = "SELECT `pharmacyName`,`street`, `district`, `village`, `city`, `country`, `telephone1`, `mobilePhone`, `hours` FROM `pharmacy` WHERE phId = '$phId'";



	$sqlRun = mysql_query($sql);


	if($sqlRun)
	{

		while ($row = mysql_fetch_array($sqlRun)) {

			$name = $row['pharmacyName'];
			$street = $row['street'];
			$district = $row['district'];
			$villiage = $row['village'];
			$city = $row['city'];
			$country = $row ['country'];
			$emContact = $row['telephone1'];
			$cellPhone = $row['mobilePhone'];
	
		}

		

	return "<div id ='infoBox'>". "Pharmacy:"."<br>".$name."<br>"."Address :". "<br>" ."District: ".$district."<br>".$street."<br> ".$city. "<br> ".$villiage."<br>".$country."<br>"."Mobile Phone: ".$cellPhone."<br>"."Telephone:".$emContact."</div>";
	}
	else
	{
		echo mysql_error();
	}




}








?>