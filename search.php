

<!DOCTYPE html>
<html>
<head>
	<title> 
		Search Prescription
	</title>
</head>
<body>

	<div>

		<form action="search.php" method="POST">

			<input type="text" name="id" placeholder="Enter Prescription id">

			<input type="submit" name="search" value="Search">


		</form>


	</div>

</body>
</html>


<?php
//include 'head.php';
require 'connect.inc.php';


function search($id)
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


	$queryDoctor = "SELECT `firstName`, `lastName`, `speciality1`, `speciality2`, `speciality3`, `email`, `website`, `officeName`, `district`, `street`, `city`, `villiage`, `country`,`telephone`, `cellPhone`, `emContactNumber` FROM `doctor` WHERE dId = '$doctorId'";

	$getDoctor = mysql_query($queryDoctor);

	if($getDoctor)
	{
		while($data = mysql_fetch_array($getDoctor))
		{
			echo "***********************************************************";
			echo "<h3> Doctor: ".$data['firstName'].$data['lastName']."</h3>";

			echo "<br>";

			echo "<h3> Specialities : ".$data['speciality1']. " ". $data['speciality2']. " ".$data['speciality3']."</h3>";

			echo "<br>";

			echo "<h3> Email : ".$data['email']."</h3>";


			echo "<br>";

			echo "<h3> website : ".$data['website']."</h3>";

			echo "<br>";

			echo "Address <br>";
			echo "<h4> Office : ".$data['officeName']."<h4>";

			echo "<h4> District ".$data['district']. "Street: ".$data['street']."City:".$data['city']."<h4>";
			echo "<br>";

			echo "<h4> Villiage ".$data['villiage']. "Country : ". $data['country']."<h4>";

			echo "Contact : <br>";

			echo "<h3> Telephone : ".$data['telephone']."</h3>";
			echo "<h3> Cell Phone : ".$data['cellPhone']."</h3>";
			echo "<h3> Emergency : ".$data['emContactNumber']."</h3>";
			echo "*****************************************************";

		}
	}






	$query = "SELECT `pcId`, `drugGenericName`, `drugTradeName`, `instructions`, `quantity` FROM `drug` WHERE pcId = '$id'";


	$queryRun = mysql_query($query);

	if($queryRun)
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



}



 ?>


<?php

if(isset($_POST['search']))
{
	if($_POST['id'] != " ")

	{
		$pram = $_POST['id'];

	}


	search($pram);


}


	
	


//include('foot.php');

?>
